@extends('customerapp.layouts.app20')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body style="background:black;">
  <div class="row" style="margin-top:120px;">
<div class="container">

  <style>
  ul.nav.nav-tabs>li.active>a{
    background-color: #ffb800;

  }
  /*td.borderx{
border-width: 1px !important;
border-style: solid!important;
border-color: :black!important;
  }*/
  </style>
  <ul class="nav nav-tabs">
    <li class="active" ><a data-toggle="tab" href="#Requirement">Requirement</a></li>
    <li><a data-toggle="tab" href="#Quotation">Quotation</a></li>
    <li><a data-toggle="tab" href="#Invoice">Invoice</a></li>
    <li><a data-toggle="tab" href="#CustomerContact">Contact</a></li>
    <li><a data-toggle="tab" href="#Contact">Contact by Cenixoft</a></li>
    <li><a data-toggle="tab" href="#Feedback">Feedback</a></li>

  </ul>

  <div class="tab-content">
    <div id="Requirement" class="tab-pane fade in active">
      <div class="box-body table-responsive no-padding" style="background-color:white;min-height:400px;">
        <table class="table" style="amrgin-top:20px;">
          <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Date time</th>
            <th>By</th>
            <th style="text-align: center;width:60px;">View</th>
          </tr>

          <?php $count =1 ?>
          @foreach($requirements as $requirement)
        <tr>
            <td >{{$count}}</td>
          <td>{{$requirement->title}}</td>
          <td>{{$requirement->date}}</td>
            <td>{{$requirement->by}}</td>
            <td style="text-align:center;"><a href= {{url('/documents/requirement/'.  $requirement->filename .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td>
        </tr>
  <?php $count++ ?>
  @endforeach
        </table>
      </div>
    </div>
    <div id="Quotation" class="tab-pane fade in ">
      <div class="box-body table-responsive no-padding" style="background-color:white;min-height:400px;">
        <table class="table" style="amrgin-top:20px;">
          <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Date time</th>
            <th>By</th>
            <th style="text-align: center;width:60px;">View</th>
          </tr>

          <?php $count =1 ?>
          @foreach($quatations as $quatation)
        <tr>
            <td >{{$count}}</td>
          <td>{{$quatation->title}}</td>
          <td>{{$quatation->date}}</td>
            <td>{{$quatation->by}}</td>
            <td style="text-align:center;"><a href= {{url('/documents/quatation/'.  $quatation->filename .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td>

        </tr>
  <?php $count++ ?>
  @endforeach
        </table>
      </div>
    </div>
    <div id="Invoice" class="tab-pane fade in ">
      <div class="box-body table-responsive no-padding" style="background-color:white;min-height:400px;">
        <table class="table" style="amrgin-top:20px;">
          <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Date time</th>
            <th>By</th>
            <th style="text-align: center;width:60px;">View</th>
          </tr>

          <?php $count =1 ?>
          @foreach($invoices as $invoice)
        <tr>
            <td >{{$count}}</td>
          <td>{{$invoice->title}}</td>
          <td>{{$invoice->date}}</td>
            <td>{{$invoice->by}}</td>
          <td style="text-align:center;"><a href= {{url('/documents/invoice/'.  $quatation->filename .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td>

        </tr>
  <?php $count++ ?>
  @endforeach
        </table>
      </div>
    </div>
    <div id="CustomerContact" class="tab-pane fade in ">
      <div class="box-body table-responsive no-padding" style="background-color:white;min-height:400px;">
        <a href="{{url('document/uploadDoc')}}<?php echo '/'.$id ?>" class="btn btn-warning">Upload Contact</a>
        <table class="table" style="amrgin-top:20px;">
          <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Date time</th>
            <th>By</th>
            <th style="text-align: center;width:60px;">View</th>
          </tr>

          <?php $count =1 ?>
          @foreach($customercontacts as $customercontact)
        <tr>
            <td >{{$count}}</td>
          <td>{{$customercontact->title}}</td>
          <td>{{$customercontact->date}}</td>
            <td>{{$customercontact->by}}</td>
            <td style="text-align:center;"><a href= {{url('/documents/customercontact/'.  $customercontact->filename .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td>
        </tr>
  <?php $count++ ?>
  @endforeach
        </table>
      </div>
    </div>
    <div id="Contact" class="tab-pane fade in ">
      <div class="box-body table-responsive no-padding" style="background-color:white;min-height:400px;">
        <table class="table" style="amrgin-top:20px;">
          <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Date time</th>
            <th>By</th>
            <th style="text-align: center;width:60px;">View</th>
          </tr>

          <?php $count =1 ?>
          @foreach($contacts as $contact)
        <tr>
            <td >{{$count}}</td>
          <td>{{$contact->title}}</td>
          <td>{{$contact->date}}</td>
            <td>{{$contact->by}}</td>
            <td style="text-align:center;"><a href= {{url('/documents/contact/'.  $contact->filename .'')}} class="btn btn-primary"><i class="fa fa-eye"></i> </a></td>

        </tr>
  <?php $count++ ?>
  @endforeach
        </table>
      </div>
    </div>
    <div id="Feedback" class="tab-pane fade in ">
      <div class="box-body  no-padding" style="background-color:white;min-height:400px;">
        <div class="container">
            <h4>คำชี้แจง</h4>
          <div class="">
            <p>ข้อมูลนี้จะถูกเก็บใว้เป็นความลับกรุณาตอบให้ตรงกับความเป็นจริง</p>
            <p>โปรดอ่านข้อความอย่างละเอียดและกดเลือกในช่องคะแนนที่ใกล้เคียงกับความคิดท่านมากที่สุด ในแต่ละหัวข้อโดยมีหลักเกณฑ์ดังนี้</p>
            <p class="col-md-2">ดีมาก = 5</p>
            <p class="col-md-2">ดี = 4</p>
            <p class="col-md-2">ปานกลาง = 3</p>
            <p class="col-md-2">พอใช้ = 2</p>
            <p class="col-md-2">ควรปรับปรุง = 1</p>
          </div>
          <style>
          .ce{
            text-align: center;
          }
          </style>
          <form action="{{ action('FeedbackController@store') }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="profile_id" value="{{$id}}">
          <table class="table" style="max-width:1000px;">
            <tr>
              <th class="ce">การประเมินผลการทำงาน</th>
              <th class="ce">ดีมาก = 5</th>
              <th class="ce">ดี = 4</th>
              <th class="ce">ปานกลาง = 3</th>
              <th class="ce">พอใช้ = 2</th>
              <th class="ce">ควรปรับปรุง = 1</th>
            </tr>
            <tr>
              <td>ความสะดวกสบายในการติดต่อสื่อสาร</td>
              <td  class="ce">
                @if($feedback->convinience!=null&&$feedback->convinience==5)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->convinience==null)
                <input type="radio" name="convinience" value="5">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->convinience!=null&&$feedback->convinience==4)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->convinience==null)
                <input type="radio" name="convinience" value="4">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->convinience!=null&&$feedback->convinience==3)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->convinience==null)
                <input type="radio" name="convinience" value="3">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->convinience!=null&&$feedback->convinience==2)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->convinience==null)
                <input type="radio" name="convinience" value="2">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->convinience!=null&&$feedback->convinience==1)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->convinience==null)
                <input type="radio" name="convinience" value="1">
                @endif
              </td>

            </tr>
            <tr>
              <td>การส่งงานตรงตามเวลา</td>
              <td  class="ce">
                @if($feedback->ontime!=null&&$feedback->ontime==5)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->ontime==null)
                <input type="radio" name="ontime" value="5">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->ontime!=null&&$feedback->ontime==4)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->ontime==null)
                <input type="radio" name="ontime" value="4">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->ontime!=null&&$feedback->ontime==3)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->ontime==null)
                <input type="radio" name="ontime" value="3">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->ontime!=null&&$feedback->ontime==2)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->ontime==null)
                <input type="radio" name="ontime" value="2">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->ontime!=null&&$feedback->ontime==1)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->ontime==null)
                <input type="radio" name="ontime" value="1">
                @endif
              </td>

            </tr>
            <tr>
              <td>ค่าใช้จ่ายที่เหมาะสม</td>
              <td  class="ce">
                @if($feedback->price!=null&&$feedback->price==5)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->price==null)
                <input type="radio" name="price" value="5">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->price!=null&&$feedback->price==4)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->price==null)
                <input type="radio" name="price" value="4">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->price!=null&&$feedback->price==3)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->price==null)
                <input type="radio" name="price" value="3">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->price!=null&&$feedback->price==2)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->price==null)
                <input type="radio" name="price" value="2">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->price!=null&&$feedback->price==1)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->price==null)
                <input type="radio" name="price" value="1">
                @endif
              </td>
            </tr>
            <tr>
              <td>งานตรงตามความต้องการของลูกค้า</td>
              <td  class="ce">
                @if($feedback->requirement!=null&&$feedback->requirement==5)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->requirement==null)
                <input type="radio" name="requirement" value="5">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->requirement!=null&&$feedback->requirement==4)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->requirement==null)
                <input type="radio" name="requirement" value="4">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->requirement!=null&&$feedback->requirement==3)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->requirement==null)
                <input type="radio" name="requirement" value="3">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->requirement!=null&&$feedback->requirement==2)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->requirement==null)
                <input type="radio" name="requirement" value="2">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->requirement!=null&&$feedback->requirement==1)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->requirement==null)
                <input type="radio" name="requirement" value="1">
                @endif
              </td>
            </tr>
            <tr>
              <td>ลูกค้ามีความพึงพอใจกับงานที่ได้รับ</td>
              <td  class="ce">
                @if($feedback->complacency!=null&&$feedback->complacency==5)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->complacency==null)
                <input type="radio" name="complacency" value="5">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->complacency!=null&&$feedback->complacency==4)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->complacency==null)
                <input type="radio" name="complacency" value="4">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->complacency!=null&&$feedback->complacency==3)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->complacency==null)
                <input type="radio" name="complacency" value="3">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->complacency!=null&&$feedback->complacency==2)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->complacency==null)
                <input type="radio" name="complacency" value="2">
                @endif
              </td>
              <td  class="ce">
                @if($feedback->complacency!=null&&$feedback->complacency==1)
                <span class="glyphicon glyphicon-ok"></span>
                @endif
                @if($feedback->complacency==null)
                <input type="radio" name="complacency" value="1">
                @endif
              </td>

            </tr>
          </table>
          <br>
          <center>
            <div class="">
              <b>ข้อเสนอแนะ</b>
            </div>
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <textarea name="suggestion" rows="8" cols="80" class="form-control" style="border-color:black!important;">@if($feedback->complacency!=null){{$feedback->suggestion}}@endif</textarea>
            </div>
              </div>
              <br>
            <div class="row">
              @if($feedback->complacency==null)
              <button class="btn btn-warning">Submit</button>
              @endif

            </div>

          </center>
        </form>



        </div>
      </div>
    </div>


  </div>
</div>
</div>
</body>

@endsection
