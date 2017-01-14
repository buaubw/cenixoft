<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('document.index');
        //
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
    public function editrequirement()
    {
        return view('document.editrequirement');
        //
    }
    public function editcontact()
    {
        return view('document.editcontact');
        //
    }
    public function editinvoice()
    {
        return view('document.editinvoice');
        //
    }
    public function editquotation()
    {
        return view('document.editquotation');
        //
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
      $document = new document;

      $document->filename = $request->filename;
      $document->profile_id = $request->profile_id;
      $document->type = $request->type;
      $document->date= $request->date;
      $feedback->by = $request->by;
      

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
