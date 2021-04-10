<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
<title>Comments</title>
<link rel="icon" href="images/icon.jpg" type="image/icon type">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/bootstrap-extend.css">
		<link href="/js/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
		<link href="/css/datatables.bootstrap.css" rel="stylesheet">
		<link href="/css/datatable_extra_fitting.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<header>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shray Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('join_table')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('about_us')}}">About Us</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('contactus')}}">Let's Have a Chat</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('dashboard')}}">Reports</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<img style="margin-left:10%;margin-top:10%;margin-bottom:10%;"src="images/maps.png" />

<h3 style="text-align:center;">Leave a Comment</h3>
 
<form id="loginscreen" role="form" enctype="multipart/form-data">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="contact_id" id="contact_id">
<div class="form-group" style="width:50%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right">Name</label>
                               
                                    <input type="text" id="contact_name" class="form-control" name="contact_name" required placeholder="Please Enter your Name" autofocus>
                                
                            </div>
  <div class="form-group" style="width:50%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right" >Comments</label>
                               
                      <textarea class="form-control" class="form-control" id="contact_desc" name="contact_desc" required rows="3" placeholder="Your Comments"></textarea>
                                
                            </div>
  <div class="col-md-6 " style="margin-left:47%;margin-top:3;">
  <button type="submit" class="login btn btn-outline-success my-2 my-sm-0" >
                                   Submit
  </button>
                                
	</div>
  </form>
  <h4 style="margin-bottom:5%;">View Service Comments</h4>
  <div class="col-md-7 d-none d-md-block bg-light" style="border:1px solid grey;border-radius:20px;">
  <?php $i= date("Y/m/d " . " h:i:sa");?>
			@foreach($data['contacts'] as $contact)
			<h3>{{$contact->contact_name}}</h3>
			<p>{{$contact->contact_desc}}</p>
			<h6>{{$contact->time}}</h6>
			<h4>------------------------------------</h4>
			@endforeach
			</div>
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
						contact_name:{
							required:true
						},
						
						contact_desc:
						{
							required:true
						},
						
						
					},
					messages:{
						contact_name:{
							required:"Enter Your Name"
						},
						
						contact_desc:
						{
							required:"Please give us your comments"
						},
						
					}
				});
				
				if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'get_comments',
					type:'POST',
					data:$("#loginscreen").serialize(),
					success:function(data)
					{
						alert("comments added successfully");   
						location.reload();
					}
				}); 
				}
				
			})
			
				
				</script>
</html>

