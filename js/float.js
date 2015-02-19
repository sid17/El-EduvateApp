jQuery(document).ready(function() {
	
	//vendor script
	jQuery('header')
	.css({ 'top':-70 })
	.delay(500)
	.animate({'top': 0}, 800);
	
	jQuery('footer')
	.css({ 'bottom':-40 })
	.delay(500)
	.animate({'bottom': 0}, 800);
	
	//jqfloat.js script
	jQuery('.cloud').each(function() {
		jQuery(this).jqFloat({
			width:Math.floor(Math.random()*10)*10,
			height:10,
			speed:Math.floor(Math.random()*10)*100 + 500
		});
	});	
	jQuery('.bg-logo-hmh-white').jqFloat({
		width:500,
		height:100,
		speed:1800
	});
	jQuery('.exclusive-learning_classroom').jqFloat({
		width:5,
		height:200,
		speed:1800
	});
	
	jQuery('#snail, #message').jqFloat('stop',{
		width:5,
		height:0,
		speed:30
	});
	jQuery('#snail, #message').hover(function() {
		jQuery(this).jqFloat('play');
	}, function() {
		jQuery(this).jqFloat('stop');
	});
	
	var clicked = false;
	var clicked1 = false;
	//define balloon attribute
	jQuery('#scroll').jqFloat('stop',{
		width:5,
		height:40,
		speed:600,
		minHeight:1200
	});
	jQuery('#scrollH').jqFloat('stop',{
		width:5,
		height:40,
		speed:600,
		minHeight:1200
	});
	jQuery('#start').on('click', function() {
		clicked = !clicked;
		if(clicked){
			jQuery("#scrollH").jqFloat('stop');
			jQuery("#scroll").jqFloat('play');
			}
		else 
			jQuery("#scroll").jqFloat('stop');
			clicked = !clicked;
	});
	jQuery('#stop').on('click', function() {
		clicked1 = !clicked1;
		if(clicked1){
			jQuery("#scroll").jqFloat('stop');
			jQuery("#scrollH").jqFloat('play');
			}
		else 
			jQuery("#scrollH").jqFloat('stop');
			clicked1 = !clicked1;
	});
	
});