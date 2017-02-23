<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Validator;
use App;
use App\Quatation;
use App\project;
use DateTime;
use File;
use Auth;
use App\Http\Middleware\CheckAdmin;
class QuatationController extends Controller
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
       $documents = Quatation::all();

        return view('quatation.index')->with('values', $documents);
     }

     public function listdata($id)
     {
         $project = Project::find($id);
       $documents = DB::table('quatations')
                      ->where('project_id', '=', $id)
                      ->get();

         if($documents->count()<0){
            return view('document.index');
         }

        //return view('quatation.list')->with('values', $documents)->with('project_id', $id);
          return  \View::make('quatation.list')->with('values', $documents)->with('project_id', $id)->with('project',$project);
     }


     public function create2($id)
     {
         $project_id=$id;
         return view('quatation.create')->with('value', $project_id);
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
               return redirect('quatation/create2/'.$request->project_id)
                           ->withErrors($validator)
                           ->withInput();
           }
       if ($request->hasFile('filename')) {
           $file = $request->filename;
           $destinationPath = 'documents/quatation';
           $extension = $file->getClientOriginalName();
           $upload_success = $file->move($destinationPath, $extension);

           $document = new Quatation;
           $document->title = $request->title;
           $document->filename = $extension;
           $document->project_id = $request->project_id;
           $document->date = $now;
           $document->by = Auth::user()->name;
           $document->save();
           return redirect()->action('QuatationController@listdata', ['id' => $request->project_id]);
         // return redirect()->route('requirement.listdata', ['id' => 1]);
         }
         return redirect()->route('quatation.create');


     }
     public function show($id)
     {
       $document = Quatation::find($id);
         return view('quatation.show')->with('value', $document);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $document = Quatation::find($id);
       return view('quatation.edit')->with('value', $document);
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

       $document = App\Quatation::find($id);
       $upload_success=false;
       $extension="";
       $upload_success=false;
       if ($request->hasFile('filename')) {
         $file2 = base_path('documents/quatation/'.$document->filename);
         $result2 = File::delete($file2);
       $file = $request->filename;
       $destinationPath = 'documents/quatation';
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

         return redirect()->action('QuatationController@listdata', ['id' => $request->project_id]);
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $document = App\Quatation::find($id);
       $val = $document->project_id;
       $file = base_path('documents/quatation/'.$document->filtename);
       $result = File::delete($file);
       $document->delete();

     return redirect()->action('QuatationController@listdata', ['id' => $val]);
     }
}
