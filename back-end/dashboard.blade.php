
@include('front-end.layouts.head')
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
              
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
             
			  <li class="nav-item">
                <a class="nav-link" href="{{url('about_us')}}">
                
                  About
                </a>
              </li>
			 
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin')}}">
                Admin Login
                </a>
              </li>
             

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="{{url('dashboardchart')}}">
               
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('quarter')}}">
                
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contactus')}}">
                
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('yearly')}}">
                
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>
		
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
		  <?php
 
$totalVisitors = 883000;
 
$newVsReturningVisitorsDataPoints = array(
	array("y"=> 519960, "name"=> "New Visitors", "color"=> "#E7823A"),
	array("y"=> 363040, "name"=> "Returning Visitors", "color"=> "#546BC1")
);
 
$newVisitorsDataPoints = array(
	array("x"=> 1420050600000 , "y"=> 33000),
	array("x"=> 1422729000000 , "y"=> 35960),
	array("x"=> 1425148200000 , "y"=> 42160),
	array("x"=> 1427826600000 , "y"=> 42240),
	array("x"=> 1430418600000 , "y"=> 43200),
	array("x"=> 1433097000000 , "y"=> 40600),
	array("x"=> 1435689000000 , "y"=> 42560),
	array("x"=> 1438367400000 , "y"=> 44280),
	array("x"=> 1441045800000 , "y"=> 44800),
	array("x"=> 1443637800000 , "y"=> 48720),
	array("x"=> 1446316200000 , "y"=> 50840),
	array("x"=> 1448908200000 , "y"=> 51600)
);
 
$returningVisitorsDataPoints = array(
	array("x"=> 1420050600000 , "y"=> 22000),
	array("x"=> 1422729000000 , "y"=> 26040),
	array("x"=> 1425148200000 , "y"=> 25840),
	array("x"=> 1427826600000 , "y"=> 23760),
	array("x"=> 1430418600000 , "y"=> 28800),
	array("x"=> 1433097000000 , "y"=> 29400),
	array("x"=> 1435689000000 , "y"=> 33440),
	array("x"=> 1438367400000 , "y"=> 37720),
	array("x"=> 1441045800000 , "y"=> 35200),
	array("x"=> 1443637800000 , "y"=> 35280),
	array("x"=> 1446316200000 , "y"=> 31160),
	array("x"=> 1448908200000 , "y"=> 34400)
);
 
?>
<div id="chartContainer" style="height: 500px; width: 100%;"></div>
</div>
		</div>
<button class="btn invisible" id="backButton">&lt; Back</button>
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
</body>
<style>
  #backButton {
	border-radius: 4px;
	padding: 8px;
	border: none;
	font-size: 16px;
	background-color: #2eacd1;
	color: white;
	position: absolute;
	top: 10px;
	right: 10px;
	cursor: pointer;
  }
  .invisible {
    display: none;
  }
</style>
<script>
window.onload = function () {
 
var totalVisitors = <?php echo $totalVisitors ?>;
var visitorsData = {
	"New vs Returning Visitors": [{
		click: visitorsChartDrilldownHandler,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "New vs Returning Visitors",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "doughnut",
		dataPoints: <?php echo json_encode($newVsReturningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
	}],
	"New Visitors": [{
		color: "#E7823A",
		name: "New Visitors",
		type: "column",
		xValueType: "dateTime",
		dataPoints: <?php echo json_encode($newVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
	}],
	"Returning Visitors": [{
		color: "#546BC1",
		name: "Returning Visitors",
		type: "column",
		xValueType: "dateTime",
		dataPoints: <?php echo json_encode($returningVisitorsDataPoints, JSON_NUMERIC_CHECK); ?>
	}]
};
 
var newVSReturningVisitorsOptions = {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "New VS Returning Visitors"
	},
	subtitles: [{
		text: "Click on Any Segment to Drilldown",
		backgroundColor: "#2eacd1",
		fontSize: 16,
		fontColor: "white",
		padding: 5
	}],
	legend: {
		fontFamily: "calibri",
		fontSize: 14,
		itemTextFormatter: function (e) {
			return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";  
		}
	},
	data: []
};
 
var visitorsDrilldownedChartOptions = {
	animationEnabled: true,
	theme: "light2",
	axisX: {
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2"
	},
	axisY: {
		gridThickness: 0,
		includeZero: false,
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2",
		lineThickness: 1
	},
	data: []
};
 
var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
chart.options.data = visitorsData["New vs Returning Visitors"];
chart.render();
 
function visitorsChartDrilldownHandler(e) {
	chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
	chart.options.data = visitorsData[e.dataPoint.name];
	chart.options.title = { text: e.dataPoint.name }
	chart.render();
	$("#backButton").toggleClass("invisible");
}
 
$("#backButton").click(function() { 
	$(this).toggleClass("invisible");
	chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
	chart.options.data = visitorsData["New vs Returning Visitors"];
	chart.render();
});
 
}
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</html>

