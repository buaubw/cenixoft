<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Customer;
use DateTime;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $this->validate($request, [
             'firstname' => 'required|max:255',
             'lastname' => 'required',
             'companyname' => 'required',
             'password' => 'required'
         ]);
         if( $request->password!==$request->confirmpassword){
           return view('customer.create')->withInput();
         }
        $customer = new Customer;
        $now = new DateTime();
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->companyname = $request->companyname;
        $customer->username = $request->username;
        // $customer->address = $request->address;
        // $customer->tel = $request->tel;
        // $customer->fax = $request->fax;

        $customer->password = $request->password;
        // $customer->taxno = $request->taxno;
        $customer->date =$now;
        $customer->by ="by";

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
      $customer = App\Customer::find($id);
      $customer->firstname = $request->firstname;
      $customer->lastname = $request->lastname;
      $customer->companyname = $request->companyname;
      $customer->address = $request->address;
      $customer->tel = $request->tel;
      $customer->fax = $request->fax;
      $customer->email = $request->email;
      $customer->password = $request->password;
      $customer->taxno = $request->taxno;
      $customer->date = $request->date;
      $customer->save();
      return redirect()->route('customer.index');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $customer = Customer::find($id);
      $customer->delete();
      return redirect()->route('customer.index');
    }
}
