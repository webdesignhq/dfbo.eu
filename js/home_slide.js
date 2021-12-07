// $(document).ready(function() {

//     new fullpage('#fullpage', {
//         licenseKey: '13A4838A-FD6E4BDD-ACC40775-F3ED2951',
//         autoScrolling: true,
//         scrollBar: true,
//         normalScrollElements: '#normal-scroll, #section-3',
//         continuousVertical: false,
//         navigation: true,
//         onLeave: function(origin, destination, direction){
// 			var leavingSection = this;
	
// 			//after leaving section 2
// 			if(origin.index == 1 && direction =='down'){
// 				//alert("Going to section 3!");
			
// 				fullpage_api.setAutoScrolling(false);
// 				console.log(jQuery.fn.fullpage);
// 			}
	
// 			else if(origin.index == 1 && direction == 'up'){
// 				//alert("Going to section 1!");
//                 fullpage_api.setAutoScrolling(true);
//                 console.log(jQuery.fn.fullpage);
// 			}
// 		}
//     });

//     let tl = gsap.timeline({
//         scrollTrigger: {
//             trigger: '#section-2',
//             start: 'top bottom',
//             ease: 'linear',
//             markers: false,
//             scrub: true
//         }
//     });

//     tl.fromTo('#about', 1, 
//     {backgroundPosition: '100% 700px'},
//     {backgroundPosition: '100% 400px'});
//     tl.fromTo('.aboutblock', 1,
//     {top: '-400px'},
//     {top: '150px'},'-=1');

//     let tl2 = gsap.timeline({
//         scrollTrigger: {
//             trigger: '#section-3',
//             start: 'top top',
//             end: "+=45% +=100%",
//             ease: 'linear',
//             markers: false,
//             scrub: true
//         }
//     });

//     tl2.fromTo('.sliderteam', 1, 
//     {right: '-900px'},
//     {right: '0px'}
//     );
// });

