<!-- Services Section -->
<?php
//print $test;
?>
    <div class="container prod-profile-settings-wrap">
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
        
        
        <div class="prod-profile-settings-full-wrap">
        
            <div class="row">
                <P class="prod-profile-settings-title">Profile Settings <a href="{{url('/')}}/featureprofile/{{$userinfo->id}}" style="font-size:16px;">View profile</a></P>
            	<hr class="prod-profile-settings-divider">
                
                 <div class="prod-profile-settingsInfo-wrap">
                <!--dd-->
                  <h4 class="edit-acc-setting-title">ACCOUNT INFORMATION</h4>
                  <form action="{!!url('producerAccountSettings')!!}" method="POST" enctype="multipart/form-data">
                    {!!csrf_field()!!}
                    <div class="row accInfo-inner-row">
                        <div class="col-md-6">	
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Username</div>
                            <div class="billing-info-input">
                              <input type="text" name="user_name" value="{{$userinfo->user_name}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Password</div>
                            <div class="billing-info-input">
                              <input type="password" name="password" value="" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Email Address</div>
                            <div class="billing-info-input">
                              <input type="text"  name="email" value="{{$userinfo->email}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->

                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">About</div>
                            <div class="billing-info-input">
                              <textarea name="bio" style="width:400px;height:90px;">{{$userinfo->bio}}</textarea>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <br>
                           <!--row end-->

                            <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Cover photo</div>
                            <div class="billing-info-input1">
                              <input type="file"  name="image">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                        </div>
                        
                        <div class="col-md-6">		
                            <!-- start of content -->
                
                            <!-- end of content -->
                        </div>
                    </div>
                
                
                <!--<hr class="userpayment-divider" />-->
                
                <div class="billing-info-cont">
                <!--dd-->
                <div class="row">
                    <h4 class="edit-acc-setting-title">BILLING INFORMATION</h4>
                    <div class="row accInfo-inner-row">
                        <div class="col-md-6">	
                        
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">First Name</div>
                            <div class="billing-info-input">
                              <input type="text" name="first_name" value="{{$userinfo->first_name}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Last Name</div>
                            <div class="billing-info-input">
                              <input type="text"  name="last_name" value="{{$userinfo->last_name}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Address</div>
                            <div class="billing-info-input">
                              <input type="text"  name="address" value="{{$userinfo->address}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">City</div>
                            <div class="billing-info-input">
                              <input type="text"  name="city" value="{{$userinfo->state}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Country</div>
                            <div class="billing-info-input">
                              <input type="text"  name="country" value="{{$userinfo->country_id}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">State/Province</div>
                            <div class="billing-info-input">
                              <input type="text"  name="state" value="{{$userinfo->state}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">ZIP/Postal Code</div>
                            <div class="billing-postal-input">
                              <input type="text" class="security-inpt" value="{{$userinfo->zip}}" name="zip" required maxlength="4">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Phone Number</div>
                            <div class="billing-info-input">
                              <input type="text"  name="phone" value="{{$userinfo->phone}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <button class="btn btn-primary btn-bilinfo-save-chng">Save Changes</button>
                        </div>
                        
                        <div class="col-md-6">		
                            <!-- start of content -->
                
                            <!-- end of content -->
                        </div>
                    </div>
                </div>
                </form>
                </div>
                </div>
                
                </div>
            </div>
        </div>
        
    </div>