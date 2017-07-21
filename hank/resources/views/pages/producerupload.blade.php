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

    <div class="error-msg">
      
    </div>
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
                        
                            <!--Producer music track start-->
                            <div class="prodUpload-music-loop-cont">
                              <div class="prodUpload-music-cover-pic">
                              <img id="cover-preview" style="width:125px;"/>
                              </div>
                              <div class="prodUpload-music-uploading-cont">
                                  <input type="file" name="image" id="music"/>
                                  <div class="prod-uploading-cont">
                                      <div class="prodUpload-music-cont">
                                          
                                          
                                          <div class="prodUpload-music-track"><div id="progressbar"></div></div>
                                          <div class="prodUpload-top-track-btn">
                                           
                                          </div>
                                          
                                          
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix prod-uploading-btm-off"></div>
                            <!--Producer music track1 end-->
                           
                             <!--row start-->
                           <div class="row upload-trackInfo-row">
                            <div class="upload-trackInfo-title"></div>
                            <div class="upload-trackInfo-input1">
                              <input type="file" name="imagemusic" id="imagemusic" style="display:none;"/>
                              <a href="#" onclick="previewImgPosted('imagemusic');"><i class="fa fa-camera"></i>&nbsp;Upload Cover</a>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->

                           <!--row start-->
                           <div class="row upload-trackInfo-row">
                            <div class="upload-trackInfo-title">Title</div>
                            <div class="upload-trackInfo-input">
                              <input type="text"  value="" name="title" id="title" style="" >
                              
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row upload-price-row">
                            <!---->
                            <div class="upload-price-cont">
                                <div class="upload-price-title">Price</div>
                                <div class="upload-price-input">
                                  <input type="text" name="price" id="price" value="" style="" >
                                </div>
                            </div>
                            <!---->
                            
                            <!---->
                            <div class="upload-price-cont upload-input-offset">
                                <div class="upload-price-title">Key</div>
                                <div class="upload-price-input">
                                  <input type="text"  name= "key" id= "key" value="" style="" >
                                </div>
                            </div>
                            <!---->
                            
                            <!---->
                            <div class="upload-price-cont upload-input-offset">
                                <div class="upload-price-title">BPM</div>
                                <div class="upload-price-input">
                                  <input type="text"  value="" name="bpm" id="bpm" style="" >
                                </div>
                            </div>
                            <!---->
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row upload-trackInfo-row">
                            <div class="upload-trackInfo-title">Tags</div>
                            <div class="upload-trackInfo-genreInput">
                              <div class="prod-genre-top-div"><span style="color:#aaa;">Separates with spaces or use quotation marks (e.g. "#Pop,#Rap, #EDM, #Raggeaton")</span> </div>
                              <input type="text" id="tags" style="" name="tags">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->

                           <!--row start-->
                           <div class="row upload-trackInfo-row">
                            <div class="upload-trackInfo-title" style="margin-top: -15px;">Genre</div>
                            <div class="upload-trackInfo-genreInput">
                              <div class="prod-genre-top-div"></div>
                              <select name="genre" id="genre" class="form-control">
                                  <option value="Urban">Urban</option>
                                  <option value="Hip Hop">Hip Hop</option>
                                  <option value="Rap">Rap</option>
                                  <option value="EDM">EDM</option>
                                  <option value="House">House</option>
                                  <option value="Trap">Trap</option>
                                  <option value="Pop">Pop</option>
                                  <option value="Regaeton">Regaeton</option>
                              </select>
                            </div>
                           </div>
                           
                           <!--row end-->


                            <!--row start-->
                           <div class="row upload-trackInfo-row">
                            <label>Upload zip file</label>
                            <input type="file" name="zip_file" id="zip_file"/>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           <br/>
                           
                           <!--row start-->
                           <div class="row upload-trackInfo-row" style="display:none;">
                            <div class="upload-describe-title" >Description</div>
                            <div class="upload-describe-input">
                              <textarea rows="4" cols="4" name="description" id="description" style="display:none;"></textarea>
                              <div class="prod-descib-sharebtn-div" style="display:none;">
                              	<ul>
                                	<li>Share: </li>
                                    <li><input type="checkbox" /> &nbsp; <i class="fa fa-facebook"></i> Facebook</li>
                                    <li><input type="checkbox" /> &nbsp; <i class="fa fa-twitter"></i> Twitter</li>
                                    <li><input type="checkbox" /> &nbsp; <i class="fa fa-google-plus"></i> Google Plus</li>
                                </ul>
                              </div>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row upload-trackInfo-row">
                            <div style="respect-other-people-rights">
                            
                            	<h5>Respect other people's rights</h5>
                                <p>By uploading to Hank Music, you represent that your sounds and any related content you upload complies with Hank Music's Terms of Use, Community Guidelines and applicable law, and that you are authorised to publish this content on Hank Music. If you upload content that infringes any third party rights, you risk having your Hank Music account terminated.</p><br/>


<p>In case of doubt, please check our information pages before uploading.</p>
                            
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           
                           
                           <button class="btn btn-primary btn-upload-track-btn">Upload Track</button>
                           <button class="btn btn-upload-cancel-btn">Cancel</button>
                           
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
    {{ Html::script('js/tagsinput/dist/bootstrap-tagsinput.js') }}
    <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.0.52/wavesurfer.min.js"></script>-->
    <script type="text/javascript">

  $( function() {

      

      $(".btn-upload-track-btn").click(function(e){
          e.preventDefault();

          // validation

          var fields = ['music','imagemusic','title','price','key','bpm','tags','genre','zip_file'];

          var msg = "";

          fields.forEach(function(item,index){            
            var input = $("#"+fields[index]).val();
            if(input == ""){
              msg += "<div class=\"alert alert-danger "+item+"-field\">"+
                        item + " field is required"+
                     "</div>";
            }
          });
          console.log(msg);
          if(msg != ""){
            $(".error-msg").html(msg);
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
          }else{
            msg = "";
            $(".error-msg").empty();
          }

          var form = document.forms.namedItem("ajax_form"); 
          var formdata = new FormData(form); 
          
          
          var bar = new ProgressBar.Line('#progressbar', {
            strokeWidth: 4,
              easing: 'easeInOut',
              duration: 1000,
              color: '#FFEA82',
              trailColor: '#eee',
              trailWidth: 1,
              svgStyle: {width: '100%', height: '100%'},
              text: {
                style: {
                  // Text color.
                  // Default: same as stroke color (options.color)
                  color: '#999',
                  position: 'absolute',
                  right: '0',
                  top: '30px',
                  padding: 0,
                  margin: 0,
                  transform: null
                },
                autoStyleContainer: false
              },
              from: {color: '#FFEA82'},
              to: {color: '#ED6A5A'},
              step: (state, bar) => {
                bar.setText(Math.round(bar.value() * 100) + ' %');

                
              }
          });
            bar.animate(1,function(){

                if(Math.round(bar.value() * 100) == 100){
                  bar.setText("");
                  bar.setText("Finalizing");
                }
                $("form[name=ajax_form]").submit();

                /**        $.ajax({
                    async: true,
                    type: 'post',
                    url: "../upload",
                    dataType: "json", 
                    contentType: false,
                    processData: false, // high importance!
                    data: formdata,
                    success: function(data) {
                      
                      console.log(data.result);
                      if(data.result == 'success'){
                        window.location.href = "{{url('/')}}/file-uploaded";
                      }
                      
                        
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });**/
                      }); 

          $("html, body").animate({ scrollTop: 0 }, "slow");
          

          
          
      });
     


      $('#imagemusic').change(function(){
    document.getElementById('cover-preview').src = window.URL.createObjectURL(this.files[0]);
    $(".prodUpload-music-cover-pic").css("height","auto");
  });

    });

  function previewImgPosted(input_image)
{
    var fileinput = document.getElementById(input_image);
    fileinput.click();
}   
$('#tags').tagsinput('add', { name: 'tags' });
    </script>