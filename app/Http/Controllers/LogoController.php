<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App;
use App\Logo;
use App\Customer;
use DateTime;
use File;
use Storage;
use Auth;
use App\Http\Middleware\CheckAdmin;
class LogoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware(CheckAdmin::class);
  }
  public function index(){

    $logo = Logo::all();

     return view('logo.index')->with('values', $logo);
    // return view('project.index');
  }
  public function create()
  {

        return view('logo.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $validator = Validator::make($request->all(), [
    'picture' => 'required|image|max:20480 ',
    'customerlogo' => 'required|image|max:20480 ',
    ]);

    if ($validator->fails()) {
            return redirect('Logo/create')
                        ->withErrors($validator)
                        ->withInput();
        }
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

        $logo = new Logo;
        $logo->customername = $request->customername;
        $logo->customerlogo = $extension;

        $logo->tools = $request->tools;
        $logo->description = $request->description;

        $logo->picture =$extension2;
        $logo->date = $now;
        $logo->by =Auth::user()->name;

        $logo->save();
        return redirect()->route('logo.index');
  }else{
      return redirect()->route('logo.create') ;
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
    $logo = Logo::find($id);

     return view('logo.show')
         ->with('value', $logo);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $logo = Logo::find($id);

     return view('logo.edit')
         ->with('value', $logo);

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
  $logo = App\Logo::find($id);
      $validator = Validator::make($request->all(), [
      'customername' => 'required'
      ]);

      if ($validator->fails()) {
        return redirect('logo.edit',['value' => $logo])
            ->withInput()
            ->withErrors($validator);
  }

    $logo = App\Logo::find($id);

    $extension="";
    $extension2="";

    $upload_success=false;
    $upload_success2=false;


    if ($request->hasFile('customerlogo')) {
      $file2 = base_path('/public/LogoImage/'.$logo->customername);
      $result2 = File::delete($file2);
    $file = $request->customerlogo;
    $destinationPath = 'LogoImage';
    $extension = $file->getClientOriginalName();
    $upload_success = $file->move($destinationPath, $extension);
    }
    if ($request->hasFile('picture')) {
      $file = base_path('/public/LogoImage/'.$logo->picture);
      $result = File::delete($file);

    $file2 = $request->picture;
    $destinationPath2 = 'LogoImage';
    $extension2 = $file2->getClientOriginalName();
    $upload_success2 = $file2->move($destinationPath2, $extension2);

    }
    if($upload_success){
     $logo->customerlogo =$extension;
   }else{
     $logo->customerlogo = $logo->customerlogo;
   }
    if($upload_success2){
      $logo->picture = $request->picture;
   }else{
     $logo->picture=$logo->picture;
   }

    $logo->customername = $request->customername;
    $logo->tools = $request->tools;
    $logo->description = $request->description;
    $logo->date = $request->date;
    $logo->by = $request->by;
    $logo->save();

    return redirect()->route('logo.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $logo = App\Logo::findOrFail($id);

    $file = base_path('/public/LogoImage/'.$logo->picture);
    $result = File::delete($file);

    $file2 = base_path('/public/LogoImage/'.$logo->customerlogo);
    $result2 = File::delete($file2);

    $logo->delete();
    return redirect()->route('logo.index');
  }






}
