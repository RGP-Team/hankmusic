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
                <P class="prod-profile-settings-title">Payment History</P>
            	<hr class="prod-profile-settings-divider">
                
                 <div class="prod-profile-settingsInfo-wrap">
                <!--dd-->
                  <div class="table-responsive mastr-payment-history-table">          
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Payment Date</th>
                            <th>Payment Amount</th>
                            <th class="mastr-payment-tble-blank-clm"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($payments as $payment)
                          <tr>
                         <td>{{$payment->created_at}}</td>
                         <td>{{$payment->amount}}</td>
                       </tr>
                         @endforeach
                        </tbody>
                      </table>
                    </div>
                <div class="clearfix"></div>
                </div>
                
                </div>
                
                </div>
            </div>
        </div>
        
    </div>