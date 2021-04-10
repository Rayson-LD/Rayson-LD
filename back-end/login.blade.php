<html>
<head>
<title>login</title>
<link rel="icon" href="images/icon.jpg" type="image/icon type">
<link rel="stylesheet" href="css/tarana.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
<style>
body {
  background-image: url('images/login.jpg');
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
<main class="login-form justify-content-center ">
    <div class="cotainer justify-content-center " align="center" style="padding-top:7%;" >
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Admin Login</div>
                    <div class="card-body">
					<div class="login-box-msg"></div>
                        <form id="loginscreen">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
							<div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" placeholder="Username" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" autofocus>
                                </div>
                            </div>
							 <div class="form-group row">
                                <a class="col-md-4 col-form-label text-md-right" href="{{url('change_Password')}}">Change Password ?</a>
                               
                            </div>
							

                            <div class="col-md-6 ">
                                <button type="submit" class="login btn btn-outline-success text-white my-2 my-sm-0" >
                                   Login
                                </button>
                                
                            </div>
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
						username:
						{
							required:true
						},
						password:
						{
							required:true
						}
						
					},
					messages:{
						username:
						{
							required:"Please Enter Username"
						},
						password:
						{
							required:"Please Enter Password"
						}
					}
				});
				if($("#loginscreen").valid())
				{
					$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'admin_login',
					type:'POST',
					data:$("#loginscreen").serialize(),
					success:function(data)
					{
						if(data==1)
						{
							window.location.assign("customers");
						
						}
						else if(data==404)
						{
							$('.login-box-msg').html("<span style='color:red'>User Account Blocked/Disabled Please Contact AAA.</span>");
						
						}
						else
						{
							$('.login-box-msg').html("<span style='color:red'>Invalid Username/Password. </span>");
						}
						
					},
					error: function(XMLHttpRequest, textStatus, errorThrown)
					{
						
						$('.login-box-msg').html("<span style='color:red'>server not connected</span>");
					} 
				}); 
				}
				
			})
			
			
		</script>
</html>
