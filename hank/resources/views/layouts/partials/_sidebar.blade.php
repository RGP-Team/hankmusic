<div class="col-md-3 left_col">
			  
			  <div class="left_col scroll-view">
			  
				<div class="clearfix"></div>
				<div class="profile">
				  <div class="profile_pic">
					<img id="profilepic" src="{{ url('/') }}/assets/profilepic/{{Auth::user()->user_pics}}" alt="..." class="img-circle profile_img">
						<form name="photo" enctype="multipart/form-data" action="" method="post" class="photoChangeForm">
							<input type="hidden" name="_token" id="_token" value="{!! csrf_token()!!}" />
		                	<input type="file" name="myfile" id="myfile">
		            	</form>
		                <a href="#" id="userPhotoChangebutton"><img style="width:40px; margin-left: 50%; width" src="{{url('/')}}/images/upload.png" /></a>
				  </div>
				  <div class="profile_info">
					<span>Welcome,</span>
					<h2>{!!Auth::user()->first_name!!}</h2>
				  </div>
				</div><br />

				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
				  <div class="menu_section">
				  
					<ul class="nav-menu">
						<li class="nav-menu-head main"><a href="{{ url('/adminhome') }}">MASTER DASHBOARD</a></li>
						<li class="nav-menu-head">ACCOUNT</li>
						<li class="nav-menu-items">
							<ul>
								<li><a href="{{ url('/admin/producer') }}">Producers</a></li>
								<li><a href="{{ url('/admin/artist') }}">Artists</a></li>
								<!-- <li><a href="{{ url('/admin/payout') }}">Payout Request List</a></li> -->
								
							</ul>
						</li>
						<li class="nav-menu-head">MUSIC</li>
						<li class="nav-menu-items">
							<ul>
								<li><a href="{{ url('/admin/pendingApproval') }}">Pending for Approval</a></li>
								<li><a href="{{ url('/admin/sold') }}">Sold</a></li>
								<!-- <li><a href="{{ url('/admin/banned') }}">Banned</a></li> -->
								
							</ul>
						</li>
					</ul>
					
				  </div>
				</div>
				
			  </div>
			</div>


<script type="text/javascript">

$('#userPhotoChangebutton').click(function () {
    $("input[id='myfile']").trigger('click');
});

   $("input#myfile").change(function () {
   		var path = '<?php echo url("/") ;?>/assets/profilepic/';
	    var file_data = $('#myfile').prop('files')[0]; 
	    var _token =  $("#_token").val();
	    var form_data = new FormData();                  
	    form_data.append('image', file_data);
	    form_data.append('_token', _token);                           
	    $.ajax({
		    url: 'uploadprofilepic', 
		    dataType: 'json',  
		    cache: false,
		    contentType: false,
		    processData: false,
		    data: form_data,                         
		    type: 'post',
		    success: function(resp){
		        $("#profilepic").attr('src', path+resp.user_pics);
		        window.location.reload();
		    }
	     });
      
     });
                           
 </script>
<style>
	#myfile{
		display:none;
	}
</style>





