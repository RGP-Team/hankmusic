<!-- Services Section -->
<section>
    <div class="container">
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
		<div class="row">
			<div class="col-md-12">		
				<!-- start of content -->

					
					This is home content

				<!-- end of content -->
			</div>
		</div>
    </div>
</section>