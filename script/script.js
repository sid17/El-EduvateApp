jQuery(document).ready(function() {
				
				if (!(jQuery.browser.msie))
				{
					//for the website preloader
					//QueryLoader.init();
					
					//for the tooltip on main page icons
					jQuery('[title]').colorTip({color:'white'});
					
					//speech related will only run if the browser is non ie
					//for setting the correct width of speech notification div
					var documentwidth=jQuery(document).width();
					var speechinputwidth=jQuery('#speechinput').width();
					var speechnotificationwidth=documentwidth-speechinputwidth-30;
					jQuery("#speechnotification").width(speechnotificationwidth);
					jQuery("#speechnotification").css("left",-(speechnotificationwidth+5));
					
					//checking if html5 speech input is implemented in the browser of not.
					var d=document.getElementById("speech");
					if(!d.onwebkitspeechchange&&!d.onspeechchange)
					{
						jQuery("#speechinput").css("border-color","#900");
						jQuery("#speechinput input").css("display","none");
						jQuery("#speechinput img").css("display","block");
						var notification= "Voice input functionality is currently not supported in your browser.<br /> Please install the latest version (11+) of Google Chrome to acceess this functionality";
						notify(notification,3000);
						jQuery("#speechinput").click(function(){
							var notification= "Voice input functionality is currently not supported in your browser.<br /> Please install the latest version (11+) of Google Chrome to acceess this functionality";
							notify(notification,3000);								   
						});
					}
					else
					{
						var notification= "Voice input functionality is supported in your browser.<br /> *Valid voice commands are: CHAT, VIDEO, PICTURE, LIVE, CONTACT";
						notify(notification,3000);
					}
					
					//for the icons in the dockbar being sortable
					jQuery("#sortable").sortable({
						scroll: true,
						revert: true,
						containment: 'document'
					});
				}
				else
				{
					//If browser is IE i will remove speech divs
					jQuery("#speechinput").remove();
					jQuery("#speechnotification").remove();
				}
				
				jQuery('#toggle').toggle(
					
					function() {
					
						//Rotate toggle
						jQuery(this).stop().animate({rotate : '-=45deg'});
						jQuery('#dashboard').stop().animate({bottom : '0px'});
						/*jQuery('#dashboard-menu').stop().animate({left : '3em'});*/
						var temp=jQuery(window).width()/2;
						var temp2=jQuery('#dashboard-menu').width()/2;
						var temp3=temp-temp2;
						jQuery('#dashboard-menu').stop().animate({left :temp3});
					},
					
					function() {
						
						//Revert rotate toggle
						jQuery(this).stop().animate({rotate : '0deg'});
						jQuery('#dashboard').stop().animate({bottom : '-150px'}, 700);
						jQuery('#dashboard-menu').stop().animate({left : '-65em'});
					}
				);
				
				jQuery('#toggle').click();
				
				setheader();
				setdashboard();
				
				jQuery(window).resize(function() {
  					setheader();
					setdashboard();
				});
				
				//assign the ColorBox event to elements
				jQuery(".webpage").colorbox({iframe:true, width:"100%", height:"100%"});					
			});	

function processspeech()
{
	var speechtext=jQuery("#speech").val();
	var flag=1;
	switch (speechtext)
	{
		case "chat":
			jQuery("#chat").click();
			break;
		case "video":
			jQuery("#video").click();
			break;
		case "picture":
			jQuery("#picture").click();
			break;
		case "live":
			jQuery("#live").click();
			break;
		case "contact":
			jQuery("#contact").click();
			break;
		default:
			flag=0;
			for (i=1;i<=3;i++) jQuery("#speechinput").animate({"border-color":"#900"},500).animate({"border-color":"#fff"},500);
	}
	if (flag==1) for (i=1;i<=3;i++) jQuery("#speechinput").animate({"border-color":"#060"},500).animate({"border-color":"#fff"},500);
	else
	{
		var notification="You spoke" + speechtext;
		var x=document.getElementById('myInput');
		x.value=speechtext;
		notify(notification);
	}
}

function notify(notification,time)
{
	jQuery("#centerbabaflash").css("visibility","hidden");
	if (typeof time == 'undefined' ) time = 2000;
	jQuery("#speechnotification").html(notification);
	jQuery("#speechnotification").animate({"left":0},1500).delay(time).animate({"left":-((jQuery(this).width())+5)},1500,function(){jQuery("#centerbabaflash").css("visibility","visible")});
	//jQuery("#centerbabaflash").css("display","inline");
}

function setheader()
{
	jQuery("#header").width(jQuery(window).width());
	//setting midsitename
	var docwidthhalf=jQuery(window).width()/2;
	var sitenamewidthhalf=jQuery('#midsitename').width()/2;
	var temp3=docwidthhalf-sitenamewidthhalf;
	var leftlogowidth=jQuery("#leftlogo").width()+10;
	var rightlogowidth=jQuery("#rightlogo").width()+10;
	if (temp3<leftlogowidth)
	{
		var temp4=(((jQuery(window).width()-leftlogowidth-rightlogowidth)/2)-sitenamewidthhalf)+leftlogowidth;
		jQuery("#midsitename").stop().animate({left:temp4});	
	}
	else
	{
		jQuery("#midsitename").stop().animate({left:temp3});
	}
}

function setdashboard()
{
	jQuery("#dashboard").width(jQuery(window).width());
	var temp=jQuery(window).width()/2;
	var temp2=jQuery('#dashboard-menu').width()/2;
	var temp3=temp-temp2;
	jQuery('#dashboard-menu').stop().animate({left :temp3});	
}
