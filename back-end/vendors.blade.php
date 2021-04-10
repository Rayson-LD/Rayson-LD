@include('front-end.Layouts.header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="{{url('dashboard')}}">
              
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.amazon.in/">
                 
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('customers')}}">
                
                  Customers
                </a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="{{url('orders')}}">
				Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">
                
          Report
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
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
	
		
        <main class="login-form col-md-10">
    <div class="container" >
        <div class="row" style="margin-top:1%;">
            <div class="col-md-7">
			<h4 style="text-align:center;"> Add Vendors</h4>
                <div class="card">
             
                    <div class="card-body">
					<!--<div class="login-box-msg"></div>-->
                        <form id="loginscreen">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="vendor_id" id="vendor_id">
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Name</label>
                                
                                    <input type="text" id="vendor_name" class="form-control" name="vendor_name" placeholder="Please Enter Name" autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Order ID</label>
                                
                                    <input type="number" id="Order_ID" class="form-control" name="Order_ID" placeholder="Please Enter Order Id" autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">E-Mail Address</label>
                               
                                    <input type="email_address" id="vendor_email" class="form-control" name="vendor_email" placeholder="Please Enter E-Mail Address" required autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Phone Number</label>
                               
							<input type="number" id="vendor_number"  maxlength="13" class="form-control" name="vendor_number" placeholder="Please Enter Phone Number" required autofocus>
                                
                            </div>
							
                           <div class="form-group">
                                <label for="" class="col-form-label text-md-right">Address</label>
                               
                                    <input type="text" id="vendor_address" class="form-control" name="vendor_address" placeholder="D.no/Lane/Area" required autofocus>
                                
                            </div>
							
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">City</label>
                               
                                    <input type="text" id="vendor_city" class="form-control" name="vendor_city" placeholder="Please Enter City" required autofocus>
                               
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">State</label>
                              
                                    <input type="text" id="vendor_state" class="form-control" name="vendor_state" placeholder="Please Enter State" required autofocus>
                                
                            </div>
                            <div class="form-group">
                                <label for="" class="col-form-label text-md-right">Pin Code</label>
                                
                                    <input type="number" id="vendor_pin" class="form-control" name="vendor_pin" placeholder="Please Enter PinCode" required autofocus>
                               
                            </div>
                            
							
							
							

                            <div class="col-md-6 " style="margin-left:32%;margin-top:5%;">
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
	<div class="col-md-12" style="margin-top:5%;">
			<h4>View Vendor</h4>
			<table id="VendorTable" class="table table-bordered">
			<thead>
			<tr>
			<td>Sl.no</td>
			<td>Name</td>
			<td>Email</td>
			<td>Order ID</td>
			<td>phone</td>
			<td>Address</td>
			<td>State</td>
			<td>City</td>
			<td>PinCode</td>
			<td>Action</td>
			</tr>
			</thead>
			<tbody>
			<?php $i=1; ?>
			@foreach($data['vendors'] as $vendor)
			<tr>
			<td><?php echo $i; ?></td>
			<td>{{$vendor -> vendor_name}}</td>
			<td>{{$vendor -> vendor_email}}</td>
			<td>{{$vendor -> Order_ID}}</td>
			<td>{{$vendor -> vendor_phone}}</td>
			<td>{{$vendor -> address}}</td>
			<td>{{$vendor -> state}}</td>
			<td>{{$vendor -> city}}</td>
			<td>{{$vendor -> pin}}</td>
			<td><button class="btn btn-primary" onclick="EditVendor({{$vendor -> vendor_id}})"><i class="fa fa-edit"></i></button>
			<button class="btn btn-danger" onclick="DeleteVendor({{$vendor -> vendor_id}})"><i class="fa fa-trash"></i></button></td>
			</tr>
			<?php $i++; ?>
			@endforeach
			</tbody>
			</table>
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
						vendor_email:
						{
							required:true,
							email:true
						},
						Order_ID:{
							required:true
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
						vendor_number:
						{
							required:"Please Enter your Phone Number"
						},
						vendor_email:
						{
							required:"Please Enter your email",
							email:"Please Emter Valid Email"
						},
						Order_ID :
						{
							required:"Please Enter the Order ID"
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
			function EditVendor(EditId)
			{
				$.ajax({
					url:"EditVendor", //this url should be given in Route in web.php
					type:"get",
					data:'&EditId='+EditId,
					success:function(data)
					{
						var obj=JSON.parse(data);// passing data via JSON
						$('#vendor_name').val(obj.vendor_name);
						$('#Order_ID').val(obj.Order_ID);
						$('#vendor_number').val(obj.vendor_phone);
						$('#vendor_email').val(obj.vendor_email);
						$('#vendor_address').val(obj.address);
						$('#vendor_pin').val(obj.pin);
						$('#vendor_city').val(obj.city);
						$('#vendor_state').val(obj.state);
						$('#vendor_id').val(obj.vendor_id);
					}
					
				})
			}
			function DeleteVendor(DeleteId)
			{//swal is similar to alert but colorful
				swal({   
					title: "Are you sure?",   
					text: "Delete Vendor!",   
					type: "warning",   
					showCancelButton: true,   
					confirmButtonColor: "#DD6B55",   
					confirmButtonText: "Yes, Confirm !",   
					cancelButtonText: "No, cancel!",   
					closeOnConfirm: false,   
					closeOnCancel: false 
					}, function(isConfirm){   
					if (isConfirm) {     
						//swal("Sucessfully!", "Customer Deleted.", "success");   
						suredeletenow(DeleteId);
						} else {     
						swal("Cancelled", "Cancelled by User :)", "error");   
					} 
				}); 
				
			}
			function suredeletenow(DeleteId)
			{
				$.ajax({
					url:"DeleteVendor",
					type:"get",
					data:'&DeleteId='+DeleteId,
					success:function(data)
					{
						swal("Sucessful!", "Customer Deleted.", "success"); ;  
						location.reload();
					}
				})
			}
			$('#VendorTable').DataTable( {
					dom: 'Bfrtip',
					ordering: false,
					buttons: [
					 'excel', 'print'
					]
				});
			</script>
</html>