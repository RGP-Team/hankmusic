<!-- Services Section -->
<?php
//print $test;
?>
    <div class="container prod-upload-full-wrap">
		@if (session()->has('success_message'))
			<div class="alert alert-success">
				{{ session()->get('success_message') }}
			</div>
		@endif
		@if (count($errors->all()))
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
		@else
			@if (session()->has('error_message'))
			<div class="alert alert-danger">
				{{ session()->get('error_message') }}
			</div>
			@endif
		@endif
        <div class="prod-upload-main-wrap">
          <form action="{!!url('upload')!!}" method="POST" enctype="multipart/form-data" name="ajax_form">
            {!!csrf_field()!!}
           
            <div class="row">
                <P class="prod-upload-track-title">Upload Track</P>
            	<hr class="prod-upload-track-divider">
                
                 <div class="prod-upload-trackInfo-wrap">
        
                    <div class="row accInfo-inner-row">
                    	<div class="col-md-2">		
                            <!-- start of content -->
                
                            <!-- end of content -->
                        </div>
                        <div class="col-md-8">	
                          
                          <div class="alert alert-success">
                            <h4>File Successfully Uploaded!</h4>
                            <p>Your track is now awaiting approval. Please allow 24-48hrs for approval</p>
                          </div>
                        </div>
                        
                        <div class="col-md-2">		
                            <!-- start of content -->
                
                            <!-- end of content -->
                        </div>
                    </div>
                
                
                </div>
                </div>
              </form>
                </div>
        
    </div>
    
    <script type="text/javascript">
      $(function(){
        setTimeout(function(){
          window.location.href = "{{url('/')}}/producerhome";
        },3000);
      });
    </script>