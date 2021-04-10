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
        <main class="login-form">
			<img style="margin-left:10%;margin-top:10%;margin-bottom:10%;"src="images/maps.png" />
<h3 style="text-align:center;">Leave a Comment</h3>
          
					<!--<div class="login-box-msg"></div>-->
                        <form id="loginscreen" role="form" enctype="multipart/form-data">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="about_id" id="about_id">
<div class="form-group" style="width:50%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right">Name</label>
                               
                                    <input type="text" id="about_name" class="form-control" name="about_name" required placeholder="Please Enter your Name" autofocus>
                                
                            </div>		
  <div class="form-group" style="width:50%;margin-left:30%;">
  <label for="">Add Comments </label>
  <textarea class="form-control" rows="3" id="about_description" placeholder="Add Comments .." name="about_description"></textarea>
</div>
  <div class="form-group" style="width:50%;margin-left:30%;">
  <label for="" class="col-form-label text-md-right">Post Your Favourite Memories With Us</label>
    <input type="file" class="form-control" id="about_image" name="about_image">
  </div>
    <div class="col-md-6 " style="margin-left:47%;margin-top:3%;">
                                <button type="submit"  class="submit btn btn-outline-success my-2 my-sm-0">
                                   Submit
                                </button>
                            </div>          
                    </form>
			  <h4 style="margin-bottom:5%;">View Service Comments</h4>
  <div class="col-md-7 d-none d-md-block bg-light" style="border:1px solid grey;border-radius:20px;">
			<?php $i=1;?>
			@foreach($data['about_image'] as $img)
			<h3>{{$img -> about_name}}</h3>
			<p>{{$img -> about_desc}}</p>
			<img style="width:30%;height:30%;" src={{$img -> about_image}} />
			<h6>{{$img->time}}</h6>
			<h4>------------------------------------</h4>
			@endforeach
			</div>
</main>  
</body>
<style>
.error{
	color:red;
}
</style>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/sweetalert/sweetalert.min.js"></script>
<script src="js/sweetalert/jquery.sweet-alert.custom.js"></script>
<script src="js/datatable/jquery.dataTables.min.js"></script>
<script src="js/datatable/dataTables.buttons.min.js"></script>
<script src="js/datatable/buttons.flash.min.js"></script>
					<script src="js/datatable/jszip.min.js"></script>
					<script src="js/datatable/pdfmake.min.js"></script>
					<script src="js/datatable/vfs_fonts.js"></script>
					<script src="js/datatable/buttons.html5.min.js"></script>
					<script src="js/datatable/buttons.print.min.js"></script>
<script>
			
			$('#loginscreen').on('submit',(function(e)
			{
			
				e.preventDefault();
				
				$("#loginscreen").validate({
					rules:{
						about_image:{
							required:true
						},
						about_name:{
							required:true
						},
						about_description:{
							required:true
						}
						
					},
					messages:{
						about_image:{
							required: "Please add your image"
						},
						about_name:{
							required:"Please Enter you Name"
						},
						about_description:{
					required:"Please add Description"
						}
						
					}
				});
				if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'about_insert',
					type:'POST',
					//data:$("#loginscreen").serialize(),
					data: new FormData(this),
					contentType: false,       
					cache: false,             
					processData:false,
					success:function(data)
					{
						swal("Sucessfully!", "Added.", "success");   
						location.reload();
					}
				}); 
				}
				
			}));
		</script>
</html>
