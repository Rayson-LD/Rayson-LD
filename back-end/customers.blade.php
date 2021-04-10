
@include('front-end.layouts.header')
<link rel="stylesheet" href="css/bootstrap-extend.css">
		<link href="/js/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
		<link href="/css/datatables.bootstrap.css" rel="stylesheet">
		<link href="/css/datatable_extra_fitting.css" rel="stylesheet">
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
                <a class="nav-link" href="https://www.amazon.in/">
                 
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('vendors')}}">
                
                  Vendors
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
		
        
        
        <main class="login-form col-md-10">
    <div class="container" >
        <div class="row" style="margin-top:10%;">
		
            <div class="col-md-5">
			<h4> Add Customer</h4>
                <div class="card">
             
                    <div class="card-body">
					<!--<div class="login-box-msg"></div>-->
                        <form id="loginscreen">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="si_no" id="si_no">
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">ID</label>
                                
                                    <input type="text" id="customer_ID" class="form-control" name="customer_ID" placeholder="Please Enter Customer ID" autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Name</label>
                                
                                    <input type="text" id="cust_name" class="form-control" name="cust_name" placeholder="Please Enter Name" autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Phone Number</label>
                               
                                    <input type="number" id="cust_number" minlength="10" maxlength="13" class="form-control" name="cust_number" placeholder="Please Enter Phone Number" required autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">E-Mail Address</label>
                               
                                    <input type="email_address" id="cust_email" class="form-control" name="cust_email" placeholder="Please Enter E-Mail Address" required autofocus>
                                
                            </div>
                           <div class="form-group">
                                <label for="" class="col-form-label text-md-right">Address 1</label>
                               
                                    <input type="text" id="cust_address1" class="form-control" name="cust_address1" placeholder="D.no/Lane/Area" required autofocus>
                                
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">Address 2</label>
                                
                                    <input type="text" id="cust_address2" class="form-control" name="cust_address2" placeholder="Landmark" required autofocus>
                               
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">City</label>
                               
                                    <input type="text" id="cust_city" class="form-control" name="cust_city" placeholder="Please Enter City" required autofocus>
                               
                            </div>
							<div class="form-group">
                                <label for="" class="col-form-label text-md-right">State</label>
                              
                                    <input type="text" id="cust_state" class="form-control" name="cust_state" placeholder="Please Enter State" required autofocus>
                                
                            </div>
                             <div class="col-md-6">
                                <button type="submit" class="login" style="background-color:blue;color:white;">
                                   Submit
                                </button>
                                
                            </div>
                                
                           
                    </form>
                    </div>
                </div>
            </div>
			
							  
			<div class="col-md-7">
			<h4>View Customers</h4>
			<table id="customerTable" class="table table-bordered">
			<thead>
			<tr>
			<td>Si.No</td>
			<td>Customer ID</td>
			<td>Name</td>
			<td>Phone Number</td>
			<td>Email</td>
			<td>Address 1</td>
			<td>Address 2</td>
			<td>City</td>
			<td>State</td>
			<td>Action</td>
			</tr>
			</thead>
			<tbody>
			<!--loop for displaying customers from database-->
			<?php $i=1;?><?php /*for increment of Sl.no*/?>
			@foreach($data['customers'] as $cust)
			<tr>
			<td><?php echo $i;?></td>
			<td>{{$cust->customer_ID}}</td>
			<td>{{$cust->customer_name}}</td>
			<td>{{$cust->customer_number}}</td>
			<td>{{$cust->customer_email}}</td>
			<td>{{$cust->address1}}</td>
			<td>{{$cust->address2}}</td>
			<td>{{$cust->city}}</td>
			<td>{{$cust->state}}</td><!--name from database as parameter-->
			<td><button class="btn btn-primary" onclick="EditCustomer({{$cust->si_no}})"><i class="fa fa-edit"></i></button><!--onclick of edit icon we call a function passing customer id-->
				<button class="btn btn-danger" onclick="DeleteCustomer({{$cust->si_no}})"><i class="fa fa-trash"></i></button><!--onclick of delete icon we call a function passing customer id-->
			</td>
			</tr>
			<?php $i++;?>
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
			
			//Edit Function
			function EditCustomer(EditId)
			{
				$.ajax({
					url:"EditCustomer", //this url should be given in Route in web.php
					type:"get",
					data:'&EditId='+EditId,
					success:function(data)
					{
						var obj=JSON.parse(data);
						$('#customer_ID').val(obj.customer_ID);// passing data via JSON
						$('#cust_name').val(obj.customer_name);//#cust_name is id given for input of customer name, customer_name is name from database
						//when you click edit, using particular customer id it displays data from database in place of that id 
						$('#cust_number').val(obj.customer_number);
						$('#cust_email').val(obj.customer_email);
						$('#cust_address1').val(obj.address1);
						$('#cust_address2').val(obj.address2);
						$('#cust_city').val(obj.city);
						$('#cust_state').val(obj.state);
						$('#cust_id').val(obj.customer_id);
						$('#si_no').val(obj.si_no);
					}
					
				})
			}
			
			//Delete Function
			function DeleteCustomer(DeleteId)
			{//swal is similar to alert but colorful
				swal({   
					title: "Are you sure?",   
					text: "Delete Customer!",   
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
					url:"DeleteCustomer",
					type:"get",
					data:'&DeleteId='+DeleteId,
					success:function(data)
					{
						swal("Sucessful!", "Customer Deleted.", "success"); ;  
						location.reload();
					}
				})
			}
			
			//Data Table
			$('#customerTable').DataTable( {
					dom: 'Bfrtip',
					ordering: false,
					buttons: [
					 'excel', 'print'
					]
				});
		</script>
</html>
