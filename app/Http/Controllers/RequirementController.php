<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Validator;
use App;
use App\Requirement;
use App\Project;
use DateTime;
use File;

class RequirementController extends Controller
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
      $documents = Requirement::all();

       return view('requirement.index')->with('values', $documents);
    }

    public function listdata($id)
    {
        $project = Project::find($id);
      $documents = DB::table('requirements')
                     ->where('project_id', '=', $id)
                     ->get();

        if($documents->count()<0){
           return view('document.index');
        }

      // return view('requirement.list')->with('values', $documents)->with('project_id', $id);
      return  \View::make('requirement.list')->with('values', $documents)->with('project_id', $id)->with('project',$project);
    }


    public function create2($id)
    {
        $project_id=$id;
        return view('requirement.create')->with('value', $project_id);
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
              return redirect('requirement/create2/'.$request->project_id)
                          ->withErrors($validator)
                          ->withInput();
          }
      if ($request->hasFile('filename')) {
          $file = $request->filename;
          $destinationPath = 'documents/requirement';
          $extension = $file->getClientOriginalName();
          $upload_success = $file->move($destinationPath, $extension);

          $document = new Requirement;
          $document->title = $request->title;
          $document->filename = $extension;
          $document->project_id = $request->project_id;
          $document->date = $now;
          $document->by = "test";
          $document->save();
          return redirect()->action('RequirementController@listdata', ['id' => $request->project_id]);
        // return redirect()->route('requirement.listdata', ['id' => 1]);
        }
        return redirect()->route('requirement.create');


    }
    public function show($id)
    {
      $document = Requirement::find($id);
        return view('requirement.show')->with('value', $document);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $document = Requirement::find($id);
      return view('requirement.edit')->with('value', $document);
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

      $document = App\Requirement::find($id);
      $upload_success=false;
      $extension="";
      $upload_success=false;
      if ($request->hasFile('filename')) {
        $file2 = base_path('/public/documents/requirement/'.$document->filename);
        $result2 = File::delete($file2);
      $file = $request->filename;
      $destinationPath = 'documents/requirement';
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

        return redirect()->action('RequirementController@listdata', ['id' => $request->project_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $document = App\Requirement::find($id);
      $val = $document->project_id;
      $file = base_path('/public/documents/requirement/'.$document->filtename);
      $result = File::delete($file);
      $document->delete();

    return redirect()->action('RequirementController@listdata', ['id' => $val]);
    }
}
