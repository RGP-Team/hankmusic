
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <!-- footer -->
        
        
      
        <!-- /footer -->
      </div>
    </div>
  </div>
</footer>
 <!--
<div class="cc_banner-wrapper hm-footer ">
            <div class="cc_banner cc_container cc_container--open">
                <div class="row ">
                    <div id="waveform" style="background:url({{url('/')}}/img/playerbg.png)"></div>
               
               
                
                </div>
            </div>
        </div>
-->
  <!--Footer start-->
       <footer>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <!-- footer -->
                        
                        
                    
                        <!-- /footer -->
                    </div>
                </div>
            </div>
        </footer>
      
      <!--test-->

           

      <!--test-->
       <!-- <div class="cc_banner-wrapper hm-footer ">
            <div class="cc_banner cc_container cc_container--open">
                <div class="row ">
                    <div id="waveform" style="background:url({{url('/')}}/img/playerbg.png)"></div>
                
               
                
                </div>
            </div>
        </div>
        -->
         <!--footer player Start -->
        
        <div class="cc_banner-wrapper hm-footer">

            <div class="cc_banner cc_container cc_container--open">
              
                <div class="row">
                <!---->
                <div id="audio-player" class="audio-player-wrapper">
                  
            
                  <div class="audio-player-controls">
                    
                    <span class="audio-player-button-wrappers">
                      <a role="button" class="audio-player-button small icon-backward"></a>
                      <a role="button" id="play_pause" class="audio-player-button audio-player-place-pause-button icon-play"></a>
                      <a role="button" class="audio-player-button small icon-forward"></a>
                       <span class="audio-start-time">0:00</span>
                    </span>
                    <div style="margin:0">
                        <!-- background:url({{url('/')}}/img/playerbg.png);-->
                       
                        <div id="waveform" style="background:url({{url('/')}}/img/hr.png) no-repeat center;  max-width:350px important!; overflow-x: hidden;" ></div>
                        
                    </div>
                    
                  </div>
                   <span class="audio-end-time">0:00</span>
                  <div class="audio-player-img-name-cont">
                      <div class="audio-player-image">
                        <span class="audio-player-song-name"></span>
                      </div>
                      
                      <ul class="aduio-name-cont">
                          <li><span class="audio-player-song-name song-title-footer">Lunice</span></li>
                          
                      </ul>
                      @if(Auth::check())
                        @if(Auth::user()->user_type == 'moderator')
                        @else
                        <button onclick="buyMusic(localStorage.mid)" class="btn btn-primary btn-footer-buy-now">Buy Now</button>
                        {!!csrf_field()!!}
                        @endif
                      @endif
                      
                      <a href="" class="active-producer">
                        <div class="footer-audio-dots-cont">                        
                            <span class="audio-dot"></span>
                            <span class="audio-dot"></span>
                            <span class="audio-dot"></span>                        
                        </div>
                      </a>
                  </div>
                  
                </div>
                
                </div>
            </div>
        </div>
        
        
        <!-- footer player ends -->
<!-- JQuery/External JavaScript -->

{{ Html::script('//code.jquery.com/jquery-1.12.4.js') }}
{{ Html::script('//code.jquery.com/ui/1.12.0/jquery-ui.js') }}


<!-- Bootstrap JavaScript -->
{{ Html::script('bootstrap/js/bootstrap.min.js') }}

<!-- Other JavaScript Libraries -->
{{ Html::script('js/jquery.magnific-popup.min.js') }}
{{ Html::script('js/dropzone.js') }}
{{ Html::script('js/bootstrap-dialog.min.js') }}
{{ Html::script('js/customJs/custom.js') }}

{{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.3.2/wavesurfer.min.js') }}

<!--{{ Html::script('js/script.js') }}

{{ Html::script('js/all.js') }}-->


<script type="text/javascript">


var baseURL = $(".base_url").attr("attr_val");

var wavesurfer = WaveSurfer.create({
        container: '#waveform',
        waveColor: 'violet',
        progressColor: 'purple',
        height: 40,
        barWidth: 1,
      });
      
      wavesurfer.on('ready', function () {
        //alert(123);
        wavesurfer.play();
      });
      
      //wavesurfer.pause(), wavesurfer.skipBackward(), wavesurfer.skipForward(), wavesurfer.toggleMute()
      function playAudio(url,title,mid,producerID){
                        console.log(baseURL+'/hank/resources/audio/'+encodeURI(url));
                          //  $(".btn-play-audio").trigger("click");
                            wavesurfer.load(baseURL+'/hank/resources/audio/'+encodeURI(url));
                            localStorage.mid = mid;
                            //alert(localStorage.mid);
                            wavesurfer.play();
                             $("#play_pause").removeClass("ionc-play").addClass("icon-pause");
                            var non_loggedin_limit = 2; //in seconds
                            $(".song-title-footer").text(title);
                            $("a.active-producer").attr("href","{{url('/')}}/producerfeatureprofile/"+producerID);
                            setTimeout(function () {  
                                   $(".audio-end-time").text(getAudioLength());
                                    //wavesurfer.pause();
                                    
                                   // alert(non_loggedin_limit + ' seconds had passed! You need to log in to listen to the complete version of the sound.');
                                   // alert(getAudioLength());
                            }, non_loggedin_limit * 1000);
                            
                       }
                       
                       
                       function getAudioLength(){
                            var duration = wavesurfer.getDuration();
                            return ((duration.toFixed(0))/60).toFixed(2);
                       }
                       
                       function getAudioCurrentLength(){
                            var duration = wavesurfer.getCurrentTime();
                            return ((duration.toFixed(0))/60).toFixed(2);
                       }
                       
                       $(".icon-backward").on("click",function(){
                           wavesurfer.skipBackward();
                           $(".audio-start-time").text(getAudioCurrentLength());
                       });
                       
                       $(".icon-forward").on("click",function(){
                           wavesurfer.skipForward();
                             $(".audio-start-time").text(getAudioCurrentLength());
                       });
                       
                       
                       wavesurfer.on('audioprocess', function(){
                           $(".audio-start-time").text(getAudioCurrentLength());
                       });
                       
                       $("#play_pause").on("click",function(){
          
                      var lastClass = $('#play_pause').attr('class').split(' ').pop();
          
                   if(lastClass=="icon-pause")
                   {
                     $("#play_pause").removeClass("icon-pause").addClass("icon-play");
                          wavesurfer.pause();
                    }
            
                    if(lastClass=="icon-play")
                    {
                     $("#play_pause").removeClass("icon-play").addClass("icon-pause");
                          wavesurfer.play();
                       }
        
      });


      function buyMusic(id){       

        $.ajax({
          type: 'POST',
          url : "{{url('/')}}/add-to-cart",
          data:{
            user_id: "{{Auth::check() ? Auth::user()->id : ''}}",
            music_id: id,
            _token:$('input[name=_token]').val()
          },success:function(data){
            console.log(data);
            if(data.result == 'success'){
              window.location.href = "?cart=success";
            }
          }
        });
      }

      function buyMusicAjax(id){       

        $.ajax({
          type: 'POST',
          url : "{{url('/')}}/add-to-cart",
          data:{
            user_id: "{{Auth::check() ? Auth::user()->id : ''}}",
            music_id: id,
            _token:$('input[name=_token]').val()
          },success:function(data){
            console.log(data);
            if(data.result == 'success'){
              $(".mid_"+id).html("Added to cart");
            }
          }
        });
      }

      setTimeout(function(){
        $(".alert-success").fadeOut();
      },3000);
      
                       
   </script>
    
    
    