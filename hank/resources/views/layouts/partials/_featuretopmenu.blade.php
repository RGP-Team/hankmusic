<div class="row top-bg top-nav1 navbar-fixed-top">
				<div class="col-md-1">
					<div class="nav toggle top-btn-bg">
						@if(Auth::user())
							@if(Auth::user()->user_type == 'customer')
							<a href="{{ url('/useraccount') }}"><i class="fa fa-bars"></i></a>
							@endif
							@if(Auth::user()->user_type == 'producer')
							<a href="{{ url('/producerhome') }}"><i class="fa fa-bars"></i></a>
							@endif
							@if(Auth::user()->user_type == 'admin')
	      
							<a href="{{ url('/adminhome') }}"><i class="fa fa-bars"></i></a>
							@endif
							@if(Auth::user()->user_type == 'moderator')
	      
							<a href="{{ url('/moderatorhome') }}"><i class="fa fa-bars"></i></a>
							@endif
							@else
							<i class="fa fa-bars"></i>
							@endif
					</div>
				</div>
				<div class="col-md-2 top-logo-menu">
					<a href="{{url('/')}}"><strong>HANK</strong> &nbsp;M U S I C</a>
				</div>
				
				<div class="col-md-9 col-sm-12 col-xs-12">
					
					<ul class="nav navbar-nav pull-right">

						<li role="presentation" class="dropdown" style="margin-top: 10%;">
						  <!--<span>{{$profiles['producerInfo'][0]->first_name}} {{$profiles['producerInfo'][0]->last_name}}</span>-->
						  <span>{{Auth::user()->first_name}}&nbsp;{{Auth::user()->last_name}}</span>
						  <span class="dropdown-toggle shopping-cart" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer;">
							<span class="badge bg-blue" id="totalnotifications">5</span>
						  </span>
						  <!-- <span data-toggle="modal" data-target="#cartModal" style="cursor:pointer;">
								<i class="fa fa-shopping-cart"></i> <span class="cart-text">Cart</span> &nbsp;
							</span>
						  <ul id="topmenuafterlogin" class="dropdown-menu list-unstyled msg_list" role="menu">
							
						  </ul> -->
						</li>
						
						<li class="">
						  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<!--<img src="{{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}}" alt="">-->
							@if(Auth::user()->user_pics)
                                
                                    <img src="{{ url('/') }}/assets/profilepic/{{Auth::user()->user_pics}}" alt="">
                            @else
                                    <img src="{{ url('/') }}/images/profile.jpg" alt="">
                            @endif
							
							<span class=" fa fa-sort-down"></span>
						  </a>
						  <ul class="dropdown-menu dropdown-usermenu pull-right">
							<li><a href="{{ url('/') }}/producer/settings"> Profile</a></li>
							<li style="display:none;">
							  <a href="javascript:;">
								<span class="badge bg-red pull-right">50%</span>
								<span>Settings</span>
							  </a>
							</li>
							<!--<li><a href="javascript:;">Help</a></li>-->
							<li><a href="{!!url('userLogout')!!}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
						  </ul>
						</li>
						
					</ul>
					
					
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
                                            <div id="products" class="row list-group">
                                           
                                              
        								 	</div>
                                         
                                         <div class="cart-total-cont">TOTAL : <span class="cart-title-item" id="totalAmount"></span><span class="cart-title-item">$</span></div>
                                         
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