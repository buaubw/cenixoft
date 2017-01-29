<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Document;
use App\Project;
use App\Customer;
use DateTime;
class DocumentController extends Controller
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

      $projects = Project::all();
      $customers = Customer::all();

       return view('document.index')->with('values', $projects)->with('customers',$customers);

    }
    public function requirement()
    {
        return view('document.requirement');
        //
    }
    public function contact()
    {
        return view('document.contact');
        //
    }
    public function invoice()
    {
        return view('document.invoice');
        //
    }
    public function quotation()
    {
        return view('document.quotation');
        //
    }
    public function createrequirement()
    {
        return view('document.createrequirement');
        //
    }
    public function createquotation()
    {
        return view('document.createquotation');
        //
    }
    public function createinvoice()
    {
        return view('document.createinvoice');
        //
    }
    public function createcontact()
    {
        return view('document.createcontact');
        //
    }
    public function viewcompany()
    {
        return view('document.viewcompany');
        //
    }
    public function inboxcontact()
    {
        return view('document.inboxcontact');
        //
    }
    public function project($id)
    {

        return view('document.project');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $document = new document;
      //
      // $document->filename = $request->filename;
      // $document->profile_id = $request->profile_id;
      // $document->type = $request->type;
      // $document->date= $request->date;
      // $feedback->by = $request->by;
      //
      //
      // $customer->save();
      return
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
