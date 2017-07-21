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
                <P class="prod-upload-track-title">Test Cart</P>
            	<hr class="prod-upload-track-divider">
                
                 <div class="prod-upload-trackInfo-wrap">
        
                    <div class="row withdraw-earnings-container">
                        <div class="col-md-12">	
                        	
                            <!--cart container start-->
                            <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#cartModal"> Cart Modal</button>
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
                                            
                                                <!--cart Item start-->
                                                <div class="item  col-xs-12 col-lg-12">
                                                    <div class="thumbnail cstm-cart-tumbnail">
                                                        <img class="group list-group-image cart-thubnail-cont" src="../public/img/gorillaz-cover.jpg" alt="" />
                                                        <div class="caption cart-caption-cont">
                                                            <div class="cart-title-cont">
                                                                <h3 class="group inner list-group-item-heading">Plastic Beach</h3>
                                                                <p class="group inner list-group-item-text cart-band-name">Gorillaz Band</p>
                                                            </div>
                                                            <div class="cart-clear-btn">
                                                                <i class="fa fa-trash trash-icon" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-6">
                                                                    <p class="lead cart-product-amount">$4.99</p>
                                                                </div>
                                                                <div class="col-xs-12 col-md-6">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--cart Item end-->
                                            
                                                <!--cart Item start-->
                                                <div class="item  col-xs-12 col-lg-12">
                                                    <div class="thumbnail cstm-cart-tumbnail">
                                                        <img class="group list-group-image cart-thubnail-cont" src="../public/img/gorillaz-cover.jpg" alt="" />
                                                        <div class="caption cart-caption-cont">
                                                            <div class="cart-title-cont">
                                                                <h3 class="group inner list-group-item-heading">Plastic Beach</h3>
                                                                <p class="group inner list-group-item-text cart-band-name">Gorillaz Band</p>
                                                            </div>
                                                            <div class="cart-clear-btn">
                                                                <i class="fa fa-trash trash-icon" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-6">
                                                                    <p class="lead cart-product-amount">$4.99</p>
                                                                </div>
                                                                <div class="col-xs-12 col-md-6">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--cart Item end-->
        
        								 </div>
                                         
                                         <div class="cart-total-cont">TOTAL : <span class="cart-title-item">$6:49</span></div>
                                         <button class="btn btn-primary pay-now-btn">Pay Now</button>
                                         
                                         <!--cart all item end-->
                                        </div>
                        
                                    </div><!-- modal-content -->
                                </div><!-- modal-dialog -->
                            </div><!-- modal -->
                            <!--cart container end-->
                            
                           
                        </div>
                    </div>
                
                
                </div>
                </div>
                </div>
                
        
        <div class="creditCard-Pagebottom-offset"></div>
        
    </div>
</section>