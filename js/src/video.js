(function($){

	/**
	*
	*	Video Player Class
	*
	*
	*
	**/
	var $el 		= $('#video-container'),
		$video 		= $el.find('video'),
		$overlay 	= $el.find('.overlay'),
		$bar 		= $el.find('.bar'),
		$buffer 	= $bar.find('.buffer'),
		$progress 	= $bar.find('.progress'),
		player 		= $video[0],
		$src 		= $video.find('[data-src]'),
		buffering	= true,
		seeking 	= true;

	//If no Video Player Exists, Cancel
	if( $el.length == 0 ) return;

	/**
	*
	*	CLICK: [data-player-close]
	*		- Close the Video Player
	*
	*
	**/
	$('[data-player-close]').click(function(e){

		e.stopPropagation();

		if( !player.paused ) player.pause();

		$el.removeClass('open');

	});




	/**
	*
	*	CLICK: [data-player-close]
	*		- Close the Video Player
	*
	*
	**/
	$('#video-play-btn').click(function(){

		if( $src.length > 0 ){

			$el.addClass('open');

			$src.attr( 'src' , $src.attr('data-src') );

		}

		if( !$video.hasClass('ready') ){

			player.load();			
			
		}else{

			player.currentTime = 0;

			player.play();

		}

	});






	/**
	*
	*	Interval
	* 		- Show the current video progress if the video is playing.
	*
	**/
	window.setInterval(function(){

		if( !player.paused && player.duration > 0 ){

			$progress.width( ( ( player.currentTime / player.duration ) * 100 ) + '%' );
		
		}

		if( player.readyState == 4 && buffering && !player.paused ){

			var range 		= 0,
				buffered 	= player.buffered,
				time 		= player.currentTime;

			if( !( buffered.start(range) <= time && time <= buffered.end(range) ) ){

				range += 1;

			}

			var end 	= ( ( buffered.end(range) / player.duration ) * 100 );

			$buffer.width( end + '%' );

			if( end == 100 ) buffering = false;

		}

	},50);





	/**
	*
	*	ON: Seeking
	* 		- Show the Video Loader
	*
	**/
	$video.on( 'seeking' , function(e){

		$video.parent().addClass('seeking');

	});






	/**
	*
	*	ON: Seeked
	* 		- Hide the Video Loader
	*
	**/
	$video.on( 'seeked' , function(e){

		$video.parent().removeClass('seeking');

	});






	/**
	*
	*	ON: CanPlayThrough
	* 		- Start Playing the Video
	*
	**/
	$video.on( 'canplaythrough' , function(e){

		$video.addClass('ready');

		player.play();

	});






	/**
	*
	*	CLICK: .video-player video, .video-player .overlay
	* 		- Toggle the Pause & Play
	*
	**/
	$el.on('video, .overlay').click(function(e){
		if( $video.hasClass('ready') ){

			$video.parent().toggleClass( 'paused' , !player.paused );

			player[ ( player.paused ? 'play' : 'pause' ) ]();

		}
	});






	/**
	*
	*	CLICK: .video-player .bar
	* 		- Start Playing from the Specified Time
	*
	**/
	$bar.click(function(e){
		if( $video.hasClass('ready') ){

			e.preventDefault();
			e.stopPropagation();

			var offset 	= $bar.offset(),
				point 	= e.pageX - offset.left,
				perc 	= ( point / $bar.width() ) * 100;

			if( !player.paused ) player.pause();

			player.currentTime = ( ( perc / 100 ) * player.duration );

			$video.parent().removeClass( 'paused' );

			player.play();

		}
	});

})(jQuery);