<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('education.education');

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
         return view('education.editeducation');

    }
    public function vieweducation()
    {
         return view('education.vieweducation');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $education = new Education;

      $education->url = $request->url;
      $education->type = $request->type;
      $education->date = $request->date;
      $education->description = $request->description;
      $education->by = $request->by;

      $education->save();
      return redirect()->route('education/index');
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
      $education = App\Education::find($id);
      $education->url = $request->url;
      $education->type = $request->type;
      $education->date = $request->date;
      $education->by = $request->by;
      $flight->save();
      return redirect()->route('education/index');

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

      return redirect()->route('education/index');

    }
}
