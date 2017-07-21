jQuery(document).ready(function () {
	
	load_audio();
	jQuery(".btn-play-audio").on("click", function () {
		play_audio();
	});
	
	jQuery(".btn-open-login").on("click", function () {
		open_modal('login_form');
	});
	
	jQuery(".btn-open-signup").on("click", function () {
		open_modal('signup_form');
	});
	
	jQuery("#menu_toggle").on("click",function(){
		if (!jQuery('.scroll-view').is(':visible'))
			jQuery('.main_container .top_nav, .main_container .right_col').css('margin-left', '230px');
		
		jQuery('.scroll-view').toggle('slide', function (){
			if (!jQuery('.scroll-view').is(':visible')) {
				jQuery('.main_container .top_nav, .main_container .right_col').css('margin-left', '0');
			}
		});
	});
	
	jQuery("#sidebar-menu").find("a").on("click",function(t){
		var parent = jQuery(this).parent();
		parent.is(".active")?(
			parent.removeClass("active active-sm"),
			jQuery("ul:first", parent).slideUp(function(){
				;
			})
		):(
			parent.parent().is(".child_menu")||(
				jQuery("#sidebar-menu").find("li").removeClass("active active-sm"),
				jQuery("#sidebar-menu").find("li ul").slideUp()
			),parent.addClass("active"),
			jQuery("ul:first", parent).slideDown(function(){
				;
			})
		)
	});
	
	
	
	
	
	/* Generic Functions */
	
	jQuery('a.popup').magnificPopup({
		type:'inline',
		midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
  
	jQuery('.search > .search-box').keydown(function (event) {
		if (event.keyCode == 13) {
			this.form.submit();
			return false;
		}
	});
	
	jQuery('.videos-container').magnificPopup({
	  delegate: 'a',
	  type: 'iframe',
	  iframe: {
		  markup: '<div class="mfp-iframe-scaler">'+
					'<div class="mfp-close"></div>'+
					'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
				  '</div>',
		  patterns: {
			youtube: {
			  index: 'youtube.com/',
			  id: 'v=',
			  src: '//www.youtube.com/embed/%id%?autoplay=1'
			},
			vimeo: {
			  index: 'vimeo.com/',
			  id: '/',
			  src: '//player.vimeo.com/video/%id%?autoplay=1'
			}
		  },
		  srcAction: 'iframe_src',
		},
		callbacks: {
		  beforeOpen: function() {
			var el = this.st.el.get(0);
			jQuery.ajax({ type: "GET", url: "{{ url('/videos/view') }}/" + $(el).attr('data-id') });
		  }
		}
	});
	
	if (jQuery('#works-dropzone').is(':visible'))
	{
	  Dropzone.options.worksDropzone = {
		uploadMultiple: false,
		acceptedFiles: 'image/*',
		addRemoveLinks: false,
		dictDefaultMessage: '',
		init: function() {
		  this.on("addedfile", function(file) {
			$('#img-thumb-preview').show();
			$('.processing-msg').show();
		  });
		  this.on("thumbnail", function(file, dataUrl) {
			$('.dz-image-preview').hide();
			$('.dz-file-preview').hide();
		  });
		  this.on("success", function(file, res) {
			$('.processing-msg').hide();
			window.location.href=window.location.href;
		  });
		}
	  };
	  var worksDropzone = new Dropzone("#works-dropzone");
	 
	  $('#works-upload-submit').on('click', function(e) {
		e.preventDefault();
		$("#works-dropzone").trigger('click');
	  });
	}
});
Dropzone.autoDiscover = false;
var wavesurfer = null;
function load_audio() {
	wavesurfer = WaveSurfer.create({
		container: '#waveform',
		waveColor: 'violet',
		progressColor: 'purple',
		height: 40,
		/*barWidth: 1,*/
	});
	wavesurfer.load('audio/my_mule.wav');
}
function play_audio() {
	wavesurfer.play();
	/*wavesurfer.on('ready', function () {
		wavesurfer.play();
	});*/
	
	var non_loggedin_limit = 10;	//in seconds
	setTimeout(function () {	
		wavesurfer.pause();
		jQuery('.btn-play-audio').hide(100, function () {
			alert(non_loggedin_limit + ' seconds had passed! You need to log in to listen to the complete version of the sound.');
		});
	}, non_loggedin_limit * 1000);
	
	////wavesurfer.pause(), wavesurfer.skipBackward(), wavesurfer.skipForward(), wavesurfer.toggleMute()
}
function open_dialog (title, message, type) {
	if (typeof type !== 'undefined') type = BootstrapDialog.TYPE_PRIMARY;
	
	BootstrapDialog.show({
		type: type,
		title: title,
		message: message,
		buttons: [{
			label: 'Close',
			action: function(dialogItself){
				dialogItself.close();
			}
		}]
	});  
}
function open_confirm (title, message, btnOkLabel, type, callback) {
	if (typeof type !== 'undefined') type = BootstrapDialog.TYPE_WARNING;
	
	BootstrapDialog.confirm({
		type: type,
		title: title,
		message: message,
		btnCancelLabel: 'Cancel',
		btnOKLabel: btnOkLabel,
		callback: callback
	});  
}
function open_modal (form_id) {
	jQuery.magnificPopup.open({
	  items: {
		src: '#' + form_id
	  },
	  type: 'inline'
	});
}
function send_ajax_request (url) {
	var tm = new Date().getTime();
	var url = url + "?" + tm;
	var token = container.find('input[name="chat-csrf"]').val();
	
	var data = {
		_token: token
	};
	
	jQuery('div.sending-container').find('span.sending').html('<i class="fa fa-refresh fa-spin"></i> &nbsp;<i>Processing your request, please wait...</i>');
	jQuery.ajax({
		type: "POST",
		url: url,
		data: data,
		dateType: 'json',
		success: function( data ) {
			jQuery('div.sending-container').find('span.sending').html(data.message);
			setTimeout(function(){
				jQuery('div.sending-container').find('span.sending').html('');
			}, 1000);
		}
	});				
}