<?php namespace App\Http\Controllers\Adminauth;

use App\User;
use App\Payment;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Input;
use DB;
use Redirect;
use Illuminate\Support\Facades\URL as url;
use Illuminate\Support\Facades\Mail;
use Request;
use App\Music;
use App\TempOrder;
use Session;
use Response;
use App\Temp;
use App\Order;
use App\OrderDetails;
class AuthController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/dashboard';
    protected $guard = 'admin';

    public function showHomePage(){
        if(Auth::guard('admin')->check())
        {
            return redirect('/dashboard');
        }
        return view('home');
    }
    public function showLoginForm(){
        if(Auth::guard('admin')->check())
        {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function login(){
	   
        $rules = array(
            'email'    => 'required|email', 
            'password' => 'required|min:3' //alphaNum|
        );
        $validator = Validator::make(Input::all(), $rules);
        $email = Input::get('email');
        $password = Input::get('password');
        
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator) 
                ->withInput(Input::except('password')); 
        } else {
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password'),
                'email_verified' => '1'
            );
         
		   
		   
        if (Auth::attempt($userdata)) {
		    
            \Session::flash('flash_message','Login successfully .');
            Session::set('hank_user_id', Auth::user()->id);
            return redirect('/homeafterlogin');
            /*if(Auth::user()->user_type == 'customer'){
                return redirect('/useraccount');
            }
            if(Auth::user()->user_type == 'producer'){
                return redirect('/producerhome');
            }
            if(Auth::user()->user_type == 'admin'){
                return redirect('/adminhome');
            }
            if(Auth::user()->user_type == 'moderator'){
                return redirect('/moderatorhome');
            }*/

        } else {        

            return redirect('/');
        }
    }
}

public function showRegisterForm(){
        if(Auth::guard('admin')->check())
        {
            return redirect('/dashboard');
        }
        return view('register');
    }

	
	public function register(){
	  $image = input::file('user_pics');
        if($image){
        $ext = $image->getClientOriginalExtension();
        $image_type = array('jpeg', 'png', 'jpg');
        $fileName = rand() . '.' . $ext;
        $destinationPath = 'assets/profilepic';
        $complete = $image->move($destinationPath, $fileName);
    }
        $rules = array(
            'first_name'    => 'required', 
            /*'user_name'    => 'required', */
            'user_type'    => 'required', 
            'email'    => 'required|email', 
            'password' => 'required|alphaNum|min:3' 
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            \Session::flash('flash_message','Validation fails .');
            return redirect('/')
                ->withErrors($validator) 
                ->withInput(Input::except('password')); 
        } else {
            $geoinfo = $this->getgeoinfo();
            $userdata = array(
                'first_name' => Input::get('first_name'),
                /*'last_name' => Input::get('last_name'),*/
                /*'user_name' => Input::get('user_name'),*/
                'user_type' => Input::get('user_type'),
                'email'     => Input::get('email'),
                'password'  => bcrypt(Input::get('password')),
                'deleted_at' =>date('Y:m:d'),
                'country_id' => $geoinfo->country,
                'state' => $geoinfo->region,
                'address' => $geoinfo->city.','.$geoinfo->region.','.$this->countryName(),
                'bio' => 'bio',//Input::get('bio'),
                'web' => 'web',//Input::get('web'),
                'phone' => Input::get('phone'),
                'company_name' => 'hank music',//Input::get('company_name'),
                'balance' => 00,//Input::get('balance'),
                'subscription_type' => 'free',
                /*'user_pics' => $fileName,*/
                'covers' => 'covers',//Input::get('covers'),
                'verification_code' => rand(1000 , 9999),
            );
            $user = User::create($userdata);
            if($user){
                $userId = $user->id;
                $paymentInfo = array();
                $paymentInfo['user_id'] = $userId;
                $paymentInfo['cc_full_name'] = '';//$user->first_name;
                $paymentInfo['paypal'] = ' ';
                $paymentInfo['cc_number'] = ' ';
                $paymentInfo['cc_exp_month'] = ' ';
                $paymentInfo['cc_exp_year'] = ' ';
                $paymentInfo['cc_code'] = ' ';
                $addPayment = Payment::create($paymentInfo);
                $email = $user->email;
                $name = $user->first_name;
                $verifyed_code = $user->verification_code;
                $link = url()->previous().'/confirm-email/' . $verifyed_code;
                Mail::send('mail',['verifyed_code'=> $verifyed_code, 'link'=> $link, 'name' =>$name], function($message) use($user){
                    $message->to($user->email, $user->first_name)->from('shafiqul.cmt@gmail.com')->subject('Hank Music New Signup');
                });
            }
            \Session::flash('flash_message',' Successfully registred.');
            return redirect('/');
	  }
	}
    public function register1(){
        $image = input::file('user_pics');
        if($image){
        $ext = $image->getClientOriginalExtension();
        $image_type = array('jpeg', 'png', 'jpg');
        $fileName = rand() . '.' . $ext;
        $destinationPath = 'assets/profilepic';
        $complete = $image->move($destinationPath, $fileName);
    }
        $rules = array(
            'first_name'    => 'required', 
            /*'user_name'    => 'required', */
            /*'user_type'    => 'required', */
            'email'    => 'required|email', 
            'password' => 'required|alphaNum|min:3' 
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator) 
                ->withInput(Input::except('password')); 
        } else {
            $geoinfo = $this->getgeoinfo();
            $userdata = array(
                'first_name' => Input::get('first_name'),
                /*'last_name' => Input::get('last_name'),*/
                /*'user_name' => Input::get('user_name'),*/
                'user_type' => 'admin',//Input::get('user_type'),
                'email'     => Input::get('email'),
                'password'  => bcrypt(Input::get('password')),
                'deleted_at' =>date('Y:m:d'),
                'country_id' => $geoinfo->country,
                'state' => $geoinfo->region,
                'address' => $geoinfo->city.','.$geoinfo->region.','.$this->countryName(),
                'bio' => 'bio',//Input::get('bio'),
                'web' => 'web',//Input::get('web'),
                'phone' => Input::get('phone'),
                'company_name' => 'hank music',//Input::get('company_name'),
                'balance' => 00,//Input::get('balance'),
                'subscription_type' => 'free',
                /*'user_pics' => $fileName,*/
                'covers' => 'covers',//Input::get('covers'),
            );
            User::create($userdata);
            return redirect('/');
        }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        \Session::flash('flash_message','Logout successfully .');
        return redirect('/');
    }

    public function getgeoinfo(){
        $ip = '157.119.51.50';//$_SERVER['REMOTE_ADDR'];
        $data    = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        return $data;
    }

    public function countryName(){
        $ip = '157.119.51.50';//$_SERVER['REMOTE_ADDR'];
        $countryname = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip='.$ip));
        return $countryname->geoplugin_countryName;
    }

    public function confirmEmail(){
        $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
        $verification_code = $segments[sizeof($segments)-1 ]; 
        $verified = User::where('verification_code', '=', $verification_code)->update(['email_verified'=>'1']);
        return redirect('/');
    }

    public function userUpdate(){
        $rules = array(
            'first_name'    => 'required', 
            'company_name'    => 'required', 
            'email'    => 'required', 
            'user_name'    => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            \Session::flash('flash_message','Validation fails .');
            return redirect('/useraccount')
                ->withErrors($validator) 
                ->withInput(Input::except('password')); 
        } else {
            $info = array();
            $userId = Auth::user()->id;
            if(Input::get('password')!=''){
               $info['password'] = bcrypt(Input::get('password')); 
            }
            $info['first_name'] = Input::get('first_name');
            $info['email'] = Input::get('email');
            $info['user_name'] = Input::get('user_name');
            $updateuser = User::where('id', $userId)->update($info);
            if($updateuser){
                \Session::flash('flash_message','Update successfully .');
                return redirect('/useraccount');
            }
        }
    }

     public function paymentUpdate(){
        if(isset($_POST['userPaymentType'])){
            $userId = Auth::user()->id;
            $paymentInfo['paypal'] = Input::get('paymentType');
            $updatePayment = Payment::where('user_id', $userId)->update($paymentInfo);
            $msg = 'Update payment type successfully';
            $paymentInfoData = Payment::where('user_id', $userId)->first();
            \Session::flash('flash_message',$msg);
            return redirect('/userpayment')->with('paymentInfo', $paymentInfoData);
        }else{

        $rules = array(
            'cc_full_name'    => 'required', 
            'cc_number'    => 'required', 
            'cc_exp_month'    => 'required', 
            'cc_exp_year'    => 'required', 
            'cc_code'    => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            \Session::flash('flash_message','Validation fails .');
            return redirect('/')
                ->withErrors($validator) 
                ->withInput(Input::except('password')); 
        } else {
            $userId = Auth::user()->id;
            $paymentInfo = array();
            $userExist = Payment::where('user_id', $userId)->first();
			$paymentInfo['user_id'] = $userId;
            $paymentInfo['cc_full_name'] = Input::get('cc_full_name');
            $paymentInfo['cc_number'] = $this->creditCardMasking(Input::get('cc_number'));
            $paymentInfo['cc_exp_month'] = Input::get('cc_exp_month');
            $paymentInfo['cc_exp_year'] = Input::get('cc_exp_year');
            $paymentInfo['cc_code'] = Input::get('cc_code');
            if(count($userExist)>0){
                $updatePayment = Payment::where('user_id', $userId)->update($paymentInfo);
                $msg = 'Update payment information successfully';
            }else{
			   // print_r($paymentInfo);
                $addPayment = Payment::create($paymentInfo);
                $msg = 'Add payment information successfully';
            }
            
            $paymentInfoData = Payment::where('user_id', $userId)->first();
            \Session::flash('flash_message',$msg);
            return redirect('/userpayment')->with('paymentInfo', $paymentInfoData);
            //return view('a')->with('data', $paymentInfoData);
        }
    }
    }

    public function creditCardMasking($number){
        return str_repeat('*', 12).substr($number, -4);
    }

    public function forgotPassword(){
        $user = array();
        $user['email'] = Input::get('email');
        $email = Input::get('email');
        $reset_code = rand(1000, 9999);
        $link = url()->previous().'reset-password';
        $send = Mail::send('forgotpassword',['link'=> $link, 'reset_code'=>$reset_code], function($message) use($user){
            $message->to($user['email'])->from('shafiqul.cmt@gmail.com')->subject('Password reset link');
        });
        if($send){
            User::where('email', $email)->update(array('reset_code'=>$reset_code));
        }
        return redirect('/');
    }

    public function resetPassword(){
	
	     
        return view('passwordreset');
    }

    public function postResetPassword(){
        $email = Input::get('email');
        $newpass = bcrypt(Input::get('newpass'));
        $reset_code = Input::get('reset_code');
        User::where('email', $email)->where('reset_code', $reset_code)->update(array('password'=> $newpass));
        return redirect('/');
    }

    public function uploadFile(Request $request)
    {
        $imageName = Input::file('image')->getClientOriginalName();
        $uploadPath = base_path() . '/resources/audio/';
        $uploadComplete = Input::file('image')->move($uploadPath, $imageName);
        if($uploadComplete){
            $upload['title'] = Input::get('title');
            $upload['price'] = Input::get('price');
            $upload['key'] = Input::get('key');
            $upload['bpm'] = Input::get('bpm');
            $upload['genre_tags'] = Input::get('genre');
            $upload['description'] = Input::get('description');
            $upload['file_path'] =  $imageName;
            $upload['producer_id'] = Auth::user()->id;
            $upload['approved'] = 0;
            Music::create($upload);
        }
        $music = Music::all()->where('producer_id', Auth::user()->id);

        return redirect('/producerhome')->with('musics', $music);
    }

    public function producerAccountSettings(){
        $data = array();
        if(input::get('password') !=''){
            $data['password'] = bcrypt(input::get('password'));
        }
        $data['first_name'] = input::get('first_name');
        $data['last_name'] = input::get('last_name');
        $data['user_name'] = input::get('user_name');
        $data['email'] = input::get('email');
        $data['phone'] = input::get('phone');
        $data['zip'] = input::get('zip');
        $data['address'] = input::get('address');
        $data['state'] = input::get('state');
        $data['country_id'] = input::get('country');
        User::where('id', Auth::user()->id)->update($data);
        $msg = "Update successfully";
        \Session::flash('flash_message',$msg);
        return redirect()->back();
    }

    public function musicApproved(Request $request)
    {
        $music_id = input::get('music_id');
        $music = Music::where('id', $music_id)->update(array('approved'=>1));
        \Session::flash('flash_message','Approved successfully .');
    }

    public function producerInfo(Request $request)
    {
        $producer_id = input::get('producer_id');
        $producerInfo = array();
        $userinfo = User::where('id',  $producer_id)->first();
        $orders = array();
        $music = array();
        $orders = Order::all();
        $OrderDetails = OrderDetails::all();
        $musics = Music::where('producer_id', $producer_id)->get();
        $balance = 0;
        $totalSold1 = array();
        foreach($OrderDetails as $OrderDetail){

            foreach($musics as $music){
                if($music->id == $OrderDetail->music_id){
                    $balance = $balance + $OrderDetail->price;
                    $totalSold1[] = $OrderDetail->music_id;
                }
            }
        }
    
        $totalSold = count($totalSold1);
        $producerInfo['totalSold'] = $totalSold;
        $producerInfo['balance'] = $balance;
        $producerInfo['user_name'] = $userinfo->user_name;
        $producerInfo['email'] = $userinfo->email;
        $producerInfo['first_name'] = $userinfo->first_name;
        $producerInfo['last_name'] = $userinfo->last_name;
        $producerInfo['city'] = $userinfo->state;
        $producerInfo['state'] = $userinfo->state;
        $producerInfo['address'] = $userinfo->address;
        $producerInfo['phone'] = $userinfo->phone;
        $producerInfo['zip'] = $userinfo->zip;
        $producerInfo['country'] = $userinfo->country_id;
        return $producerInfo;
        \Session::flash('flash_message','Approved successfully .');
    }

    public function musicUnpproved(Request $request)
    {
        $music_id = input::get('music_id');
        $music = Music::where('id', $music_id)->update(array('approved'=>0));
        $producer_id = Music::select('producer_id','title')->where('id', $music_id)->first();
        $email = User::select('email', 'first_name')->where('id',$producer_id->producer_id)->first();
         Mail::send('bannedmail',['name' =>$email->first_name, 'title'=> $producer_id->title], function($message) use($email){
                $message->to($email->email, $email->first_name)->from('shafiqul.cmt@gmail.com')->subject('Hank Music Banned Notice');
            });
        \Session::flash('flash_message','Unapproved successfully .');
    }
    public function musicDelete(Request $request)
    {
        $music_id = input::get('music_id');
        $music = Music::where('id', $music_id)->update(array('status'=> 'delete'));
        \Session::flash('flash_message','Remove successfully .');
    }

    public function tempAdd(Request $request){
        $orders = array();
        $data['music_id'] = input::get('music_id');
        $data['user_id'] = input::get('user_id');
        $data['music_title'] = input::get('title');
        $data['music_price'] = input::get('price');
        $data['music_brand'] = 'my brand';
        $music = TempOrder::create($data);
        \Session::flash('flash_message','Update cart successfully .');
        $orders = TempOrder::where('user_id', $data['user_id'])->get();
        return $orders;

    }
    public function updateCart(){
        $data = array();
        $user_id = input::get('user_id');
        $data = TempOrder::where('user_id', $user_id)->get();
        return $data;
    }
     public function orderDelete(Request $request)
    {
        $data = array();
        $music_id = input::get('music_id');
        $music = TempOrder::where('id', $music_id)->delete();
        $data['music_id'] = $music_id;
        $data['user_id'] = Auth::user()->id;
        \Session::flash('flash_message','Remove successfully .');
        return $data;
    }
    public function getDownload(){
        $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
        $music_id = $segments[sizeof($segments)-1];
        $file_name = Music::select('file_path')->where('id', $music_id)->first();
        $file = base_path() . '/resources/audio/'.$file_name->file_path;
        return Response::download($file);
    }

  public function userLogout(){
        $musics = array();
        $music_id = Session::get('hank_user_id');
        $musics = TempOrder::where('user_id', Auth::user()->id)->delete();
        Auth::logout();
        \Session::flash('flash_message','Logout successfully .');
        Session::set('hank_user_id', '');
        return redirect('/');
    }
    
}