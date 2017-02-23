<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Validator;
use App;
use App\Contact;
use App\project;
use DateTime;
use File;
use Response;
use Auth;
use App\Http\Middleware\CheckAdmin;
class ContactController extends Controller
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
       $documents = Contact::all();

        return view('contact.index')->with('values', $documents);
     }

     public function listdata($id)
     {
         $project = Project::find($id);
         $documents = DB::table('contacts')
                      ->where('project_id', '=', $id)
                      ->get();

        $documentscustomer = DB::table('customercontacts')
                                   ->where('project_id', '=', $id)
                                   ->get();

         if($documents->count()<0){
            return view('document.index');
         }

       return view('contact.list')->with('values', $documents)->with('valuescustomer', $documentscustomer)->with('project', $project);


     }


     public function create2($id)
     {
         $project_id=$id;
         return view('contact.create')->with('value', $project_id);
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
               return redirect('contact/create2/'.$request->project_id)
                           ->withErrors($validator)
                           ->withInput();
           }
       if ($request->hasFile('filename')) {
           $file = $request->filename;
           $destinationPath = 'documents/contact';
           $extension = $file->getClientOriginalName();
           $upload_success = $file->move($destinationPath, $extension);

           $document = new contact;
           $document->title = $request->title;
           $document->filename = $extension;
           $document->project_id = $request->project_id;
           $document->date = $now;
           $document->by = Auth::user()->name;
           $document->save();
           return redirect()->action('ContactController@listdata', ['id' => $request->project_id]);
         // return redirect()->route('requirement.listdata', ['id' => 1]);
         }
         return redirect()->route('contact.create');


     }
     public function show($id)
     {
       $document = Contact::find($id);
      //  $file= public_path(). "/documents/contact/".$document->filename;
      //  $headers = array(
      //         'Content-Type: application/pdf',
      //       );
      //    return Response::download($file, $document->filename, $headers);
        return view('contact.show')->with('value', $document);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $document = Contact::find($id);
       return view('contact.edit')->with('value', $document);
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

       $document = App\Contact::find($id);
       $upload_success=false;
       $extension="";
       $upload_success=false;
       if ($request->hasFile('filename')) {
         $file2 = base_path('documents/contact/'.$document->filename);
         $result2 = File::delete($file2);
       $file = $request->filename;
       $destinationPath = 'documents/contact';
       $extension = $file->getClientOriginalName();
       $upload_success = $file->move($destinationPath, $extension);
       }

       if($upload_success){
        $document->filename =$extension;
      }else{
        $document->filename = $document->filename;
      }

      $document->title = $request->title;
      $document->filename = $extension;
      $document->project_id = $request->project_id;
       $document->date = $request->date;
       $document->by = $request->by;
       $document->save();

         return redirect()->action('Contact@listdata', ['id' => $request->project_id]);
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $document = App\Contact::find($id);
       $val = $document->project_id;
       $file = base_path('documents/contact/'.$document->filtename);
       $result = File::delete($file);
       $document->delete();

     return redirect()->action('ContactController@listdata', ['id' => $val]);
     }
}
