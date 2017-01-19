<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App;
use App\Mobile;
use App\Customer;
use DateTime;
use File;
use Storage;
class MobileController extends Controller
{
  public function index(){

    $mobile = Mobile::all();

     return view('mobile.index')->with('values', $mobile);
    // return view('project.index');
  }
  public function create()
  {

        return view('mobile.create');
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
    'picture' => 'required|image|max:20480 ',
    'customerlogo' => 'required|image|max:20480 ',
    ]);

    if ($validator->fails()) {
            return redirect('mobile/create')
                        ->withErrors($validator)
                        ->withInput();
        }
    if ($request->hasFile('customerlogo')&&$request->hasFile('picture')) {
        $file = $request->customerlogo;
        $destinationPath = 'MobileImage';
        $extension = $file->getClientOriginalName();
        $upload_success = $file->move($destinationPath, $extension);


        $file2 = $request->picture;
        $destinationPath2 = 'MobileImage';
        $extension2 = $file2->getClientOriginalName();
        $upload_success2 = $file2->move($destinationPath2, $extension2);

        $mobile = new Mobile;
        $mobile->customername = $request->customername;
        $mobile->customerlogo = $extension;

        $mobile->tools = $request->tools;
        $mobile->description = $request->description;

        $mobile->picture =$extension2;
        $mobile->date = $now;
        $mobile->by = "test";

        $mobile->save();
        return redirect()->route('mobile.index');
  }else{
      return redirect()->route('mobile.create');
  }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $mobile = Mobile::find($id);
      return view('mobile.show')->with('value', $mobile);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $mobile = Mobile::find($id);
    return view('mobile.edit')->with('value', $mobile);
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
    $validator = Validator::make($request->all(), [
    'picture' => 'required|image|max:20480 ',
    'customerlogo' => 'required|image|max:20480 ',
    ]);

    if ($validator->fails()) {
            return redirect('mobile/create')
                        ->withErrors($validator)
                        ->withInput();
        }
    $mobile = App\Mobile::find($id);

    $extension="";
    $extension2="";

    $upload_success=false;
    $upload_success2=false;


    if ($request->hasFile('customerlogo')) {
      $file2 = base_path('/public/MobilImage/'.$mobile->customername);
      $result2 = File::delete($file2);
    $file = $request->customerlogo;
    $destinationPath = 'MobileImage';
    $extension = $file->getClientOriginalName();
    $upload_success = $file->move($destinationPath, $extension);
    }
    if ($request->hasFile('picture')) {
      $file = base_path('/public/MobilImage/'.$mobile->picture);
      $result = File::delete($file);
    $file2 = $request->picture;
    $destinationPath2 = 'MobileImage';
    $extension2 = $file2->getClientOriginalName();
    $upload_success2 = $file2->move($destinationPath2, $extension2);

    }
    if($upload_success){
     $mobile->customerlogo =$extension;
   }else{
     $mobile->customerlogo = $mobile->customerlogo;
   }
    if($upload_success2){
      $mobile->picture = $request->picture;
   }else{
     $mobile->picture=$mobile->picture;
   }

    $mobile->customername = $request->customername;
    $mobile->tools = $request->tools;
    $mobile->description = $request->description;
    $mobile->date = $request->date;
    $mobile->by = $request->by;
    $mobile->save();

    return redirect()->route('mobile.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $mobile = App\Mobile::find($id);

    $file = base_path('/public/MobilImage/'.$mobile->picture);
    $result = File::delete($file);

    $file2 = base_path('/public/MobilImage/'.$mobile->customerlogo);
    $result2 = File::delete($file2);
    $mobile->delete();

    $mobile->delete();

    return redirect()->route('mobile.index');
  }


}
