$(function(){

	/********** Back Button **********/

	// Hide back button if on home page
	if ($('div.home')[0]){
		$('li.back').hide();
	} else {
		$('li.back').show();
	}

	// Add click functionality
	$('li.back').click(function(){
		// get current url
		var url = window.location.href;

		// get last parameter
		var param = url.split('/'); // make array of url sections divided by '/'
		var length = param.length; // get number of url sections
		var lastParam = param[length - 1]; // get last parameter

		// remove last parameter if it is a success message
		if ((lastParam == 'serialnSuccess')||(lastParam == 'commentSuccess')) {
			
			// length of success messages
			var successLength = lastParam.length;

			// remove success message and leading /
			url = url.substring(0, url.length - lastParam.length - 1);

		};

		// remove last parameter and '/'. From Tim Down's stackOverflow answer: http://stackoverflow.com/questions/3597611/javascript-how-to-remove-characters-from-end-of-string
		var urlOneLessParam = url.slice(0, url.lastIndexOf('/')); 
		
		// redirect to url with one or two less parameters
		window.location.replace(urlOneLessParam);

	});

	/********** Status Page **********/
	
	// if successful updating serial number, show sn checkbox
	if(window.location.href.indexOf('serialnSuccess') > -1){
		$('#commentSuccess').fadeOut();
		$('#serialnSuccess').fadeIn();

	// else if successful updating comment field, show comment checkbox
	} else if(window.location.href.indexOf('commentSuccess') > -1){
		$('#serialnSuccess').fadeOut();
		$('#commentSuccess').fadeIn();
	}

	/********** Color Helper **********/

	// Hide back button if on home page or platoon page or status page
	if (($('div.home')[0])||($('li.status')[0])||($('li.platoon')[0])){
		$('li.labels').hide();
	} else {
		$('li.labels').show();
	}

	// Show or hide labels

		// Set up index
		var showLabel = false;

		// Change labels on click
		$('li.labels').click(function(){
			if(showLabel == true){
				$('span.statusLabel').hide();
				showLabel = false;
			} else {
				$('span.statusLabel').show();
				showLabel = true;
			}
		});

	// Vehicle Page labels
	if($('li.vehicle')){ //check for vehicle li's
		$('li.vehicle').each(function (){

			// get current status
			var status = $(this).data('status');

			// write out current status
			if(status == 'g'){
				status = 'green';
			} else if(status == 'a'){
				status = 'amber';
			} else if(status == 'r'){
				status = 'red';
			}

			// get current label
			var label = $(this).find('a').html();

			// combine current label and status for new html, and hide status initially until 'label' click
			$(this).find('a').html(label + "<span class='statusLabel' style='display:none'> - " + status + "</span>");
		
		});
	}

	// Equipment Page Labels
	if($('li.equipment')){ // check for equipment li's
		$('li.equipment').each(function (){

			// get current status
			var status = $(this).data('status');

			// write out current status
			if(status == 'g'){
				status = 'green';
			} else if(status == 'a'){
				status = 'amber';
			} else if(status == 'r'){
				status = 'red';
			}

			// get current label
			var label = $(this).find('a').html();

			// combine current label and status for new html, and hide status initially until 'label' click
			$(this).find('a').html(label + "<span class='statusLabel' style='display:none'> - " + status + "</span>");
		
		});
	}

});