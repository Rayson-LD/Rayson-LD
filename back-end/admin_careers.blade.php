
@include('front-end.layouts.head')
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
                <a class="nav-link active" href="#">
              
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
             
			  <li class="nav-item">
                <a class="nav-link" href="{{url('admin_about')}}">
                
                  About
                </a>
              </li>
			 
              <li class="nav-item">
                <a class="nav-link" href="{{url('change_Password')}}">
                Sign in
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('customers')}}">
                 
                  Customers
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{url('vendors')}}">
                
                vendors
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
                <a class="nav-link" href="#">
               
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="login-form col-md-8">
    <div class="container" >
	
        <div class="row" style="margin-top:10%;">
		
           <div class="col-md-5">
			<h4> About Page</h4>
                <div class="card">
             
                    <div class="card-body">	
				
                        <form id="loginscreen" role="form" enctype="multipart/form-data">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="careers_id" id="careers_id">
							
		
<form id="loginscreen">
  <div class="form-group" style="margin-top:15%;">
  <label for="">Edit Description </label>
  <textarea class="form-control" rows="3" id="careers_description" name="careers_description" placeholder="add description..." name="carrers_description"></textarea>
</div>
  
    <div class="col-md-6">
                                <button type="submit" class="submit" style="background-color:blue;color:white;">
                                   Update
                                </button>
                            </div>          
                    </form>
                    </div>
                </div>
            </div>
			<div class="col-md-7">
<h4>View Descriptions</h4>
			<table id="customerTable" class="table table-bordered">
			<thead>
			<tr>
			<td>Sl.no</td>
			<td>Description</td>
			<td>Action</td>
			</tr>
			</thead>
			<tbody>
			<!--loop for displaying customers from database-->
			<?php $i=1;?><?php /*for increment of Sl.no*/?>
			@foreach($data['careers'] as $career)
			<tr>
			<td><?php echo $i;?></td>
			<td>{{$career->careers_description}}</td>
			</td><!--name from database as parameter-->
			<td><button class="btn btn-primary" onclick="EditDesc({{$career->career_id}})"><i class="fa fa-edit"></i></button><!--onclick of edit icon we call a function passing customer id-->

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
		  







<style>
.error{
	color:red;
}
</style>
<script src="js/jquery-3.4.1.min.js"></script>
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
			
			$('#loginscreen').on('submit',(function(e)
			{
			
				e.preventDefault();
				
				$("#loginscreen").validate({
					rules:{
						
						careers_description:{
							required:true
						}
						
					},
					messages:{
						
						careers_description:{
					required:"Please add Description"
						}
						
					}
				});
				if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'careers',
					type:'POST',
					//data:$("#loginscreen").serialize(),
					data: new FormData(this),
					contentType: false,       
					cache: false,             
					processData:false,
					success:function(data)
					{
						swal("Sucessfully!", "Added.", "success");   
						location.reload("careers.blade.php");
					}
				}); 
				}
				
			}));
			
			//Edit Function
			function EditDesc(EditId)
			{
				$.ajax({
					url:"EditDesc", //this url should be given in Route in web.php
					type:"get",
					data:'&EditId='+EditId,
					success:function(data)
					{
						var obj=JSON.parse(data);// passing data via JSON
						$('#careers_description').val(obj.careers_description);
						
						$('#careers_id').val(obj.career_id);
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
