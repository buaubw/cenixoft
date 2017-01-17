<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Website;
use App\Customer;
use DateTime;
use File;
use Storage;
class WebsiteController extends Controller
{
  public function index(){

    $website = Website::all();

     return view('website.index')->with('values', $website);
    // return view('project.index');
  }
  public function create()
  {

        return view('website.create');
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

    if ($request->hasFile('customerlogo')&&$request->hasFile('picture')) {
        $file = $request->customerlogo;
        $destinationPath = 'LogoImage';
        $extension = $file->getClientOriginalName();
        $upload_success = $file->move($destinationPath, $extension);


        $file2 = $request->picture;
        $destinationPath2 = 'LogoImage';
        $extension2 = $file2->getClientOriginalName();
        $upload_success2 = $file2->move($destinationPath2, $extension2);

        $website = new Website;
        $website->customername = $request->customername;
        $website->customerlogo = $extension;

        $website->tools = $request->tools;
        $website->description = $request->description;

        $website->picture =$extension2;
        $website->date = $now;
        $website->by = "test";

        $website->save();
        return redirect()->route('website.index');
  }else{
      return redirect()->route('website.create');
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
    $website = Website::find($id);

     return view('website.show')
         ->with('value', $website);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $website = Website::find($id);

     return view('website.edit')
         ->with('value', $website);

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
    $website = App\Website::find($id);

    $extension="";
    $extension2="";

    $upload_success=false;
    $upload_success2=false;


    if ($request->hasFile('customerlogo')) {
    Storage::delete($logo->customerlogo);
    $file = $request->customerlogo;
    $destinationPath = 'LogoImage';
    $extension = $file->getClientOriginalName();
    $upload_success = $file->move($destinationPath, $extension);
    }
    if ($request->hasFile('picture')) {
    File::delete('LogoImages/' . $logo->picture);
    $file2 = $request->picture;
    $destinationPath2 = 'LogoImage';
    $extension2 = $file2->getClientOriginalName();
    $upload_success2 = $file2->move($destinationPath2, $extension2);
    }
    if($upload_success){
     $website->customerlogo =$extension;
   }else{
     $website->customerlogo = $website->customerlogo;
   }
    if($upload_success2){
      $website->picture = $request->picture;
   }else{
     $website->picture=$website->picture;
   }

    $website->customername = $request->customername;
    $website->tools = $request->tools;
    $website->description = $request->description;
    $website->date = $request->date;
    $website->by = $request->by;
    $website->save();

    return redirect()->route('website.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $website = App\Website::find($id);

    File::delete('WebsiteImages/' . $website->picture);

    $website->delete();

    return redirect()->route('website.index');
  }


}
