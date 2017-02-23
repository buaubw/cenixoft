<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App;
use App\CustomerContact;
use App\Invoice;
use App\Project;
use App\Feedback;
use App\Contact;
use App\Customer;
use App\Quatation;
use App\Requirement;
use DateTime;
use Auth;
use App\Http\Middleware\CheckAdmin;
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
        // $this->middleware(CheckAdmin::class);
     }
    public function index()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
      $projects = Project::all();
      $customers = Customer::all();

       return view('document.index')->with('values', $projects)->with('customers',$customers);

    }
    public function requirement()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/ ');
      }
        return view('document.requirement');
        //
    }
    public function contact()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        return view('document.contact');
        //
    }
    public function invoice()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        return view('document.invoice');
        //
    }
    public function quotation()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        return view('document.quotation');
        //
    }
    public function createrequirement()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        return view('document.createrequirement');
        //
    }
    public function createquotation()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        return view('document.createquotation');
        //
    }
    public function createinvoice()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        return view('document.createinvoice');
        //
    }
    public function createcontact()
    {
      if(Auth::user()->role!='admin'){
        return redirect('home');
      }
        return view('document.createcontact');
        //
    }
    public function viewcompany()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        return view('document.viewcompany');
        //
    }
    public function inboxcontact()
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        return view('document.inboxcontact');
        //
    }
    public function project($id)
    {
      if(Auth::user()->role!='admin'){
        return redirect('/');
      }
        return view('document.project');
    }

    public function customerindex()
    {
        $customer = DB::table('customers')->where('user_id','=',Auth::user()->id)->first();
        $projects = Customer::findOrFail($customer->id)->projects()->get();
        return view('customerapp.document.index')->with('projects',$projects)->with('customer',$customer);
    }
    public function customerdocument($id)
    {
        $requirements = Project::findOrFail($id)->requirements()->get();
        $invoices = Project::findOrFail($id)->invoices()->get();
        $quatations = Project::findOrFail($id)->quatations()->get();
        $contacts = Project::findOrFail($id)->contacts()->get();
        $customercontacts = Project::findOrFail($id)->customercontacts()->get();
        $feedback= DB::table('feedbacks')
          ->where('project_id', '=', $id)
            ->join('projects', 'projects.id', '=', 'feedbacks.project_id')
            ->first();
        if(count($feedback)==0){
          $feedback =new Feedback;
        }

        return  \View::make('customerapp.document.document')->with('requirements', $requirements)->with('invoices', $invoices)->with('feedback',$feedback)
        ->with('quatations',$quatations)->with('contacts', $contacts)->with('customercontacts', $customercontacts)->with('id',$id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function uploadDoc($id)
     {
       $project = Project::find($id);
       return view('customerapp.document.uploadDoc')->with('project',$project);
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function createFeedback(Request $request)
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
       return redirect()->route('document.customerdocument');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $document = new document;
      //
      // $document->filename = $request->filename;
      // $document->profile_id = $request->profile_id;
      // $document->type = $request->type;
      // $document->date= $request->date;
      // $feedback->by = $request->by;
      //
      //
      // $customer->save();

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
