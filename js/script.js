init_tooltips_for_calculator();

/*

map of coverage

*/
	states = new Array('ne','sd','co','ks','mo','ia','ar','ut','wy');
	
	$('#map-usa').vectorMap({
		map: 				'usa_en',
		color: 				'#154a8f',
		hoverColor:			false,
		hoverOpacity: 		0.7,
		backgroundColor:	'rgba(0, 0, 0, 0.85)',
		onLabelShow: 		function(event, label, code){
			for(var i = 0; i < states.length; i++) {
			    if(code == states[i]) {
		    		newImage = '<img style="display:block;margin-top: 10px;" src="' + templateDir + '/img/map-' + states[i] + '.png" />';
		    		label.append(newImage);
			    }
			}
		   
		}
	});
	
	$('#map-usa').vectorMap('set', 'colors', {
		ne:	'#6996cf',
		sd: '#6996cf',
		co: '#6996cf',
		ks: '#6996cf',
		mo: '#6996cf',
		ia: '#6996cf',
		ar: '#6996cf',
		ut: '#6996cf',
		wy: '#6996cf'
	});

$('.btn-map').fancybox({
	'type' 			: 'inline',
	'padding'			: 0,
	helpers: {
	    overlay : {
	        opacity : 0.95,
	        css : {
	            'background' : 'transparent' 
	        }
	    }
	}
});



/*

Fix headers that do not fit in width of container

*/
	maxHeight = parseFloat($('article header h2').css('max-height'));

	$('article header h2').each(function () {
        while ($(this).outerHeight() > maxHeight) {
            var currentFontSize = $(this).css("font-size");
            $(this).css("font-size", (parseFloat(currentFontSize) - 1) + "px");
        }
	});
	
	
	
	
/*

bubble info for products, etc 

*/

function init_tooltips_for_calculator() {
  $('.bubbleInfo').each(function () {
    // options
    var yDistance = 10;
    var xDistance = 50;
    var time = 250;
    var hideDelay = 500;

    var hideDelayTimer = null;

    // tracker
    var beingShown = false;
    var shown = false;
    
    var trigger = $('.trigger', this);
    var popup = $('.popup', this).css('opacity', 0);
	
	function show_popup() {
	  // stops the hide event if we move from the trigger to the popup element
	  if (hideDelayTimer) clearTimeout(hideDelayTimer);
	
	  // don't trigger the animation again if we're being shown, or already visible
	  if (beingShown || shown) {
	    return;
	  } else {
	    beingShown = true;
	
	    // reset position of popup box
	    popup.css({
	      top: 20,
	      right: -30,
	      display: 'block' // brings the popup back in to view
	    })
	
	    // (we're using chaining on the popup) now animate it's opacity and position
	    .animate({
	      top: '-=' + yDistance + 'px',
	      right: '-=' + xDistance + 'px',
	      opacity: 0.8
	    }, time, 'swing', function() {
	      // once the animation is complete, set the tracker variables
	      beingShown = false;
	      shown = true;
	    });
	  }
	}
	
	function hide_popup() {
		if(trigger.is('.focus')) {
			return;
		}
	
		// reset the timer if we get fired again - avoids double animations
		if (hideDelayTimer) clearTimeout(hideDelayTimer);
			
		// store the timer so that it can be cleared in the mouseover if required
		hideDelayTimer = setTimeout(function () {
		  hideDelayTimer = null;
		  popup.animate({
		    top: '-=' + yDistance + 'px',
			right: '-=' + xDistance + 'px',
		    opacity: 0
		  }, time, 'swing', function () {
		    // once the animate is complete, set the tracker variables
		    shown = false;
		    // hide the popup entirely after the effect (opacity alone doesn't do the job)
		    popup.css('display', 'none');
		  });
		}, hideDelay);
		
	}
	
    // set the mouseover and mouseout on both element
    $([trigger.get(0), popup.get(0)])
    	.focus(function() {
    		trigger.addClass('focus');
    		show_popup();
    	})
    	.blur(function() {
    		trigger.removeClass('focus');
    		hide_popup();
    	})
      	.mouseover(show_popup)
      	.mouseout(hide_popup);
	});
}