<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Validator;
use App;
use App\Invoice;
use App\project;
use DateTime;
use File;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $documents = Invoice::all();

        return view('invoice.index')->with('values', $documents);
     }

     public function listdata($id)
     {
         $project = Project::find($id);
       $documents = DB::table('invoices')
                      ->where('project_id', '=', $id)
                      ->get();

         if($documents->count()<0){
            return view('document.index');
         }

        //return view('invoice.list')->with('values', $documents)->with('project_id', $id);
          return  \View::make('invoice.list')->with('values', $documents)->with('project_id', $id)->with('project',$project);
     }


     public function create2($id)
     {
         $project_id=$id;
         return view('invoice.create')->with('value', $project_id);
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
               return redirect('invoice/create2/'.$request->project_id)
                           ->withErrors($validator)
                           ->withInput();
           }
       if ($request->hasFile('filename')) {
           $file = $request->filename;
           $destinationPath = 'documents/invoice';
           $extension = $file->getClientOriginalName();
           $upload_success = $file->move($destinationPath, $extension);

           $document = new Invoice;
           $document->title = $request->title;
           $document->filename = $extension;
           $document->project_id = $request->project_id;
           $document->date = $now;
           $document->by = "test";
           $document->save();
           return redirect()->action('InvoiceController@listdata', ['id' => $request->project_id]);
         // return redirect()->route('requirement.listdata', ['id' => 1]);
         }
         return redirect()->route('invoice.create');


     }
     public function show($id)
     {
       $document = Invoice::find($id);
         return view('invoice.show')->with('value', $document);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $document = Invoice::find($id);
       return view('invoice.edit')->with('value', $document);
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

       $document = App\Invoice::find($id);
       $upload_success=false;
       $extension="";
       $upload_success=false;
       if ($request->hasFile('filename')) {
         $file2 = base_path('/public/documents/invoice/'.$document->filename);
         $result2 = File::delete($file2);
       $file = $request->filename;
       $destinationPath = 'documents/invoice';
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

         return redirect()->action('InvoiceController@listdata', ['id' => $request->project_id]);
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $document = App\Invoice::find($id);
       $val = $document->project_id;
       $file = base_path('/public/documents/invoice/'.$document->filtename);
       $result = File::delete($file);
       $document->delete();

     return redirect()->action('InvoiceController@listdata', ['id' => $val]);
     }
}
