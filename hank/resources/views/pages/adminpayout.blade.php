<!-- Services Section -->
<?php
//print $test;
?>
<section>
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
        
            <div class="row">
                <P class="prod-upload-track-title">Request for payment</P>
            	<hr class="prod-upload-track-divider">
                
                 <div class="prod-upload-trackInfo-wrap">
        
                    <div class="table-responsive mastr-payment-history-table">          
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Payment Request Date</th>
                            <th>Request Amount</th>
                            <th>Status</th>
                            <th class="mastr-payment-tble-blank-clm"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($paymentRequest as $request)
                            <tr>
                            <td>{{$request->created_at}}</td>
                            <td>{{$request->amount}} $</td>
                            <td><a href="javascript:requestAccept({{$request->id}})">Approve</a></td>
                          </tr>
                          @endforeach
                         
                        </tbody>
                      </table>
                    </div>
                
                
                </div>
                </div>
                </div>

        
    </div>
</section>




<script>
function numericFilter(txb) {
      txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }

    $("#requestPayment").click(function(){
    var _token = '<?php echo csrf_token(); ?>';
    var producer_id = '<?php echo Auth::user()->id; ?>';
    var request_amount = $('#request_amount').val();
    var payment_method = $('#payment_type').val();
    $.ajax({
      type: "POST",
      url: 'requestpayment',
      data: {'producer_id': producer_id, '_token': _token, 'request_amount':request_amount, 'payment_method':payment_method},
      success:function(data){
      }
        
    });
  });


    function requestAccept(id){
    var _token = '<?php echo csrf_token(); ?>';
    $.ajax({
      type: "POST",
      url: 'requestaccept',
      data: {'_token': _token, 'request_id': id},
      success:function(data){
      }
        
    });
  };
</script>

