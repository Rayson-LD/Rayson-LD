@include('front-end.layouts.KushalHeader')
<h1 style="margin-top:10%;margin-left:5%;"><u>WHAT WE DO</u></h1>

@foreach($data['services'] as $serv)

<h3 style="margin-top:5%;margin-left:5%;">
{{$serv->services_title}}
	</h3>
<p style="text-align:justify;margin-left:5%;">
{{$serv->services_description}}
</p>

@endforeach

 <div class="col-md-12" style="margin-top:5%;">
 <div class="col-md-6 float-left" >
 <img src="images/process.jpg" style="width:100%;height:85%;"/>
 </div>
  <div class="col-md-6 float-right" style="width:100%;height:85%;">
 <h3 style="margin-top:11%;">
A Preventive Maintenance Program Helps to:
 </h3>

<li style="margin-top:2%;">
Better uptime!
</li>
<li style="margin-top:2%;">
Save fuel costs!
</li>
<li style="margin-top:2%;">
Maximize truck/machinery performance!
</li>
<li style="margin-top:2%;">
Maximize vehicle/machinery life!
</li>
 <h3 style="margin-top:16%;">
As a company we are focused on:
 </h3>
<li style="margin-top:2%;">
Onsite Service Support
</li>
<li style="margin-top:2%;">
Operation & Maintenance Contracts
</li >
<li style="margin-top:2%;">
Fleet Management
</li>
<li style="margin-top:2%;">
Customised Service Solutions
</li>
<li style="margin-top:2%;">
Parts/Inventory Management
</li>
 </div>
 </div>
@include('front-end.layouts.footer')