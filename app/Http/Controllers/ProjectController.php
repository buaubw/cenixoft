<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Project;
use App\Customer;
use DateTime;
use Auth;
use App\Http\Middleware\CheckAdmin;
class ProjectController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware(CheckAdmin::class);
  }
  public function index(){
    $projects = Project::all();
    $customers = Customer::all();
    //  $projects = Project::with('customer_id')->get();

     return view('project.index')->with('values', $projects)->with('customers',$customers);
    // return view('project.index');
  }
  public function create()
  {

        $customers = Customer::all();

        return view('project.create')->with('customers',$customers);
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
    $project = new Project;
    $project->name = $request->name;
    $project->customer_id = $request->customer_id;
    $project->date = $now;
    $project->by = Auth::user()->name;
    $project->type = $request->type;
    $project->save();
    return redirect()->route('project.index');
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
    $project = Project::find($id);
  $customers = Customer::all();
     // show the edit form and pass the nerd
     return view('project.edit')
         ->with('value', $project)->with('customers',$customers);

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
    $project = App\Project::find($id);
    $project->name = $request->name;
    $project->type = $request->type;
    $project->customer_id = $request->customer_id;
    $project->date = $request->date;
    $project->by = $request->by;
    $project->save();
    return redirect()->route('project.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $project = App\Project::find($id);

    $project->delete();

    return redirect()->route('project.index');
  }
}
