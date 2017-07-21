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
     
class PagesController extends Controller
{
	public function privacyPolicy()
	{
		return view('privacy_policy');
	}
	
	public function termsAndConditions()
	{
		return view('terms_conditions');
	}

	public function cookiePolicy()
	{
		return view('cookie_policy');
	}
}
