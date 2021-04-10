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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  background-image: url('images/password.jpg');
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

	
		
        <main class="login-form justify-content-center">
		<div class="cotainer justify-content-center " align="center" style="padding-top:7%;" >
        <div class="row justify-content-center">
    <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Change Admin Password</div>
                    <div class="card-body">
					<div class="login-box-msg"></div>
					<!--<div class="login-box-msg"></div>-->
                        <form id="loginscreen">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						
							
							
                           <div class="form-group">
                                <label for="" class=" col-form-label text-md-right">Old Password</label>
									<div class="col-md-6">
                                    <input type="password" id="old_p" class="form-control" name="old_p" placeholder="Please Enter your old Password" required autofocus>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">New Password</label>
										<div class="col-md-6">
                                    <input type="password" id="new_p" class="form-control" name="new_p" placeholder="Please Enter Your New Password" required autofocus>
										</div>
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Confirm Password</label>
										<div class="col-md-6">
                                    <input type="password" id="confirm_p" class="form-control" name="confirm_p" placeholder="Please Confirm your Password" required autofocus>
									</div>
                                
                            </div>
                         
                            
							
							
							

                            <div class="col-md-6 ">
                                <button type="submit" class="login" style="background-color:blue;color:white;">
                                   Submit
                                </button>
                                
										</div>
									</form>
									</div>
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
	<script>
			
			$('.login').click(function(e)
			{
				$.validator.addMethod("loginRegex", function(value, element) {
					return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
				}, " Valid Email required * .");
				e.preventDefault();
				
				$("#loginscreen").validate({
					rules:{
						old_p:{
							required:true
						},
						new_p:
						{
							required:true
							
						},
					
						confirm_p:
						{
							required:true,
							equalTo:"#new_p"
						}
						
					},
					messages:{
						old_p:{
							required:"Please Enter You Old Password"
						},
						new_p:
						{
							required:"Please Enter You New Password"
							
						},
						confirm_p:
						{
							required:"Please Enter Confirm Password",
							equalTo:"Passwords Don't Match"
						}
					}
				});
					if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'resetPassword',
					type:'POST',
					data:$("#loginscreen").serialize(),
					success:function(data)
					{
						if(data==0)
						{
							alert("Wrong Old Password");
							
						}
						else
						{
							
						alert("Changed Password Successfully"); 
							
							location.reload();
						}
						
					}
				}); 
				}
				
			})
			
				
				</script>
				</html>