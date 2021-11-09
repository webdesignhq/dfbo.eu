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

//     let tl = gsap.timeline({
//         scrollTrigger: {
//             trigger: '#section-2',
//             start: 'top bottom',
//             ease: 'linear',
//             markers: true
//         }
//     });
//     tl.from('#about', 1 ,{
//         backgroundPosition: '100% 700px'
//     })
//     .from('.aboutblock', 1, {
//         top: '-400px'
//     },'-=1');
// });

        //     onLeave: () => gsap.to('#about', .01 ,{
        //         backgroundPosition: '100% 700px'
        //     })
        //     .to('.aboutblock', .01, {
        //         top: '-400px'
        //     },'-=1')
        // }