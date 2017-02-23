<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Middleware\CheckAdmin;
class ProfileController extends Controller
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
        return view('profile.index');
    }
    public function design()
    {
        return view('profile.design');
    }
    public function mobile()
    {
        return view('profile.mobile');
    }
    public function website()
    {
        return view('profile.website');
    }
    public function logo()
    {
        return view('profile.logo');
    }
    public function editlogo()
    {
        return view('profile.editlogo');
    }
    public function viewlogo()
    {
        return view('profile.viewlogo');
    }
    public function createlogo()
    {
        return view('profile.createlogo');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $profile = new profile;

      $profile->name = $request->name;
      $profile->customer_id = $request->customer_id;
      $profile->date = $request->date;
      $profile->by = Auth::user()->name;



      $customer->save();

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
        //
    }
}
