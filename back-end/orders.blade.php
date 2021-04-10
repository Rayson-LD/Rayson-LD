
@include('front-end.layouts.header')
<link rel="stylesheet" href="css/bootstrap-extend.css">
		<link href="/js/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
		<link href="/css/datatables.bootstrap.css" rel="stylesheet">
		<link href="/css/datatable_extra_fitting.css" rel="stylesheet">
		

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="#">
              
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.amazon.in/">
                 
                  Products
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link " href="{{url('customers')}}">
                 
                  Customers
                </a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="{{url('vendors')}}">
                Vendors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                
                  Reports
                </a>
              </li>
              
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="{{url('dashboard')}}">
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
			<h4> Add Orders</h4>
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
			<h4>View Orders</h4>
			<table id="OrderTable" class="table table-bordered">
			<thead>
			<tr>
			<td>SI.No</td>
			<td>Order ID</td>
			<td>Customer ID</td>
			<td>Order Name</td>
			<td>Cost</td>
			
			<td>Update</td>
			<td>Delete</td>
			</tr>
			</thead>
			<tbody>
			<!--loop for displaying customers from database-->
			<?php $i=1;?>
			@foreach($data['orders'] as $ord)
			<tr>
			<td><?php echo $i;?></td>
			<td>{{$ord->Order_ID}}</td>
			<td>{{$ord->customer_ID}}</td>
			<td>{{$ord->Order_Name}}</td>
			<td>{{$ord->Cost}}</td>
			
			<!--name from database as parameter-->
			<td><button class="btn btn-primary" onclick="editOrder({{$ord->si_no}})"><i class="fa fa-edit"></i></button><!--onclick of edit icon we call a function passing customer id-->
			</td>
			<td>
				<button class="btn btn-danger" onclick="deleteOrder({{$ord->si_no}})"><i class="fa fa-trash"></i></button><!--onclick of delete icon we call a function passing customer id-->
			</td>
			</tr>
			<?php $i++;?>
			@endforeach
			</tbody>
			</table id="OrderTable" class="table table-bordered">
			<table>
			<thead>
			<tr>
			
			</tr>
			</thead>
			<tbody>
			
			<tr>
			
			</tr>
			
			</tbody>
			</table>
			</div>
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
				if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'get_customers',
					type:'GET',
					data:$("#loginscreen").serialize(),
					success:function(data)
					{
						swal("Sucessfully!", "Order Added.", "success");   
						location.reload();
					}
				}); 
				}
				
			})
			
			//Edit Function
			function editOrder(EditId)
			{
				$.ajax({
					url:"editOrder", //this url should be given in Route in web.php
					type:"get",
					data:'&EditId='+EditId,
					success:function(data)
					{
						var obj=JSON.parse(data);
						$('#customer_ID').val(obj.customer_ID);// passing data via JSON
						$('#Order_ID').val(obj.Order_ID);//#cust_name is id given for input of customer name, customer_name is name from database
						//when you click edit, using particular customer id it displays data from database in place of that id 
						$('#Order_Name').val(obj.Order_Name);
						$('#Cost').val(obj.Cost);
						$('#si_no').val(obj.si_no);
					}
					
				})
			}
			
			//Delete Function
			function deleteOrder(DeleteId)
			{//swal is similar to alert but colorful
				swal({   
					title: "Are you sure?",   
					text: "Delete Order!",   
					type: "warning",   
					showCancelButton: true,   
					confirmButtonColor: "#DD6B55",   
					confirmButtonText: "Yes, Confirm !",   
					cancelButtonText: "No, cancel!",   
					closeOnConfirm: false,   
					closeOnCancel: false 
					}, function(isConfirm){   
					if (isConfirm) {     
						swal("Sucessfully!", "Order Deleted.", "success");   
						suredeletenow(DeleteId);
						} else {     
						swal("Cancelled", "Cancelled by User :)", "error");   
					} 
				}); 
				
			}
			function suredeletenow(DeleteId)
			{
				$.ajax({
					url:"deleteOrder",
					type:"get",
					data:'&DeleteId='+DeleteId,
					success:function(data)
					{
						swal("Sucessful!", "Order Deleted.", "success"); ;  
						location.reload();
					}
				})
			}
			
			//Data Table
			$('#OrderTable').DataTable( {
					dom: 'Bfrtip',
					ordering: false,
					buttons: [
					 'excel', 'print'
					]
				});
		</script>
</html>
