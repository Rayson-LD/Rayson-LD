<?php
 
$dataPoints = array(
	array("label"=> 2010, "y"=> 254722.1),
	array("label"=> 2011, "y"=> 292175.1),
	array("label"=> 2012, "y"=> 369565),
	array("label"=> 2013, "y"=> 284918.9),
	array("label"=> 2014, "y"=> 325574.7),
	array("label"=> 2015, "y"=> 254689.8),
	array("label"=> 2016, "y"=> 303909),
	array("label"=> 2017, "y"=> 335092.9),
	array("label"=> 2018, "y"=> 408128),
	array("label"=> 2019, "y"=> 300992.2),
	
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<title>Admin Panel</title>
<link rel="icon" href="images/icon.jpg" type="image/icon type">
<link rel="stylesheet" href="css/tarana.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
<link rel="stylesheet" href="css/bootstrap-extend.css">
		<link href="/js/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
		<link href="/css/datatables.bootstrap.css" rel="stylesheet">
		<link href="/css/datatable_extra_fitting.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="images/icon.jpg" type="image/icon type">

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	//theme: "light2",
	title:{
		text: "Shray Enterprises - 2010 to 2019"
	},
	axisX:{
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	axisY:{
		title: "in Rupees",
		includeZero: true,
		crosshair: {
			enabled: true,
			snapToDataPoint: true
		}
	},
	toolTip:{
		enabled: false
	},
	data: [{
		type: "area",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 600px; width: 100%;"></div>
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
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   