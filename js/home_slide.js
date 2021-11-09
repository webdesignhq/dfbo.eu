$(document).ready(function() {
    new fullpage('#fullpage', {
        licenseKey: '13A4838A-FD6E4BDD-ACC40775-F3ED2951',
        autoScrolling: true,
        scrollBar: true,
        normalScrollElements: '#normal-scroll, #footer-cont',
        continuousVertical: false,
        onLeave: function(origin, destination, direction){
			var leavingSection = this;
	
			//after leaving section 2
			if(origin.index == 2 && direction =='down'){
				//alert("Going to section 3!");
			
				//jQuery.fn.fullpage.setAutoScrolling(false);
				console.log(jQuery.fn.fullpage);
			}
	
			else if(origin.index == 1 && direction == 'up'){
				//alert("Going to section 1!");
			}
		}

    });
});