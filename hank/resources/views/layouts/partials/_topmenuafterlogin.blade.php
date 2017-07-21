<div class="row top-bg top-nav1 navbar-fixed-top">
				<div class="col-md-1">
					<div class="nav toggle top-btn-bg">
					
					@if(Auth::check())
						@if(Auth::user()->user_type == 'customer')
						<a href="{{ Auth::check() ? url('/useraccount') : ''}}"><i class="fa fa-bars"></i></a>
						@endif
					@endif

					@if(Auth::check())
						@if(Auth::user()->user_type == 'producer')
						<a href="{{ Auth::check() ? url('/producerhome'): '' }}"><i class="fa fa-bars"></i></a>
						@endif
					@endif

					@if(Auth::check())
						@if(Auth::user()->user_type == 'admin')
      
						<a href="{{ Auth::check() ? url('/adminhome'): '' }}"><i class="fa fa-bars"></i></a>
						@endif
					@endif

					@if(Auth::check())
						@if(Auth::user()->user_type == 'moderator')
      
						<a href="{{ Auth::check() ? url('/moderatorhome'): '' }}"><i class="fa fa-bars"></i></a>
						@endif
					@endif
						
					@if(!Auth::check())
					<a href="#"><i class="fa fa-bars"></i></a>
					@endif
					</div>
				</div>
				<div class="col-md-2 top-logo-menu">
					<strong>HANK</strong> &nbsp;M U S I C
				</div>
				<div class="col-md-4 top-logo-menu">
					<ul class="top-menu">
						<li><a href="{{url('/')}}">Browse</a></li>
						<!-- <li><a href="#">Playlist</a></li> -->
						<li><a href="{{url('/')}}/user/faq">FAQ</a></li>
						<!--<li><a href="{{url('/')}}/user/blog">Blog</a></li>-->
						<li><a href="{{url('/')}}/user/contactus">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 top-logo-menu">
		          <div class="search-container">
		            <form role="form" method="POST" action="{{url('/')}}/search-results">
		              <div class="search">
		                <span class="fa fa-search"></span>
		                <input class="search-box" name="keyword" placeholder="Search" id="filter" value="">
		              </div>
		              {{ csrf_field() }}
		            </form>
		          </div>
		        </div>
				
				<div class="col-md-2 col-sm-12 col-xs-12">
					@if(Auth::check())
					<ul class="nav navbar-nav">

					 @if(Auth::user()->user_type == 'producer')
						<li role="presentation" class="dropdown" style="margin-top: 18%;">
					 @else
					 	<li role="presentation" class="dropdown" style="margin-top: 9%;">
					 @endif

						  @if(Auth::user()->user_type == 'moderator')

						  @elseif(Auth::user()->user_type == 'producer')
						  <span class="dropdown-toggle shopping-cart" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer;">
							<span class="badge bg-blue" id="totalnotifications" style="display:none;"></span>
						  </span>


						<a href="{{url('/')}}/producerhome"  style="color: #73879C!important;
						    margin-left: 3px!important;
						    margin-top: -35px;
						    margin-right: -30px;">
						    <i class="fa fa-cloud-upload" style="color:#73879C!important;"></i> 
						    <span class="cart-text">Upload Song</span>&nbsp;&nbsp;
    						
								
							</a>
							@else
							<span class="dropdown-toggle shopping-cart" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer;">
							<span class="badge bg-blue" id="">
							@if(Auth::check())
								@php($cart = \App\Cart::where('user_id',Auth::user()->id)->get())
								{{$cart->count()}}
							@endif
							</span>
						  </span>
						  <span data-toggle="modal" data-target="#cartModal" style="cursor:pointer;">
								<i class="fa fa-shopping-cart"></i> <span class="cart-text">Cart</span> &nbsp;
							</span>
						  @endif
						  
						  <ul id="topmenuafterlogin" class="dropdown-menu list-unstyled msg_list" role="menu">
							
						  </ul>
						</li>
						
						<li class="">
						  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						  	@if(Auth::user()->user_pics)
						  		
						  			<img src="{{ url('/') }}/assets/profilepic/{{Auth::user()->user_pics}}" alt="">
						  	@else
						  			<img src="{{ url('/') }}/images/profile.jpg" alt="">
						  	@endif
							
							<span class=" fa fa-sort-down"></span>
						  </a>
						  <ul class="dropdown-menu dropdown-usermenu pull-right">
							<li>
								<!-- <a href="javascript:;"> Profile</a> -->
								@if(Auth::user()->user_type == 'customer')
								<a href="{{ url('/useraccount') }}">Profile</a>
								@endif
								@if(Auth::user()->user_type == 'producer')
								<a href="{{ url('/producerhome') }}">Profile</i></a>
								@endif
								@if(Auth::user()->user_type == 'admin')
		      
								<a href="{{ url('/adminhome') }}">Profile</i></a>
								@endif
								@if(Auth::user()->user_type == 'moderator')
		      
								<a href="{{ url('/moderatorhome') }}">Profile</i></a>
								@endif
							</li>
							<li>
							  <!-- <a href="javascript:;"></a> -->
								<span class="badge bg-red pull-right col-md-3" style="display:none;">50%</span>
								<span class="col-md-9" style="display:none;">
									@if(Auth::user()->user_type == 'customer')
									<a href="{{ url('/useraccount') }}">Settings</a>
									@endif
									@if(Auth::user()->user_type == 'producer')
									<a href="{{ url('/producerhome') }}">Settings</i></a>
									@endif
									@if(Auth::user()->user_type == 'admin')
			      
									<a href="{{ url('/adminhome') }}">Settings</i></a>
									@endif
									@if(Auth::user()->user_type == 'moderator')
			      
									<a href="{{ url('/moderatorhome') }}">Settings</i></a>
									@endif
								</span>
							</li>
							<!-- <li><a href="javascript:;">Help</a></li> -->
							<li><a href="{!!url('userLogout')!!}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
						  </ul>
						</li>
						
					</ul>
					@endif
					
				</div>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script>
			jQuery("#menu_toggle").on("click",function(){
				if (!jQuery('.scroll-view').is(':visible'))
					jQuery('.main_container .top_nav, .main_container .right_col').css('margin-left', '230px');
				
				jQuery('.scroll-view').toggle('slide', function (){
					if (!jQuery('.scroll-view').is(':visible')) {
						jQuery('.main_container .top_nav, .main_container .right_col').css('margin-left', '0');
					}
				});
			});
			</script>


			<div class="row withdraw-earnings-container">
                        <div class="col-md-12">	
                        	
                            <!--cart container start-->
                            <!-- <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#cartModal"> Cart Modal</button> -->
                            <!-- Modal -->
                            <div class="modal right fade cartModal" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                        
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel2">Cart</h4>
                                        </div>
                        
                                        <div class="modal-body">
                                        
                                            <!--cart all item start-->
                                            @if(Auth::check())
											@php($cart = \App\Cart::where('user_id',Auth::user()->id)->get())
												@if($cart->count() == 0)
													<p style="text-align: center;margin-top: 42px;font-size: 20px;">Your cart is empty</p>
												@else
													<div id="products" class="row list-group">

													@foreach($cart as $item)
                                           				<!--cart Item start-->
		                                                <div class="item  col-xs-12 col-lg-12">
		                                                    <div class="thumbnail cstm-cart-tumbnail">
		                                                    @if($item->music->cover_path)
						                                        <img class="group list-group-image cart-thubnail-cont" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$item->music->id}}/{{$item->music->cover_path}}" alt="" />
						                                    @else
						                                        <img class="group list-group-image cart-thubnail-cont" src="{{ url('/') }}/hank/resources/audio/musiccover/blank.jpg"/>
						                                    @endif
		                                                        
		                                                        <div class="caption cart-caption-cont">
		                                                            <div class="cart-title-cont">
		                                                                <h3 class="group inner list-group-item-heading">{{$item->music->title}}</h3>
		                                                                <p class="group inner list-group-item-text cart-band-name" style="display:none;">Gorillaz Band</p>
		                                                            </div>
		                                                            <div class="cart-clear-btn">
		                                                            <a href="{{url('/')}}/cart/remove/{{$item->id}}" ><i class="fa fa-trash trash-icon" aria-hidden="true"></i></a>
		                                                                
		                                                            </div>
		                                                            <div class="row">
		                                                                <div class="col-xs-12 col-md-6">
		                                                                    <p class="lead cart-product-amount">
		                                                                    <?php $total[] = $item->music->price; ?><?php echo "$".number_format($item->music->price,2,'.',','); ?></p>
		                                                                </div>
		                                                                <div class="col-xs-12 col-md-6">
		                                                                    
		                                                                </div>
		                                                            </div>
		                                                        </div>
		                                                    </div>
		                                                </div>
		                                                <!--cart Item end-->
                                              		@endforeach
        								 			</div>
        								 			<div class="payment_form">
			                                         <div class="cart-total-cont">TOTAL : <span class="cart-title-item" id="totalAmount"></span><span class="cart-title-item"><?php
                                $total_sum = array_sum($total);
                                echo "$ ".number_format($total_sum,2,'.',',');
                                ?></span></div>
			                                         

			                                         <div class="input-group">
										                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
										                <select name="payment_type" id="payment_type" class="form-control">
										                    <option value="paypal">Paypal</option>
										                    <option value="bank">Bank Transfer</option>
										                </select>
										            </div>

			                                         <form action="{{url('payment')}}" method="POST" id="paymentSubmit">
			                                         	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
			                                         	<input type="submit" id="submitPayment" class="btn btn-primary pay-now-btn" value="Pay Now"/>
			                                     	</form>
			                                         </div>
												@endif
											@endif
                                                                                        
                                            
                                         
                                         <!--cart all item end-->
                                        </div>
                        
                                    </div><!-- modal-content -->
                                </div><!-- modal-dialog -->
                            </div><!-- modal -->
                            <!--cart container end-->
                            
                           
                        </div>
                    </div>

                    <script>
                    	$("#submitPayment").click(function(){
                    		var paymentType = $("#payment_type").val();
                    		if(paymentType == 'paypal'){
                    			return true;
                    		}
                    		if(paymentType == 'bank'){
                    			return false;
                    		}

                    	});
                    </script>