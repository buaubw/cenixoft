<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App;
use App\Customer;
use App\User;
use DateTime;
use Validator;
use Auth;
use App\Http\Middleware\CheckAdmin;
class CustomerController extends Controller
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
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
      $customers = Customer::all();

      return view('customer.index')->with('values', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
         return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        $this->validate($request, [
             'firstname' => 'required|max:255',
             'lastname' => 'required',
             'companyname' => 'required',
             'password' => 'required'
         ]);
         if( $request->password!==$request->confirmpassword){
           return view('customer.create')->withInput();
         }

         $user = new User;
         $user->username = $request->username;
         $user->password = bcrypt($request->password);
         $user->email = "-";
         $user->name = $request->firstname.' '.$request->lastname;
         $user->role =$request->role;
         $user->save();
        $customer = new Customer;
        $now = new DateTime();
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->companyname = $request->companyname;
        $customer->aboutwork = $request->aboutwork;
        $customer->user_id = $user->id;
        $customer->date =$now;
        $customer->by = Auth::user()->name;
        $customer->save();
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
      $customer = Customer::find($id);

       return view('customer.show')
           ->with('value', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
      $customer = Customer::find($id);

       return view('customer.edit')
           ->with('value', $customer);
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
      $now = new DateTime();
      $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|confirmed',
            'taxno' => 'required',
            'tel' => 'required'
        ]);

        if ($validator->fails()) {
                return redirect('/addmoreinfo')
                            ->withErrors($validator)
                            ->withInput();
            }

      $customer = App\Customer::find($id);
      $customer->firstname = $request->firstname;
      $customer->lastname = $request->lastname;
      $customer->companyname = $request->companyname;
      $customer->address = $request->address;
      $customer->tel = $request->tel;
      $customer->fax = $request->fax;

      $customer->taxno = $request->taxno;
      $customer->date = $now;
      $customer->save();

      $user = App\User::find($customer->user_id);
      $user->password = bcrypt($request->password);
      $user->save();
      return redirect('/');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
      $customer = Customer::find($id);
      $customer->delete();
      return redirect()->route('customer.index');
    }
}
