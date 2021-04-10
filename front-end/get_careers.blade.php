
@include('front-end.layouts.KushalHeader')
<div class="container"  style="background-image:url(images/slide3.jpg);margin-top:10%;height:100%;">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">CAREERS</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="{{url('kushalservices')}}">Home</a>
		                        </li>
		                        <li>Careers</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
<p>{{$data['careers']->careers_description}}</p>
@include('front-end.layouts.footer')