<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Validator;
use App;
use App\Contact;
use App\CustomerContact;
use App\project;
use DateTime;
use File;
use Response;
use Auth;
use App\Http\Middleware\CheckAdmin;
class CustomercontactController extends Controller
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
        //
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
      $now = new DateTime();

      $validator = Validator::make($request->all(), [
      'filename' => 'required|max:204800',
      'title' =>'required'
      ]);

      if ($validator->fails()) {
              return redirect('document/uploadDoc/'.$request->project_id)
                          ->withErrors($validator)
                          ->withInput();
          }
      if ($request->hasFile('filename')) {
          $file = $request->filename;
          $destinationPath = 'documents/customercontact';
          $extension = $file->getClientOriginalName();
          $upload_success = $file->move($destinationPath, $extension);

          $document = new CustomerContact;
          $document->title = $request->title;
          $document->filename = $extension;
          $document->project_id = $request->project_id;
          $document->date = $now;
          $document->by = Auth::user()->name;
          $document->save();
          return redirect()->action('DocumentController@customerdocument', ['id' => $request->project_id]);
        // return redirect()->route('requirement.listdata', ['id' => 1]);
        }
        return redirect()->route('document/uploadDoc');

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
