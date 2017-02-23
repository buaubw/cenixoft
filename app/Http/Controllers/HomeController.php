<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App;
use App\website;
use App\Customer;
use App\Logo;
use App\Mobile;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::user()->role=="admin")
      {
        return view('home');
      }else{
        $customer = DB::table('customers')->where('user_id','=',Auth::user()->id)->first();
        if($customer->address!='' || $customer->address!=null){
          $websites = Website::all();
          $mobiles = Mobile::all();
          $logos = Logo::all();
         return view('customerapp.welcome')->with('logos', $logos)->with('websites', $websites)->with('mobiles', $mobiles);
        }else{

          return redirect('/addmoreinfo');
        }
      }

    }
    public function customerindex()
    {
        $websites = Website::all();
        $mobiles = Mobile::all();
        $logos = Logo::all();
       return view('customerapp.welcome')->with('logos', $logos)->with('websites', $websites)->with('mobiles', $mobiles);
    }

    public function website($id)
    {
        $websites = Website::find($id);
       return view('customerapp.website')->with('website', $websites);
    }
    public function mobile($id)
    {
        $mobile = Mobile::find($id);
       return view('customerapp.mobile')->with('mobile', $mobile);
    }
    public function logo($id)
    {
        $logos = Logo::find($id);
       return view('customerapp.logo')->with('logo', $logos);
    }
    public function addmoreinfo()
    {
      $customer = DB::table('customers')->where('user_id','=',Auth::user()->id)->first();
        return view('customerapp.addmoreinfo')->with('customer',$customer);
    }
    public function addinfo()
    {
      $customer = DB::table('customers')->where('user_id','=',Auth::user()->id)->first();
      return view('customerapp.addmoreinfo')->with('customer',$customer);
    }
    public function logout() {

    Auth::logout();
    return Redirect::route('/home');


  }
}
