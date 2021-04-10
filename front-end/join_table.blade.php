<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
<title>Shray Enterprises</title>
<link rel="icon" href="images/icon.jpg" type="image/icon type">
<style>
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
 background-image: url('images/loader.jpg');
 background-repeat: no-repeat;
 background-size: cover;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid green;
  border-radius: 50%;
  border-top: 16px solid red;
  border-left:16px solid blue;
    border-bottom: 16px solid yellow;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  
}
</style>
<style>
body {
  background-image: url('images/shraystore.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<link rel="stylesheet" href="css/bootstrap.css">

<link rel="stylesheet" href="css/bootstrap-extend.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/bootstrap-extend.css">
		<link href="/js/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
		<link href="/css/datatables.bootstrap.css" rel="stylesheet">
		<link href="/css/datatable_extra_fitting.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="myFunction()" style="margin:0;">


<div id="loader" class="animate-bottom">
</div>
<div style="display:none;" id="myDiv" class="animate-bottom">
 

<nav class="navbar navbar-expand-lg navbar-dark">
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
        <a class="nav-link" href="{{url('dashboard')}}">Dashboard</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('admin_about')}}">Let's Have a Chat</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('report')}}">Reports</a>
      </li>
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('admin')}}">Admin Login</a>
          <a class="dropdown-item" href="{{url('customer_login')}}">Customer Login</a>
          <a class="dropdown-item" href="{{url('vendor_login')}}">Vendor login</a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bored ?
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('index')}}">Play Tic Tac Toe</a>
         
      </li>
    </ul>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide animated fadeinup" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="images/slide1.jpg" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    <h1 style="color:white;font-size:500%;" class="animated fadeInUp">We're Open 24 Hrs!!</h1>
    <p style="color:white;font-size:300%;" class="animated fadeInUp">Have a glance at our store. You'll never Regret :)</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5 style="color:white;font-size:500%;" class="animated fadeInUp">We have variety of Products</h5>
    <p style="color:white;font-size:300%;" class="animated fadeInUp">We Provide Fruits,clothes,Sweets,Electronics etc</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide3.jpg"  alt="Third slide">
	  <div class="carousel-caption d-none d-md-block">
    <h5 style="color:white;font-size:500%;" class="animated fadeInUp">Our Vendors</h5>
    <p style="color:white;font-size:300%;" class="animated fadeInUp">There are many people who work in the back end of our store.The best vendors</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-md-12 " style="padding-top:3%;padding-bottom:3%;">

			<h4>Our Orders Today</h4>
<table id="myTable" class="table table-bordered bg-dark">
			<thead>
			<tr>
			<td>Customer Name</td>
			<td>Customer email</td>
			<td>Customer Number</td>
			<td>Order Name</td>
			<td>Cost </td>
			<td>Sold By</td>
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
			<td>{{$row -> vendor_name}}</td>
			</tr>
			@endforeach
			</tbody>
			</table>
			</div>
			<div style="display:none">{{$total = 0}}
			</div>
			@foreach($data as $row)
			<tr>
			<div style="display:none">{{$total += $row->Cost}}</div>
			</tr>
			@endforeach
			<div style="padding-left:80%;">
			<h4>Total Profit Today :
			{{$total}}Rs</h4>
			</div>
			
			<div class="jumbotron animated fadeinup">
  <h1 class="display-4 animate fadeInUp">Welcome, From Shray Store !</h1>
  <p class="lead">Shray Enterprises is a multi designer boutique located at Raghuvanshi Mills Compound, Lower Parel in Mumbai.</p>
  <hr class="my-4">
  <p>Shray:The Store is a multi designer boutique located at Raghuvanshi Mills Compound, Lower Parel in Mumbai. Lower Parel is becoming a hub that houses most of Mumbai’s high end boutiques for clothing, accessories, and home décor. It also has a number of new as well as upcoming commercial and residential buildings, restaurants and nightlife.</p>
<p>While its location is vital to the store, Shray boasts an innovative and fresh outlook to fashion through not only its location and decor (interiors done by one of India’s top interior designers, Rajiv Saini) but also through the vision of its owners Abha and Shreya Singhania. Abha and Shreya envision Shray as Mumbai’s new fashion destination, housing established as well as emerging and gen-next designers from all over India. Their vision is to give clients customers a memorable experience when they enter our store, to awaken their senses and make them feel beautiful, fashion forward and glamorous.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{url('about_us')}}" role="button">Learn more</a>
  </p>
</div>
<p style="font-size:220%" class="animated fadeinup">Top Picks For You</p>
<div class="container animated fadeinleft">
  <div class="row" style="margin-top:4%;">
    <div class="col-md-4">
	<div class="card" style="width: 18rem;">
  <img src="images/electronics.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Make your life more Creative</h5>
    <p class="card-text">Order ID : Item   : Cost</p>
	<p class="card-text">2010	  :tv      :50000</p>
	<p class="card-text">2011     :ps5     :55000</p>
	<p class="card-text">2012     :fridge  :43000</p>
	<p class="card-text">2013     :inverter:35000</p>
	<p class="card-text">2014     :laptop  :61000</p>
	<p class="card-text">2015     :Mobile  :21000</p>
    <a href="{{url('buy_now')}}" class="btn btn-primary">Buy Now</a>
  </div>
</div>
	</div>
    <div class="col-md-4 ml-auto">
	<div class="card" style="width: 18rem;">
  <img src="images/books.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dream Stories by reading Books</h5>
    <p class="card-text">Order ID : Item           : Cost</p>
	<p class="card-text">6010 :half girlfriend     :2000</p>
	<p class="card-text">6011 :Lord of the rings   :2000</p>
	<p class="card-text">6012:50 shades            :1500</p>
	<p class="card-text">6103:The great Gatsby     :1300</p>
	<p class="card-text">6014:To kill a mockingbird:2000</p>
	<p class="card-text">6015:      catch-22       :1000</p>
    <a href="{{url('buy_now')}}" class="btn btn-primary">Buy Now</a>
  </div>
</div>
	</div>
  </div>
  <div class="row" style="margin-top:2%";>
    <div class="col-md-3 ml-md-auto">
	<div class="card" style="width: 18rem;">
  <img src="images/groceries.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Groceries</h5>
    <p class="card-text">Order ID : Item      : Cost/Kg</p>
	<p class="card-text">1010     : sugar     : 70 </p>
	<p class="card-text">1011     : Rice      : 55 </p>
	<p class="card-text">1012     : cheese    : 350 </p>
	<p class="card-text">1013     :Cooking Oil:400 </p>
	<p class="card-text">1014     :Pulses     :200 </p>
	<p class="card-text">1015     :mushroom   :120 </p>
    <a href="{{url('buy_now')}}" class="btn btn-primary">Buy Now</a>
  </div>
</div>
	</div>
    <div class="col-md-3 ml-md-auto">
	<div class="card" style="width: 18rem;">
  <img src="images/fashion.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Style your Fashion</h5>
    <p class="card-text"> Order ID : Item      : Cost</p>
	<p class="card-text">5010      :eyeliners  :500</p>
	<p class="card-text">5011      :lipstick   :900</p>
	<p class="card-text">5012      :shoes      :5000</p>
	<p class="card-text">5013      :cosmetics  :4000</p>
	<p class="card-text">5014      :sandles    :2000</p>
	<p class="card-text">5015      :glasses    :5000</p>
    <a href="{{url('buy_now')}}" class="btn btn-primary">Buy Now</a>
  </div>
</div>
	</div>
  </div>
  <div class="row" style="margin-top:4%;">
    <div class="col-auto mr-auto">
	<div class="card" style="width: 18rem;">
  <img src="images/sweets.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fill your life with sweets</h5>
    <p class="card-text">Order ID : Item     : Cost</p>
	<p class="card-text">4010     : ice cream:180</p>
	<p class="card-text">4011     : chips    :200</p>
	<p class="card-text">4012     :cookies   :150</p>
	<p class="card-text">4013     : biscuits :100</p>
	<p class="card-text">4014     :cakes     :600</p>
	<p class="card-text">4015     :Donuts    :300</p>
    <a href="{{url('buy_now')}}" class="btn btn-primary">Buy Now</a>
  </div>
</div>
	</div>
    <div class="col-auto">
	<div class="card" style="width: 18rem;">
  <img src="images/clothes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Be more than you are</h5>
    <p class="card-text">Order ID : Item            : Cost</p>
	<p class="card-text">3010     :shirt            :1000</p>
	<p class="card-text">3011     :pants            :2400</p>
	<p class="card-text">3012     :t-shirt          :550</p>
	<p class="card-text">3016     :saree            :10000</p>
	<p class="card-text">3017     :shift dress      :5000</p>
	<p class="card-text">3018     :off the shoulder :2000</p>
    <a href="{{url('buy_now')}}" class="btn btn-primary">Buy Now</a>
  </div>
</div>
	</div>
  </div>
  <a class="btn btn-outline-success my-2 my-sm-0" href="https://www.amazon.in/" role="button">View More</a>
</div>
				<h3 style="text-align:center;margin-right:10%;margin-top:5%;">Email Us!!</h3>
 


						<form action="sendmail" method="get" id="loginscreen">
<div class="form-group" style="width:30%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right">Name</label>
                               
                                    <input type="text" id="name" class="form-control" name="name" required placeholder="Please Enter your Name" autofocus>
                                
                            </div>
  <div class="form-group" style="width:30%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right">Email</label>
                               
                                    <input type="text" id="email" class="form-control" name="email" required  placeholder="Please Enter your Email" autofocus>
                                
                            </div>
   <div class="form-group" style="width:30%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right">Mobile No.</label>
                               
                                    <input type="number" id="mobile_no" class="form-control" name="mobile_no" required placeholder="Please Enter your Mobile Number" autofocus>
                                
                            </div>
  <div class="form-group" style="width:30%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right" >Comments</label>
                               
                      <textarea class="form-control" class="form-control" id="comments" name="comments" required rows="3" placeholder="Your Comments"></textarea>
                                
                            </div>
  <div class="col-md-7 " style="margin-left:43%;margin-top:5%;">
  <button type="submit" class="login btn btn-outline-success text-white my-2 my-sm-0"  ><i class="fa fa-submit"></i>
 Send Email
  </button>                         
	</div>
  </form>
  <button onclick="topFunction()" id="myBtn" class="btn btn-outline-danger text-white my-2 my-sm-0" style="display: none;position: fixed; bottom: 80px; 
  right: 30px; z-index: 99;cursor: pointer;padding: 15px;border-radius: 50px;"title="Go to top">Back to Top</button>
  <a  class="btn btn-success" style="position:fixed;bottom:10px;z-index: 99;right:10px;padding:15px;width:10%;" href="https://web.whatsapp.com/">WhatsApp Us</a>
	<p id="demo"></p>
  <div class="col-md-12" style="margin-top:4%;">
  <div class="col-md-4 float-left  bg-dark text-white">
  <p style="font-size:100%;"><u>Our Team</u></p>
   <p>Rayson Lawrence D'Souza</p>
	 <p>Shravan A  Shetty</p>
	  <p>Dennis D'mello</p>
	  <p>Rakshath Rao</p>
	 
  </div>
  <div class="col-md-4 float-left  bg-dark text-white">
   <p style="font-size:100%;"><u>Copyright</u></p>
   <p>2010 shray Store Global.</p> 
   <p>All Rights Reserved.</p>
   <p>Mission:Bring Love to Everyone</p>
   <p>Developer:Rayson Lawrence Dsouza</p>
  </div>
  <div class="col-md-4 float-right bg-dark text-white">
  <p style="font-size:100%;"><u>Contact Us</u></p>
  <p>Team Shraysons Global</p>
  <p>Mail:shraystore@gmail.com</p>
  <p>Twitter:#ShrayStore</p>
  <p>@shray_store</p>	
  </div>
  </div>
</div>  
</body>
<style>
.error{
	color:red;
}
</style>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/bootstrap.js"></script>
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
						swal("Feedback Sent Successfully!!!");   
						location.reload();
					}
				}); 
				}
				})
			
				$('#myTable').DataTable( {
					dom: 'Bfrtip',
					ordering: false,
					buttons: [
					 'excel', 'print'
					]
				});
</script>
<script>
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</html>