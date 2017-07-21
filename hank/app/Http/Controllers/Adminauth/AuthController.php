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
use ZipArchive;

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
	   $data['alert'] = 0;
        $rules = array(
            'email'    => 'required|email', 
            'password' => 'required|alphaNum|min:3' 
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

            //return redirect('/homeafterlogin');
            $data['alert'] = 0;
            $data['profileType'] = Auth::user()->user_type;
            $data['redirectURL'] = Auth::user()->user_type == 'moderator' ? url('/')."/moderatorhome" : url('/')."/homeafterlogin";
            return $data;
        } else {        

            //return redirect('/');
            \Session::flash('login_message','Username or password incorrect please try again .');
            $data['alert'] = 1;
            return $data;
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
                if($user->user_type == 'producer' || $user->user_type == 'customer'){
                    $adminUsers = User::select('id')->where('user_type', 'admin')->get();
                    $notify = array();
                    foreach($adminUsers as $adminUser){
                        $notify['sender_id'] = $user->id;
                        $notify['receiver_id'] = $adminUser->id;
                        $notify['message'] = 'New producer registred';
                        $notify['read_status'] = 0;
                        DB::table('notifications')->insert($notify);
                    }
                }
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
        $ip = $_SERVER['REMOTE_ADDR'];
        $data    = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        return $data;
    }

    public function countryName(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $countryname = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip='.$ip));
        return $countryname->geoplugin_countryName;
    }

    public function confirmEmail(){
        $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
        $verification_code = $segments[sizeof($segments)-1 ]; 
        $verified = User::where('verification_code', '=', $verification_code)->update(['email_verified'=>'1']);
        return redirect('/email-confirmed');
    }

    public function emailConfirmed()
    {
        $musics =array();
        $soldMusics = array();
        if(Session::get('hank_user_id')){
            return redirect('/homeafterlogin');
        }
        $soldMusics = OrderDetails::select('music_id')->get();
        $musics['musics'] =  DB::table('musics')
            ->join('users', 'users.id', '=', 'musics.producer_id')
            ->select('musics.*', 'users.*')
            ->where('musics.approved', 1)
            ->where('musics.status', null)
            ->whereNotIn('musics.id', $soldMusics)
            ->get();
        $musics['producer'] = User::where('user_type', 'producer')->get();
        
        return view('email_confirmed')->with('musics', $musics);
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
        // mp3
        $imageName = Input::file('image')->getClientOriginalName();
        $uploadPath = base_path() . '/resources/audio/';

        // cover image
        $image = Input::file('imagemusic')->getClientOriginalName();
        $destinationPath = base_path() . '/resources/audio/musiccover/';
        $ext = explode('.', $image);
        $image_type = array('jpeg', 'png', 'jpg');
        $fileName = rand(1111,9999). '.' . $ext[1];

        // zip file
        $zipFile = Input::file('zip_file')->getClientOriginalName();
        $zipFileDestinationPath = base_path() . '/resources/audio/zipfiles/';
        
        // save to database
        $music = new Music();
        $music->title = Input::get('title');
        $music->price = Input::get('price');
        $music->key = Input::get('key');
        $music->bpm = Input::get('bpm');
        $music->genre_tags = Input::get('genre');
        $music->tags = Input::get('tags');
        $music->description = Input::get('description');
        $music->file_path = $imageName;
        $music->cover_path = $fileName;
        $music->producer_id = Auth::user()->id;
        $music->approved = 0;
        $music->save();

        if($music->id > 0){

            //upload mp3 here
            Input::file('image')->move($uploadPath.$music->id, $imageName);

            //cover image
            Input::file('imagemusic')->move($destinationPath.$music->id, $fileName);

            //zip file
            Input::file('zip_file')->move($zipFileDestinationPath.$music->id, $zipFile);

            // notify admin
            $adminUsers = User::select('id')->where('user_type', 'admin')->get();
            $notify = array();
            foreach($adminUsers as $adminUser){
                $notify['sender_id'] = Auth::user()->id;
                $notify['receiver_id'] = $adminUser->id;
                $notify['message'] = 'New song Uploaded';
                $notify['read_status'] = 0;
                DB::table('notifications')->insert($notify);
            }
        }

        return redirect('/file-uploaded');
    }

    public function uploadFileSuccess()
    {
        return view('uploadfilesuccess');
    }

    public function uploadProfilePic(Request $request)
    {
        $image = Input::file('myfile')->getClientOriginalName();
         if($image){
            $ext = explode('.', $image);
            $image_type = array('jpeg', 'png', 'jpg');
            $fileName = Auth::user()->id . '.' . $ext[1];
            $destinationPath = dirname(base_path()).'/assets/profilepic/';
            $uploadComplete = Input::file('myfile')->move($destinationPath, $fileName);
        }
        if($uploadComplete){
            User::where('id', Auth::user()->id)->update(array('user_pics' => $fileName));
            $userPic = User::select('user_pics')->where('id', Auth::user()->id)->first();
            return redirect()->back()->with('flash_message', 'Profile image successfully updated!');
        }
        
        
    }

    public function producerAccountSettings(){
        $data = array();
        if(input::get('password') !=''){
            $data['password'] = bcrypt(input::get('password'));
        }

        $im = Input::file('image');
         if(!empty($im)){
            $image = $image->getClientOriginalName();
            $ext = explode('.', $image);
            $image_type = array('jpeg', 'png', 'jpg');
            $fileName = Auth::user()->id . '.' . $ext[1];
            //$destinationPath = $_SERVER['DOCUMENT_ROOT'].'/assets/profilepic/coverphoto/';
            $destinationPath = base_path() . '/resources/audio/coverphoto/';
            $uploadComplete = Input::file('image')->move($destinationPath, $fileName);
        }
        /*echo "<pre>";
        print_r(input::file('image'));
        exit();*/
        $data['first_name'] = input::get('first_name');
        $data['last_name'] = input::get('last_name');
        $data['user_name'] = input::get('user_name');
        $data['email'] = input::get('email');
        $data['phone'] = input::get('phone');
        $data['zip'] = input::get('zip');
        $data['address'] = input::get('address');
        $data['state'] = input::get('state');
        $data['country_id'] = input::get('country');
        $data['bio'] = input::get('bio');
        $data['covers'] = !empty($fileName) ? $fileName : "";
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


        $history =  DB::table('musics')
            ->join('orders', 'orders.customer_id', '=', 'musics.producer_id')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('order_details as od','od.music_id','=', 'musics.id')
            ->select('musics.*', 'orders.*','order_details.*')
            ->where('musics.producer_id', $producer_id)
            ->groupby('musics.id')
            ->get();
        $paymentHistory =  DB::table('payouts')->where('user_id', $producer_id)->get();
            

    
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
        $producerInfo['historydata'] = $history;
        $producerInfo['paymentHistory'] = $paymentHistory;
        $producerInfo['afterrecuringbalance'] = $userinfo->balance;
       // $producerInfo['producer_id'] = $producer_id;
        Session::put('producer_id', $producer_id);
       
        
        return $producerInfo;
        \Session::flash('flash_message','Approved successfully .');
    }

      public function artistInfo(Request $request)
    {
        $artist_id = input::get('artist_id');
        $artistInfo = array();
        $userinfo = User::where('id',  $artist_id)->first();
        $orders = array();
        $music = array();
        $orders = Order::all();
        $OrderDetails = OrderDetails::all();
        $musics = Music::where('producer_id', $artist_id)->get();
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


        $history =  DB::table('musics')
            ->join('orders', 'orders.customer_id', '=', 'musics.producer_id')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('order_details as od','od.music_id','=', 'musics.id')
            ->select('musics.*', 'orders.*','order_details.*')
            ->where('musics.producer_id', $artist_id)
            ->groupby('musics.id')
            ->get();
        $paymentHistory =  DB::table('payouts')->where('user_id', $artist_id)->get();
            

    
        $totalSold = count($totalSold1);
        $artistInfo['totalSold'] = $totalSold;
        $artistInfo['balance'] = $balance;
        $artistInfo['user_name'] = $userinfo->user_name;
        $artistInfo['email'] = $userinfo->email;
        $artistInfo['first_name'] = $userinfo->first_name;
        $artistInfo['last_name'] = $userinfo->last_name;
        $artistInfo['city'] = $userinfo->state;
        $artistInfo['state'] = $userinfo->state;
        $artistInfo['address'] = $userinfo->address;
        $artistInfo['phone'] = $userinfo->phone;
        $artistInfo['zip'] = $userinfo->zip;
        $artistInfo['country'] = $userinfo->country_id;
        $artistInfo['historydata'] = $history;
        $artistInfo['paymentHistory'] = $paymentHistory;
        return $artistInfo;
        \Session::flash('flash_message','Approved successfully .');
    }

    public function requestPayment(Request $request)
    {
        $paymentRequest = array();
        $producer_id = input::get('current_producer_id');
        $request_amount = input::get('payment_amount');
        $payment_ref = input::get('reference_no');
        $payment_remarks = input::get('remarks');
        $paymentRequest['user_id'] = $producer_id;
        $paymentRequest['amount'] = $request_amount;
        $paymentRequest['ref'] = $payment_ref;
        $paymentRequest['remarks'] = $payment_remarks;
        DB::table('payouts')->insert($paymentRequest);
        $previousbalance = User::select('balance')->where('id', $producer_id)->get();
        $current_balance = $previousbalance[0]->balance - $request_amount;
        User::where('id', $producer_id)->update(array('balance' => $current_balance));
        \Session::flash('flash_message','Payment successfully .');
        return redirect('/admin/producer');
    }

    public function requestAccept(Request $request)
    {
        $request_id = input::get('request_id');
        DB::table('payouts')->where('id', $request_id)->update(array('ref'=> 1));
        
        \Session::flash('flash_message','Approved successfully .');
    }


    public function musicUnpproved(Request $request)
    {
        $music_id = input::get('music_id');
        $music = Music::where('id', $music_id)->update(array('status'=> 'delete'));
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
        $file = base_path() . '/resources/audio/'.$music_id.'/'.$file_name->file_path;
        // zip files
        $zipFiles = base_path() . '/resources/audio/zipfiles/'.$music_id.'/';
        $sfiles = scandir($zipFiles);
        $zipFile = base_path() . '/resources/audio/zipfiles/'.$music_id.'/'.$sfiles[2];

        //$zip = new ZipArchive;
       // if ($zip->open($zipFile, ZipArchive::CREATE) === TRUE) {
        //    $zip->addFile($file);
        //    $zip->close();
        //}
        return Response::download($zipFile);
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


    public function sendEmail(){
        $rules = array(
            'name'    => 'required', 
            'subject'    => 'required', 
            'phone'    => 'required', 
            'email'    => 'required|email', 
            'message'    => 'required', 
            
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            \Session::flash('flash_message','Validation fails .');
            return redirect('/')
                ->withErrors($validator) 
                ->withInput(Input::except('password')); 
        } else {
            $name = Input::get('name');
            $subject = Input::get('subject');
            $phone = Input::get('phone');
            $email = Input::get('email');
            $userMessage = Input::get('message');
            $user = array();
            $user['name'] = Input::get('name');
            $user['subject'] = Input::get('subject');
            $user['phone'] = Input::get('phone');
            $user['email'] = Input::get('email');
            $user['message'] = Input::get('message');
                Mail::send('feedbackmail',['name' =>$name, 'phone' =>$phone, 'userMessage' =>$userMessage], function($message) use($user){
                    $message->to('aus234@yahoo.com', $user['name'])->from($user['email'])->subject($user['subject']);
                });
            }
            \Session::flash('flash_message','Thanks for your inquiry. We will get back to you within 24-48 hours');
            return redirect()->back();
    }

    public function existingEmailCheck(){
        $email_address = input::get("email_address");
        $sql = User::where("email", $email_address)->get();
        if(count($sql)>=1){
             $exist = 1;
        }
        else{
            $exist = 0;
        }
        return $exist;
    }
    
}