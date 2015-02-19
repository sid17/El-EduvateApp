/* jQuery.noConflict() for using the plugin along with other libraries. 
   You can remove it if you won't use other libraries (e.g. prototype, scriptaculous etc.) or 
   if you include jQuery before other libraries in yourdocument's head tag. 
   [more info: http://docs.jquery.com/Using_jQuery_with_Other_Libraries] */
jQuery.noConflict(); 
/* calling thumbnailScroller function with options as parameters */
(function($){
window.onload=function(){ 
	//Initializing the bottom video thumb scroller
	$("#videothumbs").thumbnailScroller({ 
		scrollerType:"clickButtons", 
		scrollerOrientation:"horizontal", 
		scrollSpeed:2, 
		scrollEasing:"easeOutCirc", 
		scrollEasingAmount:600, 
		acceleration:4, 
		scrollSpeed:800, 
		noScrollCenterSpace:10, 
		autoScrolling:0, 
		autoScrollingSpeed:2000, 
		autoScrollingEasing:"easeInOutQuad", 
		autoScrollingDelay:500
	});
	
	//Doing this because setting the width of videothumbs div to 100% and then adding a 5px border around it causes scrollbars to appear so 5+5=10px has to be reduced
	$("#videothumbs").width($(this).width()-10);
	$("#toolbar").width($("#videothumbs").width());
	
	//Setting up the video player
	jwplayer("videoplayer").setup({
			/*skin: "skins/glow.zip",*/
			autostart: false,
			flashplayer: "flash/player.swf",
			file: "videogallery/user_1/playlist_1/videos/video1.flv",
			image: "videogallery/user_1/playlist_1/thumbs/poster1.jpg",
			controlbar: "bottom",
			width:$("#videothumbs").width(),
			height:(($(document).height()-$("#videothumbs").height())-($("#toolbar").height()+30))
	});
	
	//Changing the video stretch mode when the user chooses a setting from the list box
	$("#videoviewmodeselect").change(function(){
			var filename=jwplayer("videoplayer").getPlaylistItem()["file"];
			var imagename=jwplayer("videoplayer").getPlaylistItem()["image"];
			jwplayer("videoplayer").setup({
			autostart: false,
			flashplayer: "flash/player.swf",
			file: filename,
			image: imagename,
			stretching:$(this).val(),
			controlbar: "bottom",
			width:$("#videothumbs").width(),
			height:(($(document).height()-$("#videothumbs").height())-($("#toolbar").height()+30))
			});
	});
	
	//Initailizing pretty loader that shows a loading icon near the cursor when any XHR request is in progress
	$.prettyLoader();
	
	//Loading the playlists via ajax php and attaching a handler when the user changes the playlist, the items in the videothumbs should get updateed via PHP AJAX
	$("#playlistselect").change(function(){
			$(".jTscroller").empty();
			$("#videothumbs").prepend('<img id="ajaxindicator" style="position:absolute; top:50%; left:50%; margin-top:-11px;margin-left:-63px;" width="126" height="22" src="image/ajax.gif"/>');
			$(".jTscroller").load("php/videogalleryengine.php",{playlistid:$("#playlistselect").val()},function(){
					$("#ajaxindicator").remove();
					initvideothumbscroller();																				
			});				  
	});
	$("#playlistselect").load("php/videogalleryengine.php",{playlistselect:0},function(){$("#playlistselect").change()});
	

}

//Edited the thumbnail scroller plugin so that when new content is laoded in the dom the script will reexecute and recalculate dimensions
function initvideothumbscroller()
{
	$(".jTscroller a").click(function(event){
		event.preventDefault();
	  	var hrefval=$(this).attr("href");
		var filedownloadpath=encodeURIComponent($(this).attr("href"));
		$("#downloadvideotool a").attr('href','php/downloadengine.php?file='+filedownloadpath);
	  	jwplayer("videoplayer").load(hrefval);	
	});
	
	$(".jTscroller a:first").click();
	
	var defaults={ //default options
		scrollerType:"clickButtons", 
		scrollerOrientation:"horizontal", 
		scrollSpeed:2, 
		scrollEasing:"easeOutCirc", 
		scrollEasingAmount:600, 
		acceleration:4, 
		scrollSpeed:800, 
		noScrollCenterSpace:10, 
		autoScrolling:0, 
		autoScrollingSpeed:2000, 
		autoScrollingEasing:"easeInOutQuad", 
		autoScrollingDelay:500
	};
	
	var options=defaults;
		//cache vars
		var $this=$(document);
		var $scrollerContainer=$(".jTscrollerContainer");
		var $scroller=$(".jTscroller");
		var $scrollerNextButton=$(".jTscrollerNextButton");
		var $scrollerPrevButton=$(".jTscrollerPrevButton");
		$scrollerNextButton.unbind();
		$scrollerPrevButton.unbind();
		
		if(options.scrollerOrientation=="horizontal"){
			$scrollerContainer.css("width",999999);
			var totalWidth=$scroller.outerWidth(true);
			$scrollerContainer.css("width",totalWidth);
		}
		var totalHeight=$scroller.outerHeight(true);
		if(totalWidth>$this.width() || totalHeight>$this.height()){ //needs scrolling		
			ClickScrolling();
		}
		else{$scrollerPrevButton.add($scrollerNextButton).hide();}
		
		//click scrolling fn
		function ClickScrolling(){
			$scrollerPrevButton.hide();
			$scrollerNextButton.show();
			$scrollerNextButton.click(function(e){ //next button
				e.preventDefault();
				var posX=$scroller.position().left;
				var diffX=totalWidth+(posX-$this.width());
				var posY=$scroller.position().top;
				var diffY=totalHeight+(posY-$this.height());
				$scrollerPrevButton.stop().show("fast");
				if(options.scrollerOrientation=="horizontal"){
					if(diffX>=$this.width()){
						$scroller.stop().animate({left:"-="+$this.width()},options.scrollSpeed,options.scrollEasing,function(){
							if(diffX==$this.width()){
								$scrollerNextButton.stop().hide("fast");
							}
						});
					} else {
						$scrollerNextButton.stop().hide("fast");
						$scroller.stop().animate({left:$this.width()-totalWidth},options.scrollSpeed,options.scrollEasing);
					}
				}else{
					if(diffY>=$this.height()){
						$scroller.stop().animate({top:"-="+$this.height()},options.scrollSpeed,options.scrollEasing,function(){
							if(diffY==$this.height()){
								$scrollerNextButton.stop().hide("fast");
							}
						});
					} else {
						$scrollerNextButton.stop().hide("fast");
						$scroller.stop().animate({top:$this.height()-totalHeight},options.scrollSpeed,options.scrollEasing);
					}
				}
			});
			$scrollerPrevButton.click(function(e){ //previous button
				e.preventDefault();
				var posX=$scroller.position().left;
				var diffX=totalWidth+(posX-$this.width());
				var posY=$scroller.position().top;
				var diffY=totalHeight+(posY-$this.height());
				$scrollerNextButton.stop().show("fast");
				if(options.scrollerOrientation=="horizontal"){
					if(posX+$this.width()<=0){
						$scroller.stop().animate({left:"+="+$this.width()},options.scrollSpeed,options.scrollEasing,function(){
							if(posX+$this.width()==0){
								$scrollerPrevButton.stop().hide("fast");
							}
						});
					} else {
						$scrollerPrevButton.stop().hide("fast");
						$scroller.stop().animate({left:0},options.scrollSpeed,options.scrollEasing);
					}
				}else{
					if(posY+$this.height()<=0){
						$scroller.stop().animate({top:"+="+$this.height()},options.scrollSpeed,options.scrollEasing,function(){
							if(posY+$this.height()==0){
								$scrollerPrevButton.stop().hide("fast");
							}
						});
					} else {
						$scrollerPrevButton.stop().hide("fast");
						$scroller.stop().animate({top:0},options.scrollSpeed,options.scrollEasing);
					}
				}
			});
		}	
}
})(jQuery);