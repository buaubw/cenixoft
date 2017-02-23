@extends('customerapp.layouts.app2')

@section('content')

<body style="background:white;">
  <div class="row" style="margin-top:40px;">
<div class="container">

        <div id="tf-works">
            <div class="container"> <!-- Container -->
                <div class="section-title text-center center">
                  <h2>Education Zone</h2>
                    <!-- <h2>Take a look at <strong>our services</strong></h2> -->
                    <div class="line">
                        <hr>
                    </div>

                    <!-- <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small> -->
                </div>


                <div class="categories">

                    <ul class="cat">
                        <li class="pull-left"><h4>Filter by Type:</h4></li>
                        <li class="pull-right">
                            <ol class="type">
                                <li><a href="#" data-filter="*" class="active">All</a></li>
                                <li><a href="#" data-filter=".mobile" >Vedio</a></li>

                            </ol>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div id="lightbox" class="row">
                    @foreach($educations as $education)
                    <div class="col-sm-6 col-md-4 col-lg-4 mobile">
                        <div class="portfolio-item">
                            <div class="">
                                    <div class="hover-text">
                                        <h4>{{$education->type}}</h4>
                                        <small>{{$education->description}}</small>

                                    </div>
                                    <iframe style="width:100%;min-height:200px;height:auto;" src="{{$education->url}}" frameborder="0" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>
        </div>





</div>
</div>
</body>

@endsection
