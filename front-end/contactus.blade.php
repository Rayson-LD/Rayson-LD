@include('front-end.layouts.KushalHeader')
<img style="margin-left:10%;margin-top:10%;margin-bottom:10%;"src="images/maps.png" />

<h3 style="text-align:center;">Leave a Comment</h3>
 
<form id="loginscreen" role="form" enctype="multipart/form-data">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
						<input type="hidden" name="contact_id" id="contact_id">
<div class="form-group" style="width:50%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right">Name</label>
                               
                                    <input type="text" id="contact_name" class="form-control" name="contact_name" required placeholder="Please Enter your Name" autofocus>
                                
                            </div>
  <div class="form-group" style="width:50%;margin-left:30%;">
                                <label for="" class="col-form-label text-md-right" >Comments</label>
                               
                      <textarea class="form-control" class="form-control" id="contact_desc" name="contact_desc" required rows="3" placeholder="Your Comments"></textarea>
                                
                            </div>
  <div class="col-md-6 " style="margin-left:32%;margin-top:5%;">
  <button type="submit" class="login btn btn-outline-success my-2 my-sm-0" style="background-color:blue;color:white;">
                                   Submit
  </button>
                                
	</div>
  </form>
  <div class="col-md-7">
<h4>View Service Comments</h4>
			<table id="customerTable" class="table table-bordered">
			<thead>
			<tr>
			<td>Sl.no</td>
			<td>Title</td>
			<td>Description</td>
			<td>Edit</td>
			<td>Delete</td>
			</tr>
			</thead>
			<tbody>
			<?php $i=1;?>
			@foreach($data['contacts'] as $contact)
			<tr>
			<td><?php echo $i;?></td>
			<td>{{$contact->contact_name}}</td>
			<td>{{$contact->contact_desc}}</td>
			</tr>
			<?php $i++;?>
			@endforeach
			</tbody>
			</table>
			</div>
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
						contact_name:{
							required:true
						},
						
						contact_desc:
						{
							required:true
						}
						
					},
					messages:{
						contact_name:{
							required:"Enter Your Name"
						},
						
						contact_desc:
						{
							required:"Please give us your comments"
						}
					}
				});
				
				if($("#loginscreen").valid())
				{
					
					//$('.login-box-msg').html("<span style='color:black'>Loading. . .</span>");
					$.ajax({
					url:'add_comments',
					type:'POST',
					data:$("#loginscreen").serialize(),
					success:function(data)
					{
						alert("comments added successfully");   
						location.reload();
					}
				}); 
				}
			})
			
				
				</script>
</html>

