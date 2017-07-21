<?php

namespace App\Http\Controllers\Adminauth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Input;
use Redirect;
use URL;
use App\TempOrder;
use App\Order;
use App\OrderDetails;
use Auth;
use App\Music;
use App\User;
use App\Cart; 


class PaypalController extends Controller
{
	private $_api_context;
    public function __construct()
    {
        // setup PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

	public function postPayment(Request $request)
	{
		
	    $payer = new Payer();
	    $payer->setPaymentMethod('paypal');
	    $orders = TempOrder::where('user_id', Auth::user()->id)->get();
	    $allorders = array();
	    $total = 0;
	    foreach($orders as $order){
	    	$item_1 = new Item();
	    	$allorders[] = $item_1->setName($order->music_title) // item name
	        ->setCurrency('USD')
	        ->setQuantity(1)
	        ->setSku($order->music_id)
	        ->setPrice($order->music_price); 
	        $total = $total + $order->music_price;
	    }
	    // add item to list
	    $item_list = new ItemList();
	    $item_list->setItems($allorders);
	    $amount = new Amount();
	    $amount->setCurrency('USD')
	        ->setTotal($total);
	    $transaction = new Transaction();
	    $transaction->setAmount($amount)
	        ->setItemList($item_list)
	        ->setDescription('Your transaction description');
	    $redirect_urls = new RedirectUrls();
	    $redirect_urls->setReturnUrl(URL::route('payment.status'))
	        ->setCancelUrl(URL::route('payment.status'));
	    $payment = new Payment();
	    $payment->setIntent('Sale')
	        ->setPayer($payer)
	        ->setRedirectUrls($redirect_urls)
	        ->setTransactions(array($transaction));
	    try {
	        $payment->create($this->_api_context);
	    } catch (\PayPal\Exception\PPConnectionException $ex) {
	        if (\Config::get('app.debug')) {
	            echo "Exception: " . $ex->getMessage() . PHP_EOL;
	            $err_data = json_decode($ex->getData(), true);
	            exit;
	        } else {
	            die('Some error occur, sorry for inconvenient');
	        }
	    }
	    foreach($payment->getLinks() as $link) {
	        if($link->getRel() == 'approval_url') {
	            $redirect_url = $link->getHref();
	            break;
	        }
	    }
	    // add payment ID to session
	    \Session::put('paypal_payment_id', $payment->getId());
	    if(isset($redirect_url)) {
	        // redirect to paypal
	        return Redirect::away($redirect_url);
	    }
	    return Redirect::route('original.route')
	        ->with('error', 'Unknown error occurred');
	}


	public function getPaymentStatus()
{
    // Get the payment ID before session clear
    $payment_id = \Session::get('paypal_payment_id');
    // clear the session payment ID
    \Session::forget('paypal_payment_id');
    if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
        return Redirect::route('original.route')
            ->with('error', 'Payment failed');
    }
    $payment = Payment::get($payment_id, $this->_api_context);
    
    $execution = new PaymentExecution();
    $execution->setPayerId(Input::get('PayerID'));
    
    //Execute the payment
    $result = $payment->execute($execution, $this->_api_context);
    $orderId = $result->getId();
    if ($result->getState() == 'approved') { // payment made
    	$order['customer_id'] = Auth::user()->id;
    	$order['total'] = $result->transactions[0]->amount->total;
    	$order['approved'] = '1';
    	$order['tax'] = '0';
    	$order['discount'] = '0';
    	$order['license'] = 'Standard';
    	$order['created_at'] = $result->transactions[0]->create_time;
    	$order['updated_at'] = $result->transactions[0]->update_time;
    	$completeOrder = Order::create($order);
    	$lastOrderId = $completeOrder->id;
    	if($completeOrder){
    		foreach($result->transactions[0]->item_list->items as $item){
		    	$orderDetails['order_id'] = $lastOrderId;
		    	$orderDetails['music_id'] = $item->sku;
		    	$orderDetails['price'] = $item->price;
		    	OrderDetails::create($orderDetails);
		    	$producer_id = Music::where('id', $item->sku)->get();
		    	$previousbalance = User::where('id', $producer_id[0]->producer_id)->get();
		    	$current_balance = $previousbalance[0]->balance + $item->price;
		    	User::where('id', $producer_id[0]->producer_id)->update(array('balance' => $current_balance));
    		}
    	}

    	//clear cart
    	Cart::where('user_id',Auth::user()->id)->delete();
    	TempOrder::where('user_id', Auth::user()->id)->delete();
    	
    	$myAllOrders = TempOrder::where('user_id', Auth::user()->id)->get();
    	foreach($myAllOrders as $myOrder){
    		TempOrder::where('user_id', Auth::user()->id)->delete();
    	}
        if(Auth::user()->user_type == 'customer'){
        	return redirect('/useraccount?st=success');
    	}
    	if(Auth::user()->user_type == 'producer'){
        	return redirect('/producerhome?st=success');
    	}
    	if(Auth::user()->user_type == 'admin'){
        	return redirect('/adminhome?st=success');
    	}
    	if(Auth::user()->user_type == 'moderator'){
        	return redirect('/moderatorhome?st=success');
    	}
    }
    if(Auth::user()->user_type == 'customer'){
        	return redirect('/useraccount?st=success');
    	}
    	if(Auth::user()->user_type == 'producer'){
        	return redirect('/producerhome?st=success');
    	}
    	if(Auth::user()->user_type == 'admin'){
        	return redirect('/adminhome?st=success');
    	}
    	if(Auth::user()->user_type == 'moderator'){
        	return redirect('/moderatorhome?st=success');
    	}
}




}