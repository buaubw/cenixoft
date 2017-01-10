@extends('layouts.app0')

@section('content')
<script>
function demoFromHTML() {

  var mywindow = window.open('', 'PRINT', 'height=400,width=600');


          mywindow.document.write('<html><head><title>' + document.title  + '</title>');

          mywindow.document.write('</head><body >');
        mywindow.document.write('<h1>' + document.title  + '</h1>');
          mywindow.document.write(document.getElementById("customers").innerHTML);
          mywindow.document.write('</body></html>');

          mywindow.document.close(); // necessary for IE >= 10
          mywindow.focus(); // necessary for IE >= 10*/

          mywindow.print();
          mywindow.close();

          return true;
}
</script>
<div class="content-wrapper" style="height:1000px;">



<div class="container" style="padding-top:20px;" id="customers">
<h3 class="box-title">Feedback</h3>

  <div class="row col-md-11" style="padding-top:10px;padding-left:20px;">

    <p>Project: Logo Design</p>
    <p>First name: Ubilwan</p>
    <p>Last name: Rattanaubol</p>
    <p>Company name: Ichitan</p>
    <button href="#" class="btn btn-warning pull-right" style="padding-top:10px;padding-bottom:10px;" onclick="demoFromHTML()">Download</button>
    <br>
    <table class="table table-striped" style="padding-top:10px;">
      <tr>
        <th>การประเมินผลการทำงาน</th>
        <td>คะแนนที่ได้</td>
      </tr>
      <tr>
        <th>
         ความสะดวกสบายในการติดต่อสื่อสาร
        </th>
        <td>ดีมาก = 5</td>
      </tr>
      <tr>
        <th>การส่งงานตามกรอบเวลา</th>
        <td>ดี = 4</td>
      </tr>
      <tr>
        <th>ค่าใช้จ่ายที่เหมาะสม</th>
        <td>ดี = 4</td>
      </tr>
      <tr>
        <th>งานตรงตามความต้องการของลูกค้า</th>
        <td>ดีมาก = 5</td>
      </tr>
      <tr>
        <th>ลูกค้ามีความพึงพอใจกับงานที่ได้รับ</th>
        <td>ดีมาก = 5</td>
      </tr>
    </table>

    <p>ข้อเสนอแนะ</p>
    <textarea class="form-control" row="5"></textarea>
    <br>
    <a href="#" class="btn btn-primary pull-right" style="padding-top:10px;">OK</a>
</div>
</div>
</div>






@endsection
