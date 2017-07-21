 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">Producer List</a></li>
      <li><a id="producersettings" data-toggle="tab" href="#payment_tab_content">Profile</a></li>
    </ul>


   <div class="container user-set-cont">
   
  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
        <div class="porducer-full-music-wrap" style="margin-top:0px;">
            <div class="row">
              <div class="col-md-12 pull-right">
              <a class="btn btn-primary pull-right" style="margin-left: 5px;" href="{{url('/')}}/exportProducer">Export Producer List</a>
              <form id="live-search" action="#" class="styled">
                <fieldset>
                    <input type="text" placeholder="search" class="col-md-3 pull-right" style="border-radius: 10px;" id="filter" value="" /> 
                </fieldset>
              </form>
              </div>
                <!--Producer home music loop 1 start-->
                @foreach($producers as $producer)
                <!--home music loop start 1-->
                <a href="javascript:producerList({{$producer->id}})" id="producerDiv">
                            <div class="hm-music-loop-cont1 col-md-4" style="margin-top: 20px;">
                              <div class="hm-music-cover-pic1 col-md-6" style="border-radius: 50%">
                                <img src="{{ url('/') }}/images/profile.jpg" alt="Profile Image" style="border-radius: 50%"/>
                              </div>
                              <div class="hm-music-cover-pic1 col-md-6" style="padding-top: 15%;">
                                <p id="producerName">{{$producer->first_name}}</p>
                                <p>{{$producer->address}}</p>
                              </div>
                            </div>
                          </a>
                @endforeach
                <!--Producer home music loop 1 end-->
                
                
                
                </div>
            </div>
    </div>

    <div id="payment_tab_content" class="tab-pane fade">
      <section>
    <div class="container producer-home-wrapper">
        <div class="mastr-music-sold-wrap">
            <div class="row">
                <div class="row mastr-payout-row">
                
                  <div class="col-md-4">  
                      <!--purchased music list start-->
                      <div class="mastr-best-selling-cont-list">
                        <div class="mastr-best-selling-cover">
                          <img src="{{ url('/') }}/images/profile.jpg" style="width:100%"/>
                          
                        </div>
                        <ul class="best-selling-ul-cont">
                          <li><span class="best-selling-title" id="title_name"></span><a href="#" data-toggle="modal" data-target="#myModal"><span class="fa fa-paypal" style="margin-left:10px; "></span></a></li>
                          <li><span class="best-selling-country" id="title_address"></li>
                          <li>
                               <!-- sold container start -->
                               <div class="best-selling-earning-cont">
                                    <div class="best-selling-icon-cont">
                                      <span class="best-selling-earning-icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="best-selling-earning-amount-cont">
                                      <div class="best-selling-amount-cont">
                                        <p class="earning-count"><span class="count selling-sold-cont-offset" id="balance"></span></p>
                                        
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
                                        <p class="earning-count"><span class="count" id="trackSold"></span></p>
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
                             <p class="earning-count"><span class="count" id="trackSoldhead"></span></p>
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
                             <p class="earning-count"><span class="count" id="balancehead"></span></p>
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
              <li class="mastr-payout-tab mastr-payout-tab-active"><a data-toggle="tab" href="#payout">Payment History</a></li>
              <li class="mastr-payout-tab active"><a data-toggle="tab" href="#profileInfo">Profile Information</a></li>
              <li class="mastr-payout-tab"><a href="{{url('/')}}/admin/exportproducersales">Export producer sales history</a></li>
            </ul>
            <input type="hidden" value="" id="producerId" name="produerId" />
            <div class="tab-content">
              <div id="sales" class="tab-pane mastr-payout-tab-pane">
                <div class="table-responsive mastr-payment-history-table">          
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Sold Date</th>
                            <th>Music Name</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th class="mastr-payment-tble-blank-clm"></th>
                          </tr>
                        </thead>
                        <tbody id="saleDetails">
                         
                        </tbody>
                      </table>
                    </div>
                <div class="clearfix"></div>
              </div>
              <div id="payout" class="tab-pane mastr-payout-tab-pane fade in active">
                <div class="table-responsive mastr-payment-history-table">          
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Payment Date</th>
                            <th>Payment Amount</th>
                            <th class="mastr-payment-tble-blank-clm"></th>
                          </tr>
                        </thead>
                        <tbody id="producerPayout">
                          
                        </tbody>
                      </table>
                    </div>
               <div class="clearfix"></div>
              </div>
              <div id="profileInfo" class="tab-pane mastr-payout-tab-pane fade">
                <div class="prod-profile-settingsInfo-wrap">
                  <h4 class="edit-acc-setting-title">ACCOUNT INFORMATION</h4>
                  <form action="{!!url('producerAccountSettings')!!}" method="POST">
                    {!!csrf_field()!!}
                    <!-- <input type="hidden" name="current_producer_id" id="current_producer_id" value="" /> -->
                    <div class="row accInfo-inner-row">
                        <div class="col-md-6">  
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Username</div>
                            <div class="billing-info-input">
                              <input type="text" name="user_name" id="user_name" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Password</div>
                            <div class="billing-info-input">
                              <input type="password" name="password" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Email Address</div>
                            <div class="billing-info-input">
                              <input type="text"  name="email" id="email" value="" style="" disabled>
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
                              <input type="text" name="first_name" id="first_name" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Last Name</div>
                            <div class="billing-info-input">
                              <input type="text"  name="last_name" id="last_name" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Address</div>
                            <div class="billing-info-input">
                              <input type="text"  name="address" id="address" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">City</div>
                            <div class="billing-info-input">
                              <input type="text"  name="city" id="city" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Country</div>
                            <div class="billing-info-input">
                              <input type="text"  name="country" id="country" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">State/Province</div>
                            <div class="billing-info-input">
                              <input type="text"  name="state" id="state" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">ZIP/Postal Code</div>
                            <div class="billing-postal-input">
                              <input type="text" class="security-inpt" id="zip" value="" name="zip" required maxlength="4" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Phone Number</div>
                            <div class="billing-info-input">
                              <input type="text"  name="phone" id="phone" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!-- <button class="btn btn-primary btn-bilinfo-save-chng">Save Changes</button> -->
                        </div>
                        
                        <div class="col-md-6">    
                            <!-- start of content -->
                
                            <!-- end of content -->
                        </div>
                    </div>
                </div>
                </form>
                </div>
              <div class="clearfix"></div>
              </div>
            </div>
        </div>
        <!--master payout tab end-->
        
    </div>
</section>

    </div>
  </div>
</div>


<script>
function numericFilter(txb) {
      txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }

    function producerList(producer_id){
    var _token = '<?php echo csrf_token(); ?>';
    $.ajax({
      type: "POST",
      url: 'producerinfo',
      data: {'producer_id': producer_id, '_token': _token},
      success:function(data){
        $("#producerId").val(producer_id);
        $("#user_name").val(data.user_name);
        $("#email").val(data.email);
        $("#first_name").val(data.first_name);
        $("#last_name").val(data.last_name);
        $("#city").val(data.state);
        $("#state").val(data.state);
        $("#address").val(data.address);
        $("#phone").val(data.phone);
        $("#zip").val(data.zip);
        $("#country").val(data.country_id);
        $("#title_name").text(data.first_name);
        $("#title_address").text(data.address);
        $("#balance").text(data.afterrecuringbalance);
        $("#trackSold").text(data.totalSold);
        $("#balancehead").text(data.afterrecuringbalance);
        $("#trackSoldhead").text(data.totalSold);

        $("#modal_title_name").text(data.first_name);
        $("#modal_title_address").text(data.address);
        $("#modal_balance").text(data.afterrecuringbalance);
        $("#modal_trackSold").text(data.totalSold);
        $("#current_producer_id").val(producer_id);
        $("#current_producer_balance").val(data.afterrecuringbalance);
        $("#producersettings").trigger('click');

        var qhtml = '';
        $.each(data.historydata, function(i,v){
          qhtml += '<tr>';
          qhtml += '<td>'+v.created_at+'</td>';
          qhtml += '<td>'+v.title+'</td>';
          qhtml += '<td>'+v.price+'</td>';
          qhtml += '<td>Paypal</td>';
          qhtml += '<td></td>';
          qhtml += '</tr>';
        });
        $("#saleDetails").html(qhtml);

        var qhtml1 = '';
        $.each(data.paymentHistory, function(i,v){
          qhtml1 += '<tr>';
          qhtml1 += '<td>'+v.created_at+'</td>';
          qhtml1 += '<td>'+v.amount+'</td>';
          qhtml1 += '<td></td>';
          qhtml1 += '</tr>';
        });
        $("#producerPayout").html(qhtml1);
      }
    });
  }

</script>




<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment Form</h4>
        </div>
        <div class="modal-body">

          <!--purchased music list start-->
                      <div class="mastr-best-selling-cont-list">
                        <div class="mastr-best-selling-cover">
                          <img src="{{ url('/') }}/images/profile.jpg" style="width:100%"/>
                          
                        </div>
                        <ul class="best-selling-ul-cont">
                          <li><span class="best-selling-title" id="modal_title_name"></span></li>
                          <li><span class="best-selling-country" id="modal_title_address"></li>
                          <li>
                               <!-- sold container start -->
                               <div class="best-selling-earning-cont">
                                    <div class="best-selling-icon-cont">
                                      <span class="best-selling-earning-icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="best-selling-earning-amount-cont">
                                      <div class="best-selling-amount-cont">
                                        <p class="earning-count"><span class="count selling-sold-cont-offset" id="modal_balance"></span></p>
                                        
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
                                        <p class="earning-count"><span class="count" id="modal_trackSold"></span></p>
                                      </div>
                                    </div>
                                </div>
                                <!-- view container end -->
                          </li>
                        </ul>
                      </div>

            <div class="clearfix"></div>
            <form action ="{!!url('admin/requestpayment')!!}" method="POST">
              {!!csrf_field()!!}
              <input type="hidden" name="current_producer_id" id="current_producer_id" value="" />
              <input type="hidden" name="current_producer_balance" id="current_producer_balance" value="" />
              <!--row start-->
           <!-- <div class="row billing-info-row">
            <div class="billing-info-title">Payment Method</div>
            <div class="billing-info-input">
              <span class="col-md-4">
              <span class="col-md-1"><input type="radio" name="payment_type" class="radioBtnClass" value="Paypal" style=""></span><span class="col-md-10"> Paypal</span>
            </span>
            <span class="col-md-4">
              <span class="col-md-1"><input type="radio" name="payment_type" class="radioBtnClass" value="Wire" style=""></span><span class="col-md-10"> Check </span>
            </span>
            <span class="col-md-4">
              <span class="col-md-1"><input type="radio" name="payment_type" class="radioBtnClass" value="Bank" style=""></span><span class="col-md-10">Bank deposit</span>
            </span>
            </div>
           </div>
           <div class="clearfix"></div> -->
           <!--row end-->


           <!--row start-->
           <!-- <div class="row billing-info-row">
            <div class="billing-info-title">Payment Date</div>
            <div class="billing-info-input">
              <input type="text" name="payment_date" id="datepicker" value="" style="">
            </div>
           </div>
           <div class="clearfix"></div> -->
           <!--row end-->

           <!--row start-->
           <div class="row billing-info-row">
            <div class="billing-info-title">Amount</div>
            <div class="billing-info-input">
              <input type="text" name="payment_amount" id="payment_amount" value="" style="">
            </div>
           </div>
           <div class="clearfix"></div>
           <!--row end-->

           <!--row start-->
           <div class="row billing-info-row">
            <div class="billing-info-title">Referenc no.</div>
            <div class="billing-info-input">
              <input type="text" name="reference_no" id="reference_no" value="" style="">
            </div>
           </div>
           <div class="clearfix"></div>
           <!--row end-->

           <!--row start-->
           <div class="row billing-info-row">
            <div class="billing-info-title">Remarks</div>
            <div class="billing-info-input">
              <textarea name="remarks" id="remarks" value="" style=""></textarea>
            </div>
           </div>
           <div class="clearfix"></div>
           <!--row end-->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="submitPayment">Submit Payment</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  
</div>

 <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });

  $("#submitPayment").click(function(){
    var payment_amount = $("#payment_amount").val();
    var reference_no = $("#reference_no").val();
    var remarks = $("#remarks").val();
    var current_producer_id = $("#current_producer_id").val();
    var current_producer_balance = $("#current_producer_balance").val();
    if(current_producer_balance > payment_amount){
    $.ajax({
      type: "POST",
      url: 'requestpayment',
      data: {'producer_id': current_producer_id, '_token': _token, 'request_amount':payment_amount, 'ref': reference_no, 'remarks': remarks},
      success:function(data){
        alert(data);
      }
        
    });
  }
  else{
    alert('Insufficient blance');
    return false;
  }
  });


$(document).ready(function(){
    $("#filter").keyup(function(){
        var filter = $(this).val(), count = 0;
        $("#producerName").each(function(){
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).parents('#producerDiv').fadeOut();
            } else {
                $(this).parents('#producerDiv').show();
                count++;
            }
        });
    });
});

  </script>















