<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\User;
use App;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
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
    public function admin()
    {
      $users = User::all();
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
        //
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
      if(Auth::id()==$id){
        $user->delete();
        return redirect('/login');
      }
      $user->delete();
        return redirect('account/admin');
    }
}
