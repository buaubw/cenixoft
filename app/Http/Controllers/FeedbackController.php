<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App;
use App\Project;
use App\Customer;
use App\Feedback;
use DateTime;
use Auth;
class FeedbackController extends Controller
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
      $feedbacks = DB::table('feedbacks')
      ->join('projects', 'projects.id', '=', 'feedbacks.project_id')
      ->select('feedbacks.id as fid','projects.name as pname','feedbacks.created_at as create')->get();
      return view('feedback.index')->with('values',$feedbacks);
    }
    public function view($id)
    {
      $feedback = DB::table('feedbacks')
      ->where('feedbacks.id','=',$id)
      ->join('projects', 'projects.id', '=', 'feedbacks.project_id')->first();

      $project = DB::table('projects')
      ->where('projects.id',$feedback->project_id)
      ->join('customers', 'customers.id', '=', 'projects.customer_id')->first();

        return view('feedback.view')->with('value',$feedback)->with('project',$project);
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
      $feedback = new Feedback;
      $now = new DateTime();
      $feedback->date = $now;
      $feedback->project_id = $request->profile_id;
      $feedback->requirement = $request->requirement;
      $feedback->complacency = $request->complacency;
      $feedback->price = $request->price;
      $feedback->ontime = $request->ontime;
      $feedback->convinience = $request->convinience;
      $feedback->suggestion = $request->suggestion;
      $feedback->fullname = Auth::user()->firstname.Auth::user()->lastname;
      $feedback->save();
      return redirect('document/customerdocument/'.$request->profile_id);
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
