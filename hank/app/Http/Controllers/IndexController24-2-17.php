<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Http\Requests;
use Auth;
use Input;
use DB;
use Redirect;
use App\Payment;
use App\Music;
use App\User;
use App\Temp;
use App\Order;
use App\OrderDetails;
use Excel;
use Session;
     
class IndexController extends Controller
{
	protected $settings;	
	public function __construct()
	{
		$this->settings = \App\Models\Setting::find(1);
	}
	
	public function index2()
	{

		return view('index', compact('data'));
	}
	
	public function index()
	{
       // print "hello";
		return view('useraccount', compact('data'));
	}
	
	public function useraccount()
	{
      $paymentsettings_info = Payment::where('user_id',  Auth::user()->id)->first();
	   $data['paymentsettings_info'] = $paymentsettings_info;
		return view('useraccount',$data);
	}
	
	public function userpayment()
	{
       $paymentsettings_info = Payment::where('user_id',  Auth::user()->id)->first();
	   $data['paymentsettings_info'] = $paymentsettings_info;
	   return view('userpayment', $data);
	}
	public function producerhome()
	{
		$musics = Music::where('approved', 1)->where('producer_id', Auth::user()->id)->where('status', null)->get();
		$orders = array();
		$music = array();
		$orders = OrderDetails::select('music_id', 'price')->get();
		$musics = Music::where('producer_id', Auth::user()->id)->where('approved', 1)->where('status', null)->get();
		$balance = 0;
		foreach($orders as $order){
			foreach($musics as $music){
				if($order->music_id == $music->id){
					$balance = $balance + $order->price;
				}
			}
		}
		User::where('id', Auth::user()->id)->where('user_type', 'producer')->update(array('balance'=> $balance));
		$music_id = array();
		$musics_all = array();
		$music_id= Music::select('id')->where('producer_id', Auth::user()->id)->get();
		$musics_all = OrderDetails::whereIn('music_id', $music_id)->get();
		$totalSold = count($musics_all);
		return view('producerhome')->with('musics', $musics)->with('balance', $balance)->with('totalSold', $totalSold);
	}

	public function adminhome()
	{
		//$musics = Music::where('approved', 1)->where('producer_id', Auth::user()->id)->get();
		$orders = array();
		$music = array();
		$orders = Order::all();
		$OrderDetails = OrderDetails::all();
		$musics = Music::orderBy('id', 'desc')->take(5)->get();
		$balance = 0;
		$totalSold1 = array();
		foreach($orders as $order){
			if(date('Y-m-d',strtotime($order->created_at)) == date('Y-m-d')){
				$balance = $balance + $order->total;
			}
		}
		foreach($OrderDetails as $OrderDetail){
			foreach($orders as $order){
				if((date('Y-m-d',strtotime($order->created_at)) == date('Y-m-d'))&&($order->id == $OrderDetail->order_id)){
					$totalSold1[] = $OrderDetail->music_id;
				}
			}
		}
		/*$music_id = array();
		$musics_all = array();
		$music_id= Music::select('id')->where('producer_id', Auth::user()->id)->get();
		$musics_all = OrderDetails::whereIn('music_id', $music_id)->get();*/
		$totalSold = count($totalSold1);
		$userinfo = User::where('id',  Auth::user()->id)->first();
		$producers = User::all();/*User::where('user_type', 'producer')->get();*/
		return view('adminhome')->with('musics', $musics)->with('balance', $balance)->with('totalSold', $totalSold)->with('userinfo', $userinfo)->with('producers', $producers);

	}
	public function moderatorhome()
	{
		$musics = Music::orderBy('id', 'DESC')->get();
		return view('moderatorhome')->with('musics', $musics);
	}
	public function producerSettings()
	{
		$userinfo = User::where('id',  Auth::user()->id)->first();
		return view('produceraccoutsettings')->with('userinfo', $userinfo);
	}

	public function producerPaymentHistory()
	{
		$paymentHistory = DB::table('payouts')->where('user_id',  Auth::user()->id)->get();
		return view('producerpaymenthistory')->with('payments', $paymentHistory);
	}

	public function producerPendingApproval()
	{
               
		$musics = Music::where('producer_id',  Auth::user()->id)->where('approved', 0)->where('status', null)->get();
		return view('producerpendingapproval')->with('musics', $musics);
	}
	public function adminPendingApproval()
	{
               
		$musics = Music::where('approved', 0)->where('status', null)->get();
		return view('adminpendingapproval')->with('musics', $musics);
	}

	public function uploadMusic()
	{
		$musics = Music::all()->where('producer_id',  Auth::user()->id);
		return view('producerupload')->with('musics', $musics);
	}
	public function producerPaymentMethods()
	{
		$musics = Music::all()->where('producer_id',  Auth::user()->id);
		return view('producerpaymentmethods')->with('musics', $musics);
	}

	public function producerPayout()
	{
		return view('producerpayout');
	}
	public function adminPayout()
	{
		$data = DB::table('payouts')->where('ref', null)->get();
		return view('adminpayout')->with('paymentRequest', $data);
	}
	
	public function producerMessages()
	{
		return view('producermessage');
	}

	public function producerSold()
	{
                
                //print Auth::user()->id;
               $musics =  DB::table('musics')
                        ->join('orders', 'orders.customer_id', '=', 'musics.producer_id')
                        ->join('order_details', 'order_details.order_id', '=', 'orders.id')
                        ->join('order_details as od','od.music_id','=', 'musics.id')
                        ->select('musics.id', 'musics.title', 'orders.total','orders.created_at','musics.bpm')
                        ->where('musics.producer_id', Auth::user()->id)
                        ->groupby('musics.id')
                        ->get();
               
		return view('producersold')->with('musics', $musics);
	}
	public function adminSold()
	{
		$musics =  DB::table('musics')
            ->join('orders', 'orders.customer_id', '=', 'musics.producer_id')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('order_details as od','od.music_id','=', 'musics.id')
            ->select('musics.id', 'musics.title', 'orders.total','orders.created_at','musics.bpm')
            ->groupby('musics.id')
            ->get();
		return view('adminsold')->with('musics', $musics);
	}
	public function producerBanned()
	{
		$musics = Music::where('producer_id',  Auth::user()->id)->where('status', '=', 'delete')->get();
		return view('producerbanned')->with('musics', $musics);
	}
	public function adminBanned()
	{
		$musics = Music::all()->where('status', 'delete');
		
		return view('adminbanned')->with('musics', $musics);
	}

	public function userMylist()
	{
		$music_id = array();
		$musics = array();
		$musics = DB::table('orders')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('musics', 'order_details.music_id', '=', 'musics.id')
            ->where('orders.customer_id', Auth::user()->id)
            ->select('orders.*', 'order_details.*','musics.title','musics.bpm','musics.id')
            ->get();
		return view('usermylist')->with('musics', $musics);
	}
	public function userWishlist()
	{
		return view('userwishlist');
	}

	public function userPurchasedMusic()
	{
		$music_id = array();
		$musics = array();
		$musics = DB::table('orders')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('musics', 'order_details.music_id', '=', 'musics.id')
            ->where('orders.customer_id', Auth::user()->id)
            ->select('orders.*', 'order_details.*','musics.title','musics.bpm','musics.id')
            ->get();
		return view('userpurchasemusic')->with('musics', $musics);
	}

	public function userBalance()
	{
		return view('userbalance');
	}
	public function userPaymentMethods()
	{
		return view('userpaymentmethod');
	}
	public function userNotification()
	{
		return view('usernotification');
	}
	public function audio()
	{
      
		return view('audioupload');
	}
	public function producerCart()
	{
      
		return view('testcart');
	}
	public function homeAfterLogin(){
		$musics =array();
		$soldMusics = OrderDetails::select('music_id')->get();
		 $musics['musics'] =  DB::table('musics')
            ->join('users', 'users.id', '=', 'musics.producer_id')
            ->select('musics.*', 'users.*')
            ->where('musics.approved', 1)
            ->where('musics.status', null)
            ->whereNotIn('musics.id', $soldMusics)
            ->get();
            $musics['producer'] = User::where('user_type', 'producer')->get();


		return view('homeafterlogin')->with('musics', $musics);
	}

	public function producerList(){
		$producers = User::where('user_type', 'producer')->get();//User::all();/*
		return view('producerlist')->with('producers', $producers);
	}
	public function artistList(){
		$artists = User::where('user_type', 'customer')->get(); //User::all();/**/
		return view('artistlist')->with('artists', $artists);
	}
	public function faq(){
		return view('faq');
	}
	public function blog(){
		return view('blog');
	}
	public function contactUs(){
		return view('contactus');
	}

	public function exportProducer()
	{
	   $data = User::where('user_type', 'producer')->get()->toArray();
	   return Excel::create('ProducerList', function($excel) use ($data) {
		$excel->sheet('mySheet', function($sheet) use ($data)
	    {
			$sheet->fromArray($data);
	    });

	   })->download("xls");
	}

	public function exportArtist()
	{
	   $data = User::where('user_type', 'customer')->get()->toArray();
	   return Excel::create('ArtistList', function($excel) use ($data) {
		$excel->sheet('mySheet', function($sheet) use ($data)
	    {
			$sheet->fromArray($data);
	    });

	   })->download("xls");
	}

	public function exportProducerSales()
	{
           $producer_id = Session::get('producer_id'); //input::get('producer_id');
           
	   $history =  DB::table('musics')
            ->join('orders', 'orders.customer_id', '=', 'musics.producer_id')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('order_details as od','od.music_id','=', 'musics.id')
            ->select('musics.*', 'orders.*','order_details.*')
            ->where('musics.producer_id', $producer_id)
            ->groupby('musics.id')
            ->get();
          
          // $history = (array)$history;
           $history = json_decode(json_encode($history), true);
          // print_r($history);
          // exit();
	   return Excel::create('ProducerSalesHistory', function($excel) use ($history) {
		$excel->sheet('mySheet', function($sheet) use ($history)
	    {
			$sheet->fromArray($history);
	    });

	   })->download("xls");
	}

	public function notifications(){
		$data = DB::table('users')
            ->join('notifications', 'users.id', '=', 'notifications.receiver_id')
            ->where('notifications.read_status', 0)
            ->where('notifications.receiver_id', Auth::user()->id)
            ->get();
           return $data;
	}
	public function statusSeen(){
		$adminId = input::get('admin_id');
		$senderId = input::get('sender_id'); 
		$messageId = input::get('message_id'); 
		DB::table('notifications')->where('id', $messageId)->update(array('read_status'=>1));
	}

	public function featureProfile($id){
		$profile =  DB::table('users')
            ->join('musics as m','m.producer_id','=', 'users.id')
            ->select('m.*','users.*')
            ->where('m.producer_id', $id)
            ->groupby('m.id')
            ->get();
            $data = array();
            $data['producerInfo'] = User::where('id', $id)->get();
            $data['producerMusics'] = Music::where('producer_id', $id)->get();
         return view('featureprofile')->with('profiles', $data);
            
	}

	public function producerSongList($id){
		$profile =  DB::table('users')
            ->join('musics as m','m.producer_id','=', 'users.id')
            ->select('m.*','users.*')
            ->where('m.producer_id', $id)
            ->groupby('m.id')
            ->get();
            $data = array();
            $data['producerInfo'] = User::where('id', $id)->get();
            $data['producerMusics'] = Music::where('producer_id', $id)->get();
            $data['profile'] = $profile;
         return view('songlist')->with('profiles', $data);
            
	}
	public function bpmSearch(){
		$bpm = input::get('bpm');
		$exp = explode('-',$bpm);
		$musics =array();
		$soldMusics = OrderDetails::select('music_id')->get();
		 $musics =  DB::table('musics')
            ->join('users', 'users.id', '=', 'musics.producer_id')
            ->select('musics.*', 'users.*')
            ->where('musics.approved', 1)
            ->where('musics.status', null)
            ->whereNotIn('musics.id', $soldMusics)
            ->whereBetween('bpm', [$exp[0], $exp[1]])
            ->get();
		return $musics;
	}

	public function recuring(){
		$totalpayout = 0;
		$subscription_date  = '';
		$current_date = '';
		$producers = User::where('user_type', 'producer')->get();
		$date = array();
		foreach($producers as $producer){
			if($producer->balance >=30){
				$subs = DB::table('subscriptions')->where('producer_id', $producer->id)->get();
				if($subs){
					$date[] = date('Y-m', strtotime($subs[0]->created_at));
				}
				$current_date = date('Y-m');
				if (! in_array($current_date, $date)){
					$recuring_amount['amount'] = 30;
					$recuring_amount['producer_id'] = $producer->id;
					$subscriptions = DB::table('subscriptions')->insert($recuring_amount);
					$producernewbalance = $producer->balance - 30;
					User::where('id', $producer->id)->update(array('balance' => $producernewbalance));
				}

			}
		}
	}
	public function pageNotFound()
	{
		////App::abort(404);
		return view('errors.404');
	}
	
}
