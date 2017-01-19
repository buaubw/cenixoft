@extends('requirement.list')

@section('content2')
<div class="col-md-8">
  <center><a  href="{{url('document/requirement')}}" class="btn btn-warning" style=" margin-left: 20px">Requirement</a>
    <a  href="{{url('document/quotation')}}" class="btn  btn-warning" style=" margin-left: 20px">Quotation</a>
    <a  href="{{url('document/contact')}}" class="btn btn-warning " style=" margin-left: 20px" >Contact</a>
    <a  href="{{url('document/invoice')}}" class="btn btn-warning " style=" margin-left: 20px">Invoice</a></center>
    <a href="{{url('document/createcontact')}}"  class="btn btn-warning " style=" margin-top: 20px">Create</a>
</div>
@endsection
