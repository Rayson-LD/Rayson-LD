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
  background-image: url('images/vendorlogin.jpg');
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

		

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<main class="login-form justify-content-center ">
    <div class="cotainer justify-content-center " align="center" style="padding-top:7%;" >
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
			<h4 style="text-align:center;size:25%;"><u> Add Vendors</u></h4>
                <div class="card">
             
                    <div class="card-body">
					<!--<div class="login-box-msg"></div>-->
                        <form id="loginscreen">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="vendor_id" id="vendor_id">
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4" style="text-align:center;size:25%;">Name :</label>
									<div class="col-md-6">
                                    <input type="text" id="vendor_name" class="form-control" name="vendor_name" placeholder="Please Enter Name" autofocus>
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4" style="text-align:center;size:25%;">Order ID :</label>
                               <div class="col-md-6">
							<input type="number" id="Order_ID"  maxlength="13" class="form-control" name="Order_ID" placeholder="Please Enter Phone Number" required autofocus>
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4" style="text-align:center;size:25%;">E-Mail Address :</label>
								<div class="col-md-6">
                                    <input type="email_address" id="vendor_email" class="form-control" name="vendor_email" placeholder="Please Enter E-Mail Address" required autofocus>
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4" style="text-align:center;size:25%;">Phone Number :</label>
                               <div class="col-md-6">
							<input type="number" id="vendor_number"  maxlength="13" class="form-control" name="vendor_number" placeholder="Please Enter Phone Number" required autofocus>
                                </div>
                            </div>
							
                           <div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4" style="text-align:center;size:25%;">Address :</label>
								<div class="col-md-6">
                                    <input type="text" id="vendor_address" class="form-control" name="vendor_address" placeholder="D.no/Lane/Area" required autofocus>
                                </div>
                            </div>
							
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4" style="text-align:center;size:25%;">City :</label>
									<div class="col-md-6">
                                    <input type="text" id="vendor_city" class="form-control" name="vendor_city" placeholder="Please Enter City" required autofocus>
								</div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4" style="text-align:center;size:25%;">State :</label>
									<div class="col-md-6">
                                    <input type="text" id="vendor_state" class="form-control" name="vendor_state" placeholder="Please Enter State" required autofocus>
									</div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4" style="text-align:center;size:25%;">Pin Code :</label>
										<div class="col-md-6">
                                    <input type="number" id="vendor_pin" class="form-control" name="vendor_pin" placeholder="Please Enter PinCode" required autofocus>
                               </div>
                            </div>
                            
							
							
							

                            <div class="col-md-6 " style="margin-top:5%;">
                                <button type="submit" class="login btn btn-outline-success text-white my-2 my-sm-0" >
                                   Submit
                                </button>
                                
										</div>
									</form>
									</div>
								</div>
							  </div>
							  </div>
							  </div>
							  </main>
							  </body>
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
						vendor_name:{
							required:true
						},
						Order_ID:{
							required: true
						},
						vendor_email:
						{
							required:true,
							email:true
						},
						vendor_address:
						{
							required:true
						},
						vendor_pin:
						{
							required:true
						},	
						vendor_state:
						{
							required:true
						},
						vendor_city:
						{
							required:true
						},
						vendor_number:
						{
							required:true
						}
						
					},
					messages:{
						vendor_name:
						{
							required:"Please Enter your Name"
						},
						Order_ID:
						{
							required:"Please Enter Order ID"
						},
						vendor_number:
						{
							required:"Please Enter your Phone Number"
						},
						vendor_email:
						{
							required:"Please Enter your email",
							email:"Please Emter Valid Email"
						},
						vendor_address:
						{
							required:"Please Enter address line"
						},
						vendor_pin:
						{
							required:"Please Enter PinCode"
						},
						vendor_state:
						{
							required:"Please Enter your State"
						},
						vendor_city:
						{
							required:"Please Enter your City"
						}
					}
				});
					if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'insertVendor',
					type:'POST',
					data:$("#loginscreen").serialize(),
					success:function(data)
					{
						swal("Sucessfully!", "Customer Added.", "success");   
						location.reload();
					}
				}); 
				}
				
			})
			</script>