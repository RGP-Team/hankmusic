<?php
namespace App\Helpers;
require_once base_path('vendor/authorizenet/autoload.php');

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

date_default_timezone_set('America/Los_Angeles');

class AuthorizeNet {
	
	public function __construct()
	{
		;
	}
	
	public static function createSubscription($data) 
	{
		$intervalLength = 1;
		$intervalUnit = 'months';
		$subscriptionName = 'S-CG '.ucwords($data['plan_title']).' Membership Subscription';
		$startDate = new \DateTime();		
		$totalOccurrences = 9999;
		$amount = $data['amount'];
		$cardNumber = $data['card_number'];
		$cardExpirationDate = $data['card_expiration_date'];		
		$firstName = $data['first_name'];
		$lastName = $data['last_name'];
		$merchant_login_id = $data['merchant_login_id'];
		$merchant_trans_key = $data['merchant_trans_key'];
		$refId = $data['plan_title'] . '-' . $data['plan_id'] . '-' . time();

	
		// Common Set Up for API Credentials
		$merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
		$merchantAuthentication->setName($merchant_login_id);
		$merchantAuthentication->setTransactionKey($merchant_trans_key);

		// Subscription Type Info
		$subscription = new AnetAPI\ARBSubscriptionType();
		$subscription->setName($subscriptionName);

		$interval = new AnetAPI\PaymentScheduleType\IntervalAType();
		$interval->setLength($intervalLength);
		$interval->setUnit($intervalUnit);

		$paymentSchedule = new AnetAPI\PaymentScheduleType();
		$paymentSchedule->setInterval($interval);
		$paymentSchedule->setStartDate($startDate);
		$paymentSchedule->setTotalOccurrences($totalOccurrences);

		$subscription->setPaymentSchedule($paymentSchedule);
		$subscription->setAmount($amount);
		
		$creditCard = new AnetAPI\CreditCardType();
		$creditCard->setCardNumber($cardNumber);
		$creditCard->setExpirationDate($cardExpirationDate);

		$payment = new AnetAPI\PaymentType();
		$payment->setCreditCard($creditCard);

		$subscription->setPayment($payment);

		$billTo = new AnetAPI\NameAndAddressType();
		$billTo->setFirstName($firstName);
		$billTo->setLastName($lastName);

		$subscription->setBillTo($billTo);

		$request = new AnetAPI\ARBCreateSubscriptionRequest();
		$request->setmerchantAuthentication($merchantAuthentication);
		$request->setRefId($refId);
		$request->setSubscription($subscription);
		$controller = new AnetController\ARBCreateSubscriptionController($request);

		$response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
		return $response;
	}
  
	public static function cancelSubscription($data) 
	{
		$subscriptionId = $data['subscription_id'];
		$merchant_login_id = $data['merchant_login_id'];
		$merchant_trans_key = $data['merchant_trans_key'];
	
		// Common Set Up for API Credentials
		$merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
		$merchantAuthentication->setName($merchant_login_id);
		$merchantAuthentication->setTransactionKey($merchant_trans_key);

		$request = new AnetAPI\ARBCancelSubscriptionRequest();
		$request->setMerchantAuthentication($merchantAuthentication);
		$request->setSubscriptionId($subscriptionId);

		$controller = new AnetController\ARBCancelSubscriptionController($request);

		$response = $controller->executeWithApiResponse( \net\authorize\api\constants\ANetEnvironment::SANDBOX);
		return $response;

	}
  
}