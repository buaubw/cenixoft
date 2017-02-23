<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Input;
use Hash;
use App\User;
use App;
use App\Http\Controllers\Controller;
use Validator;
use App\Http\Middleware\CheckAdmin;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
         $this->middleware(CheckAdmin::class);
     }
    public function index()
    {
      $customers = Customer::all();

      return view('account.customer')->with('values', $customers);
      //  return view('account.index');
    }
    public function customer()
    {
        return view('account.customer');
    }
    public function changepassword()
    {
        return view('changepassword')->with('errorx','');
    }

    public function admin()
    {
      $users = DB::table('users')->where('role', 'admin')->get();
      return view('account.admin')->with('values', $users);
      //  return view('account.admin');
    }
    public function createcustomer()
    {
        return view('account.createcustomer');
    }
    public function createadmin()
    {
        return view('account.createadmin');
    }
    public function viewadmin()
    {
        return view('account.viewadmin');
    }
    public function viewcustomer()
    {
        return view('account.viewcustomer');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
           'username' => 'required|max:255',
           'password' => 'required',
           'email' => 'required',
           'role' => 'required',
           'name' => 'required'
       ]);
      $user = new User;
      $user->username = $request->username;
      $user->password = bcrypt($request->password);
      $user->email = $request->email;
      $user->name = $request->name;
      $user->role =$request->role;
      $user->save();
      return redirect('account/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = Validator::make($request->all(), [
            'oldpassword' => 'required|min:6',
            'password' => 'required|min:6|confirmed',
            'username' => 'required',
            'email' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        if(!Hash::check($request->oldpassword, $user->password)){
        return redirect('/changepassword')
                   ->with('errorx','The specified password does not match the database password');
        }elseif($validator->fails()){
          return redirect('/changepassword')->withErrors($validator);
        }else{
          $user->username = $request->username;
          $user->email = $request->email;
          $user->password = bcrypt($request->password);
          $user->save();
        }
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = App\User::find($id);
      if(Auth::user()->id==$id){
        $user->delete();
        return redirect('/login');
      }
      $user->delete();
        return redirect('account/admin');
    }
}
