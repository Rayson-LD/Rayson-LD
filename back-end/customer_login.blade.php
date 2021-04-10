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
  background-image: url('images/customerlogin.jpg');
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
                    <div class="card-header">Customer Login</div>
                    <div class="card-body">
					<div class="login-box-msg"></div>
                        <form id="loginscreen">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="si_no" id="si_no">
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4">ID</label>
									<div class="col-md-6">
                                    <input type="text" id="customer_ID" class="form-control" name="customer_ID" placeholder="Please Enter Customer ID" autofocus>
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4">Name :</label>
									<div class="col-md-6">
                                    <input type="text" id="cust_name" class="form-control" name="cust_name" placeholder="Please Enter Name" autofocus>
									</div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4">Phone Number :</label>
									<div class="col-md-6">
                                    <input type="number" id="cust_number" minlength="10" maxlength="13" class="form-control" name="cust_number" placeholder="Please Enter Phone Number" required autofocus>
									</div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4">E-Mail Address :</label>
									<div class="col-md-6">
                                    <input type="email_address" id="cust_email" class="form-control" name="cust_email" placeholder="Please Enter E-Mail Address" required autofocus>
									</div>
                            </div>
                           <div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4">Address 1 :</label>
									<div class="col-md-6">
                                    <input type="text" id="cust_address1" class="form-control" name="cust_address1" placeholder="D.no/Lane/Area" required autofocus>
									</div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4">Address 2 :</label>
										<div class="col-md-6">
                                    <input type="text" id="cust_address2" class="form-control" name="cust_address2" placeholder="Landmark" required autofocus>
										</div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4">City :</label>
									<div class="col-md-6">
                                    <input type="text" id="cust_city" class="form-control" name="cust_city" placeholder="Please Enter City" required autofocus>
									</div>
                            </div>
							<div class="form-group row">
                                <label for="" class="col-form-label text-md-right col-md-4">State :</label>
									<div class="col-md-6">
                                    <input type="text" id="cust_state" class="form-control" name="cust_state" placeholder="Please Enter State" required autofocus>
									</div>
                            </div>
                            
                            
							
							
							

                            <div class="col-md-6">
                                <button type="submit" class="login  btn btn-outline-success text-white my-2 my-sm-0" >
                                   Submit
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
						customer_ID:{
							required:true
						},
						cust_name:{
							required:true
						},
						cust_email:
						{
							required:true,
							email:true
						},
						cust_address1:
						{
							required:true
						},
						cust_address2:
						{
							required:true
						},	
						cust_state:
						{
							required:true
						},
						cust_city:
						{
							required:true
						},
						cust_number:
						{
							required:true
						}
						
					},
					messages:{
						customer_ID:
						{
							required:"Please Enter ID of the customer"
						},
						cust_name:
						{
							required:"Please Enter your Name"
						},
						cust_number:
						{
							required:"Please Enter your Phone Number"
						},
						cust_email:
						{
							required:"Please Enter your email",
							email:"Please Emter Valid Email"
						},
						cust_address1:
						{
							required:"Please Enter address1 line"
						},
						cust_address2:
						{
							required:"Please Enter address2 line"
						},
						cust_state:
						{
							required:"Please Enter your State"
						},
						cust_city:
						{
							required:"Please Enter your City"
						}
					}
				});
				if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'insertCustomer',
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