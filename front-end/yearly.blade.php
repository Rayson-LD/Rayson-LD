<?php
 
$dataPoints1 = array(
	array("label"=> "2010", "y"=> 36.12),
	array("label"=> "2011", "y"=> 34.87),
	array("label"=> "2012", "y"=> 40.30),
	array("label"=> "2013", "y"=> 35.30),
	array("label"=> "2014", "y"=> 39.50),
	array("label"=> "2015", "y"=> 50.82),
	array("label"=> "2016", "y"=> 74.70)
);
$dataPoints2 = array(
	array("label"=> "2010", "y"=> 64.61),
	array("label"=> "2011", "y"=> 70.55),
	array("label"=> "2012", "y"=> 72.50),
	array("label"=> "2013", "y"=> 81.30),
	array("label"=> "2014", "y"=> 63.60),
	array("label"=> "2015", "y"=> 69.38),
	array("label"=> "2016", "y"=> 98.70)
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
	theme: "light2",
	title:{
		text: "Average Amount on Expenditure and Revenue in India."
	},
	axisY:{
		includeZero: true
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Expenditure",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Revenue",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
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