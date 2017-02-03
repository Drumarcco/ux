jQuery.fn.scrollTo = function(elem, speed) { 
	$(this).animate({
		scrollTop:  $(this).scrollTop() - $(this).offset().top + ($(elem).offset().top - 100)
	}, speed == undefined ? 1000 : speed); 
	return this; 
};
$(function(){
	var _autoScroll = true;
	var _currentSliceNumber = 0;
	var _currentSliceSpan = null;
	var _container = $('#pt-slice-container');
	var _allSlices = $('#pt-slice-container > .pt-slice');
	var _iframe = $('#proTranscriptPlayer')[0], _player = $f(_iframe);
	_player.addEvent('ready', function() {
		_player.addEvent('playProgress', onPlayProgress);
		_allSlices.click(function(event) {
			sliceNumber = event.target.dataset.slicenumber;
			if (sliceNumber) {
				_autoScroll = true;
				seekToSeconds = seconds = (sliceNumber * 3) - 3;
				_player.api('seekTo', seekToSeconds);
			};
		});	
	});
	_container.scroll(function() {
		_autoScroll = false;
	});
	function onPlayProgress(data, id) {
		var seconds = data.seconds;
		if(seconds==0) {
			return true;
		} else {
			var currentSliceNumber = Math.floor(seconds / 3) + 1;
			if(_currentSliceNumber == currentSliceNumber) {
				return true;
			} else {
				if(_currentSliceSpan) {
					_currentSliceSpan.removeClass('pt-slice-current');
				};
				_currentSliceNumber	= currentSliceNumber;
				_currentSliceSpan = $('#pt-slice-container > .pt-slice[data-slicenumber=' + _currentSliceNumber +']');
				if(_currentSliceSpan) {
					_currentSliceSpan.addClass('pt-slice-current');
					if (_autoScroll) {
						_container.scrollTo(_currentSliceSpan, 1000);
					};
				};
			};
		};
	};
});
