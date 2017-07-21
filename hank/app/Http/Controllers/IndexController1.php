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
                $results = DB::select( DB::raw("SELECT * FROM users WHERE id = 10") );
               // print_r($results);
               // print $results[0]->reset_code;
                //print "hello";
            
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
		$musics = Music::all()->where('producer_id',  Auth::user()->id);
		/*return view('producerupload')->with('musics', $musics);*/
		return view('producerhome')->with('musics', $musics);
	}

	public function adminhome()
	{
		$musics = Music::all()->where('producer_id',  Auth::user()->id);
		return view('adminhome')->with('musics', $musics);
	}
	public function producerSettings()
	{
		$userinfo = User::where('id',  Auth::user()->id)->first();
		return view('produceraccoutsettings')->with('userinfo', $userinfo);
	}

	public function producerPendingApproval()
	{
               
		$musics = Music::where('producer_id',  Auth::user()->id)->get();
               
		return view('producerpendingapproval')->with('musics', $musics);
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
	public function producerMessages()
	{
		return view('producermessage');
	}

	public function producerSold()
	{
		return view('producersold');
	}
	public function producerBanned()
	{
		return view('producerbanned');
	}

	public function userMylist()
	{
		return view('usermylist');
	}
	public function userWishlist()
	{
		return view('userwishlist');
	}

	public function userPurchasedMusic()
	{
		return view('userpurchasemusic');
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
	public function pageNotFound()
	{
		////App::abort(404);
		return view('errors.404');
	}
	
}
