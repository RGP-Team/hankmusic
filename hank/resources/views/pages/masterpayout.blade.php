<!-- Services Section -->
<?php
//print $test;
?>
<section>
    <div class="container producer-home-wrapper">
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
        <div class="mastr-music-sold-wrap">
            <div class="row">
                <div class="row mastr-payout-row">
                
                	<div class="col-md-4">	
                      <!--purchased music list start-->
                      <div class="mastr-best-selling-cont-list">
                        <div class="mastr-best-selling-cover">
                          <img src="../hank/img/led-zeppelin-band.png" style="width:100%"/>
                          
                        </div>
                        <ul class="best-selling-ul-cont">
                          <li><span class="best-selling-title">Led Zeppelin</span><span class="glyphicon glyphicon-envelope" style="margin-left:10px; "></span></li>
                          <li><span class="best-selling-country">London</li>
                          <li>
                               <!-- sold container start -->
                               <div class="best-selling-earning-cont">
                                    <div class="best-selling-icon-cont">
                                      <span class="best-selling-earning-icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="best-selling-earning-amount-cont">
                                      <div class="best-selling-amount-cont">
                                        <p class="earning-count"><span class="count selling-sold-cont-offset">912</span></p>
                                        
                                      </div>
                                    </div>
                                </div>
                                <!-- sold container end -->
                                
                                <!-- view container start -->
                               <div class="best-selling-earning-cont">
                                    <div class="best-selling-icon-cont">
                                      <span class="best-selling-earning-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="best-selling-earning-amount-cont">
                                      <div class="best-selling-amount-cont">
                                        <p class="earning-count"><span class="count">12,987</span></p>
                                      </div>
                                    </div>
                                </div>
                                <!-- view container end -->
                          </li>
                        </ul>
                      </div>
                      <!--purchased music list end-->
                    </div>
                
                	<div class="col-md-8">	
                    	
                       
                        
                        <!-- Music sold container start -->
                       <div class="mastr-payout-sold-cont">
                         <div class="selling-icon-cont">
                              <span class="chart-icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                            </div>
                            <div class="earning-amount-cont">
                              <div class="sold-cont">
                             <p class="earning-count"><span class="count">2</span></p>
                                <p class="earning-txt"><span class="count-txt">Track Sold</span></p>
                              </div>
                            </div>
                        </div>
                        <!-- Music sold container end -->
                        
                       <!-- earning container start -->
                       <div class="mastrPayout-earning-cont">
                         <div class="selling-icon-cont">
                              <span class="earning-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                            </div>
                            <div class="earning-amount-cont">
                              <div class="amount-cont">
                             <p class="earning-count"><span class="count">18.75</span></p>
                                <p class="earning-txt"><span class="count-txt">Earnings</span></p>
                              </div>
                            </div>
                        </div>
                        <!-- earning container end -->
                        
                    </div>
                
                </div>
            </div>
        </div>
        
        <!--master payout tab start-->
        <div class="mastr-payout-tab-wrap">
        	<ul class="nav nav-tabs">
              <li class="mastr-payout-tab"><a data-toggle="tab" href="#sales">Sales</a></li>
              <li class="mastr-payout-tab active mastr-payout-tab-active"><a data-toggle="tab" href="#payout">Payment History</a></li>
              <li class="mastr-payout-tab"><a data-toggle="tab" href="#profileInfo">Profile Information</a></li>
            </ul>
            
            <div class="tab-content">
              <div id="sales" class="tab-pane mastr-payout-tab-pane">
                <div class="table-responsive mastr-payment-history-table">          
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th class="mastr-payment-tble-blank-clm"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          
                          <tr>
                            <td>Jun 5, 2017</td>
                            <td>Paid</td>
                            <td>$188.95</td>
                            <td>Paypal</td>
                            <td></td>
                          </tr>
                          
                          <tr>
                            <td>Jun 5, 2017</td>
                            <td>Paid</td>
                            <td>$188.95</td>
                            <td>Paypal</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                <div class="clearfix"></div>
              </div>
              <div id="payout" class="tab-pane mastr-payout-tab-pane fade in active">
                <div class="table-responsive mastr-payment-history-table">          
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th class="mastr-payment-tble-blank-clm"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          
                          <tr>
                            <td>Jun 5, 2017</td>
                            <td>Paid</td>
                            <td>$188.95</td>
                            <td>Paypal</td>
                            <td></td>
                          </tr>
                          
                          <tr>
                            <td>Jun 5, 2017</td>
                            <td>Paid</td>
                            <td>$188.95</td>
                            <td>Paypal</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
               <div class="clearfix"></div>
              </div>
              <div id="profileInfo" class="tab-pane mastr-payout-tab-pane fade">
                <h3>Profile Information</h3>
                <p>Some content in Profile Information.</p>
                <div class="clearfix"></div>
              </div>
            </div>
        </div>
        <!--master payout tab end-->
        
    </div>
</section>