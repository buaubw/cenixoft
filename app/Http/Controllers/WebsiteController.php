<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App;
use App\Website;
use App\Customer;
use DateTime;
use File;
use Auth;
use Storage;
class WebsiteController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
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

    $validator = Validator::make($request->all(), [
    'picture' => 'required|image|max:20480 ',
    'customerlogo' => 'required|image|max:20480 ',
    ]);

    if ($validator->fails()) {
            return redirect('website/create')
                        ->withErrors($validator)
                        ->withInput();
        }


    if ($request->hasFile('customerlogo')&&$request->hasFile('picture')) {
        $file = $request->customerlogo;
        $destinationPath = 'WebsiteImage';
        $extension = $file->getClientOriginalName();
        //Image::make($file)resize(300, 200);
        $upload_success = $file->move($destinationPath, $extension);



        $file2 = $request->picture;
        $destinationPath2 = 'WebsiteImage';
        $extension2 = $file2->getClientOriginalName();
      //  Image::make($file2)resize(300, 200);
        $upload_success2 = $file2->move($destinationPath2, $extension2);

        $website = new Website;
        $website->customername = $request->customername;
        $website->customerlogo = $extension;

        $website->tools = $request->tools;
        $website->description = $request->description;

        $website->picture =$extension2;
        $website->date = $now;
        $website->by = Auth::user()->name;

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
    $validator = Validator::make($request->all(), [
    'customername' => 'required'
    ]);

    if ($validator->fails()) {
      return redirect('website.edit',['value' => $website])
          ->withInput()
          ->withErrors($validator);
}
    $extension="";
    $extension2="";

    $upload_success=false;
    $upload_success2=false;
    if ($request->hasFile('customerlogo')) {
      $file2 = base_path('/public/WebsiteImage/'.$website->customername);
      $result2 = File::delete($file2);
    $file = $request->customerlogo;
    $destinationPath = 'WebsiteImage';
    $extension = $file->getClientOriginalName();
    $upload_success = $file->move($destinationPath, $extension);
    }
    if ($request->hasFile('picture')) {
      $file = base_path('/public/WebsiteImage/'.$website->picture);
      $result = File::delete($file);
    $file2 = $request->picture;
    $destinationPath2 = 'WebsiteImage';
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

    $file = base_path('/public/WebsiteImage/'.$website->picture);
    $result = File::delete($file);

    $file2 = base_path('/public/WebsiteImage/'.$website->customerlogo);
    $result2 = File::delete($file2);
    $website->delete();

    return redirect()->route('website.index');
  }


}
