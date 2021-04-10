 <html>
<head>
<title>login</title>
<link rel="icon" href="images/icon.jpg" type="image/icon type">
<link rel="stylesheet" href="css/tarana.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
<link rel="stylesheet" href="css/bootstrap-extend.css">
		<link href="/js/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
		<link href="/css/datatables.bootstrap.css" rel="stylesheet">
		<link href="/css/datatable_extra_fitting.css" rel="stylesheet">
<style>
body {
  background-image: url('images/animal.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body> 
<?php
$var=date('D');
$yr = date('M Y');
?><font color="white" size="50%"  > <?php echo $var . "<br>" .$yr; ?></font>
 <link rel="stylesheet" href="css/bootstrap-extend.css">
		<link href="/js/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
		<link href="/css/datatables.bootstrap.css" rel="stylesheet">
		<link href="/css/datatable_extra_fitting.css" rel="stylesheet">
		

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <main class="login-form justify-content-center ">
    <div class="cotainer justify-content-center " align="center" style="padding-top:7%;" >
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
			<h4 style="text-align:center;size:25%;"><u> Add Orders</u></h4>
                <div class="card">
                    <div class="card-body">
					<!--<div class="login-box-msg"></div>-->
                        <form id="loginscreen">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="si_no" id="si_no">
						<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Order ID</label>
                               
                                    <input type="text" id="Order_ID"  maxlength="255" class="form-control" name="Order_ID" placeholder="Please Enter the ID of the order" required autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Customer ID</label>
                               
                                    <input type="text" id="customer_ID"  maxlength="255" class="form-control" name="customer_ID" placeholder="Please Enter the ID of the customer" required autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Order Name</label>
                               
                                    <input type="text" id="Order_Name"  maxlength="255" class="form-control" name="Order_Name" placeholder="Please Enter the name of the order" required autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Cost</label>
                               
                                    <input type="integer" id="Cost" class="form-control" name="Cost" placeholder="Please Enter the Price of order" required autofocus>
                                
                            </div>
                            <div class="col-md-6" >
                                <button  class="login btn btn-outline-success my-2 my-sm-0" >
                                   Buy Now
                                </button>
                                
                            </div>
                    </form>
                    </div>
                </div>
            </div>
			</main>
<style>
.error{
	color:red;
}
</style>
<script src="js/jquery.min.js"></script>
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
			
			$('.login').click(function(e)
			{
				$.validator.addMethod("loginRegex", function(value, element) {
					return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
				}, " Valid Email required * .");
				e.preventDefault();
				
				$("#loginscreen").validate({
					rules:{
						Order_ID:{
							required:true
						},
						customer_ID:{
							required:true
						},
						Order_Name:{
							required:true
						},
						Cost:
						{
							required:true
						}
						
					},
					messages:{
						Order_ID:
						{
							required:"Please Enter the ID of the order"
						},
						customer_ID:
						{
							required:"Please Enter the ID of the customer"
						},
						Order_Name:
						{
							required:"Please Enter the name of the order"
						},
						Cost:
						{
							required:"Please Enter the price of the item"
						}
					}
				});
				if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'insertOrder',
					type:'POST',
					data:$("#loginscreen").serialize(),
					success:function(data)
					{
						swal("Sucessfully!", "Order Added.", "success");   
						location.reload();
					}
				}); 
				}
				})
	</script>
