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

		// settings.pluginWidth = 480;
		// settings.pluginHeight = 240;
		// settings.defaultVideoWidth = 480;
		// settings.defaultVideoHeight = 240;
		settings.enableAutosize = false;

		var tmp = '<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">' +
'		  <div class="modal-dialog">' +
'		    <div class="modal-content">' +
'		      <div class="modal-body">' +
'		      </div>' +
'		    </div>' +
'		  </div>' +
'		</div>';

		function initModal(i) {
			return function() {
				var $video = $(this).parent().find("video").clone(),
						$modal = $(tmp).attr("id", "video-" + i ),
						player;
				$modal.find('.modal-body').html($video)
					.end().appendTo('body').modal()

				// fire only once
				$modal.one('shown.bs.modal', function() {
					// $modal.find(".wp-video-shortcode").mediaelementplayer( settings ).show();
					$modal.find(".wp-video-shortcode").attr("id", "modal-video-" + i).show()
					player = new MediaElementPlayer( "#modal-video-" + i, settings);
				})

				$modal.on('hidden.bs.modal', function(e) {
					player.pause();
				})
			}
		}

		function handleVideo(i) {
			var src = $(this).attr("poster"),
					$img = $("<img class='bg' src=" + src + " />"),
					$overlay = $('<div class="mejs-overlay mejs-layer mejs-overlay-play"><div class="mejs-overlay-button"></div></div>');
			$(this).hide().before($img).before($overlay)

			$overlay.one("click", initModal(i))

			$overlay.on("click", function(e) {
				$("#video-" + i).modal('show')
			})
			
		}

		$('.wp-audio-shortcode, .wp-video-shortcode').each(handleVideo)
	});

}(jQuery));
