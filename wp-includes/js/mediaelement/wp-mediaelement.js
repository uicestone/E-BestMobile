/* global mejs, _wpmejsSettings */
(function ($) {
	// add mime-type aliases to MediaElement plugin support
	mejs.plugins.silverlight[0].types.push('video/x-ms-wmv');
	mejs.plugins.silverlight[0].types.push('audio/x-ms-wma');

	$(function () {
		var settings = {};

		if ( typeof _wpmejsSettings !== 'undefined' ) {
			settings = _wpmejsSettings;
		}

		settings.success = settings.success || function (mejs) {
			var autoplay, loop;

			if ( 'flash' === mejs.pluginType ) {
				autoplay = mejs.attributes.autoplay && 'false' !== mejs.attributes.autoplay;
				loop = mejs.attributes.loop && 'false' !== mejs.attributes.loop;

				autoplay && mejs.addEventListener( 'canplay', function () {
					mejs.play();
				}, false );

				loop && mejs.addEventListener( 'ended', function () {
					mejs.play();
				}, false );
			}
		};

		var tmp = '<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">' +
'		  <div class="modal-dialog">' +
'		    <div class="modal-content">' +
'		      <div class="modal-body">' +
'		      </div>' +
'		    </div>' +
'		  </div>' +
		'</div>';


		// $('.wp-audio-shortcode, .wp-video-shortcode').mediaelementplayer( settings );
		$('.wp-audio-shortcode, .wp-video-shortcode').each(function (i) {
			var src = $(this).attr("poster")
			var $img = $("<img class='bg' src=" + src + " />")
			var $overlay = $('<div class="mejs-overlay mejs-layer mejs-overlay-play"><div class="mejs-overlay-button"></div></div>')
			$(this).hide().before($img).before($overlay)
			$overlay.on("click", function(e){
				var $video = $(this).parent().find("video").clone().show();
				if ($("#video-" + i).length) {
					// if modal is inited, show it 
					$("#video-" + i).modal('show')
				} else {
					// init modal
					var $modal = $(tmp).attr("id", "video-" + i );
					$modal.find('.modal-body').html($video)
						.end().appendTo('body').modal()

					// $modal.find(".wp-video-shortcode").mediaelementplayer( settings );
					$modal.find(".wp-video-shortcode").attr("id", "modal-video-" + i)
					var player = new MediaElementPlayer( "#modal-video-" + i, settings);
					// player.play();
					$modal.on('hide.bs.modal', function (e) {
						player.pause();
					  
					})
				}
			})
		})
	});

}(jQuery));
