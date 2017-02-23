<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckAdmin;
use App;
use App\Education;
use DateTime;
use Auth;

class EducationController extends Controller
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
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
      $educations = Education::all();

      return view('education.education')->with('values', $educations);


    }
    public function educationlist(){
      $educations = Education::all();
      return view('customerapp.education.index')->with('educations',$educations);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createeducation()
    {
         return view('education.createeducation');

    }
    public function editeducation()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
         return view('education.editeducation');

    }
    public function vieweducation($id)
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
      $education = Education::find($id);

       // show the edit form and pass the nerd
       return view('education.vieweducation')
           ->with('value', $education);
        //  return view('education.vieweducation');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
      $education = new Education;
      $now = new DateTime();

      $education->url = $request->url;
      $education->type = $request->type;
      $education->date = $now;
      $education->description = $request->description;
      $education->by = Auth::user()->name;

      $education->save();
      return redirect()->route('education.index');
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
      $education = Education::find($id);

       // show the edit form and pass the nerd
       return view('education.edit')
           ->with('value', $education);
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
      $education = App\Education::find($id);
      $education->url = $request->url;
      $education->type = $request->type;
      $education->date = $request->date;
      $education->description = $request->description;
      $education->by = $request->by;
      $education->save();
      return redirect()->route('education.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $education = App\Education::find($id);

      $education->delete();

      return redirect()->route('education.index');

    }
}
