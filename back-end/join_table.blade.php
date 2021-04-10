<html>
<head>
@include('front-end.layouts.KushalHeader')
</head>
<body>
<img style="margin-left:10%;margin-top:10%;margin-bottom:10%;"src="images/maps.png" />
	<h3 style="text-align:center;">Leave a Comment</h3>
 
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
			<form action="sendmail" method="get" id="loginscreen">
<div class="form-group" style="width:50%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right">Name</label>
                               
                                    <input type="text" id="name" class="form-control" name="name" required placeholder="Please Enter your Name" autofocus>
                                
                            </div>
  <div class="form-group" style="width:50%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right">Email</label>
                               
                                    <input type="text" id="email" class="form-control" name="email" required  placeholder="Please Enter your Email" autofocus>
                                
                            </div>
   <div class="form-group" style="width:50%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right">Mobile No.</label>
                               
                                    <input type="number" id="mobile_no" class="form-control" name="mobile_no" required placeholder="Please Enter your Mobile Number" autofocus>
                                
                            </div>
  <div class="form-group" style="width:50%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right" >Comments</label>
                               
                      <textarea class="form-control" class="form-control" id="comments" name="comments" required rows="3" placeholder="Your Comments"></textarea>
                                
                            </div>
  <div class="col-md-6 " style="margin-left:32%;margin-top:5%;">
  <button type="submit" class="login" style="background-color:blue;color:white;">
                                   Submit
  </button>
                                
	</div>
  </form>
<div class="col-md-12" style="margin-top:5%;">
			<h4>Our Orders</h4>
<table id="VendorTable" class="table table-bordered">
			<thead>
			<tr>
			<td>Customer Name</td>
			<td>Customer email</td>
			<td>Customer Number</td>
			<td>Order Name</td>
			<td>Cost </td>
			</tr>
			</thead>
			<tbody>
			@foreach($data as $row)
			<tr>
			<td>{{$row -> customer_name}}</td>
			<td>{{$row -> customer_email}}</td>
			<td>{{$row -> customer_number}}</td>
			<td>{{$row -> Order_Name}}</td>
			<td>{{$row -> Cost}} Rs</td>
			</tr>
			@endforeach
			</tbody>
			</table>
		
</body>
<style>
.error{
	color:red;
}
</style>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
$('.login').click(function(e)
			{
				$.validator.addMethod("loginRegex", function(value, element) {
					return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
				}, " Valid Email required * .");
				e.preventDefault();
				
				$("#loginscreen").validate({
					rules:{
						name:{
							required:true
						},
						email:
						{
							required:true,
							email:true
							
						},
					
						mobile_no:
						{
							required:true
							
						},
						comments:
						{
							required:true
						}
						
					},
					messages:{
						name:{
							required:"Enter Your Name"
						},
						email:
						{
							required:"Enter Your Email",
							email:"Enter Valid EMail-id"
							
						},
					
						mobile_no:
						{
							required:"Enter Your Mobile number"
							
						},
						comments:
						{
							required:"Please give us your comments"
						}
					}
				});

				if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'sendmail',
					type:'get',
					data:$("#loginscreen").serialize(),
					success:function(data)
					{
						alert("Feedback Sent Successfully!!!");   
						location.reload();
					}
				}); 
				}
				</script>
</html>