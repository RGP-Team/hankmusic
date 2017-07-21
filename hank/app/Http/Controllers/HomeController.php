<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use DB;
use Session;
use App\OrderDetails;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $musics =array();
        $soldMusics = array();
        if(Session::get('hank_user_id')){
            return redirect('/homeafterlogin');
        }
        $soldMusics = OrderDetails::select('music_id')->get();
        $musics['musics'] =  DB::table('musics')
            ->join('users', 'users.id', '=', 'musics.producer_id')
            ->select('musics.*', 'users.first_name',
            'users.last_name',
            'users.email',
            'users.phone',
            'users.zip',
            'users.state',
            'users.address',
            'users.country_id',
            'users.web',
            'users.user_type',
            'users.created_at',
            'users.user_name',
            'users.company_name',
            'users.bio',
            'users.covers')
            ->where('musics.approved', 1)
            ->where('musics.status', null)
            ->whereNotIn('musics.id', $soldMusics)
            ->get();
        $musics['producer'] = User::where('user_type', 'producer')->get();
        return view('home')->with('musics', $musics);
    }

    public function searchResults(Request $request)
    {
        $musics =array();
        $soldMusics = array();
        if(Session::get('hank_user_id')){
            //return redirect('/homeafterlogin');
        }
        

            $soldMusics = OrderDetails::select('music_id')->get();
            $musics['musics'] =  DB::table('musics')
                ->join('users', 'users.id', '=', 'musics.producer_id')
                ->select('musics.*',
                 'users.first_name',
            'users.last_name',
            'users.email',
            'users.phone',
            'users.zip',
            'users.state',
            'users.address',
            'users.country_id',
            'users.web',
            'users.user_type',
            'users.created_at',
            'users.user_name',
            'users.company_name',
            'users.bio',
            'users.covers')
                ->where('musics.approved', 1)
                ->where('musics.status', null)
                ->where('musics.title',$request->keyword)
                ->whereNotIn('musics.id', $soldMusics)
                ->get();
            $musics['producer'] = User::where('user_type', 'producer')->get();

            if(count($musics['musics'])>0){
                return view('home')->with('musics', $musics);
            }else{
                return view('home')->with('err', 'No record/s found!')->with('musics', $musics);
            }
        
    }
}
