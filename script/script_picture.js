$(document).ready(function(){
	$.prettyLoader();
	$("#albumselect").change(function(){
			$("#pictures").html("<img src='image/ajax.gif'/>");
			$("#pictures").load("php/picturegalleryengine.php",{albumid:$("#albumselect").val()},function(){initgallery();$("#pictures a:first").click();});				  
	});
	$("#albumselect").load("php/picturegalleryengine.php",{albumselect:1},function(){$("#albumselect").change()});
});


function initgallery()
{
//for thumbnail click handler reattach
	$defaultViewMode="full"; //full (fullscreen background), fit (fit to window), original (no scale)
	//cache vars
	$bg=$("#bg");
	$bgimg=$("#bg #bgimg");
	$preloader=$("#preloader");
	$outer_container=$("#outer_container");
	$outer_container_a=$("#outer_container a.thumb_link");
	$toolbar=$("#toolbar");
	$nextimage_tip=$("#nextimage_tip");
$outer_container_a.click(function(event){
		event.preventDefault();
		var $this=this;
		$bgimg.css("display","none");
		$preloader.fadeIn("fast"); //show preloader
		//style clicked thumbnail
		$outer_container_a.each(function() {
    		$(this).children(".selected").css("display","none");
  		});
		$(this).children(".selected").css("display","block");
		//get and store next image and selected thumb 
		$outer_container.data("selectedThumb",$this); 
		$bg.data("nextImage",$(this).next().attr("href")); 	
		$bg.data("newTitle",$(this).children("img").attr("title")); //get and store new image title attribute
		itemIndex=getIndex($this); //get clicked item index
		lastItemIndex=($outer_container_a.length)-1; //get last item index
		$bgimg.attr("src", "").attr("src", $this); //switch image
	});





//for custom scroller
	$toolbar.data("imageViewMode",$defaultViewMode); //default view mode
	ImageViewMode($toolbar.data("imageViewMode"));
	//cache vars
	$customScrollBox=$("#customScrollBox");
	$customScrollBox_container=$("#customScrollBox .container");
	$customScrollBox_content=$("#customScrollBox .content");
	$dragger_container=$("#dragger_container");
	$dragger=$("#dragger");
	
	CustomScroller();
	
	function CustomScroller(){
		outerMargin=0;
		innerMargin=20;
		$customScrollBox.height($(window).height()-outerMargin);
		$dragger_container.height($(window).height()-innerMargin);
		visibleHeight=$(window).height()-outerMargin;
		if($customScrollBox_container.height()>visibleHeight){ //custom scroll depends on content height
			$dragger_container.css("display","block");
			$dragger.css("display","block");
			totalContent=$customScrollBox_content.height();
			draggerContainerHeight=$(window).height()-innerMargin;
			animSpeed=400; //animation speed
			easeType="easeOutCirc"; //easing type
			bottomSpace=1.05; //bottom scrolling space
			targY=0;
			draggerHeight=$dragger.height();
			$dragger.draggable({ 
				axis: "y", 
				containment: "parent", 
				drag: function(event, ui) {
					Scroll();
				}, 
				stop: function(event, ui) {
					DraggerOut();
				}
			});

			//scrollbar click
			$dragger_container.click(function(e) {
				var mouseCoord=(e.pageY - $(this).offset().top);
				var targetPos=mouseCoord+$dragger.height();
				if(targetPos<draggerContainerHeight){
					$dragger.css("top",mouseCoord);
					Scroll();
				} else {
					$dragger.css("top",draggerContainerHeight-$dragger.height());
					Scroll();
				}
			});

			//mousewheel
			$(function($) {
				$customScrollBox.bind("mousewheel", function(event, delta) {
					vel = Math.abs(delta*10);
					$dragger.css("top", $dragger.position().top-(delta*vel));
					Scroll();
					if($dragger.position().top<0){
						$dragger.css("top", 0);
						$customScrollBox_container.stop();
						Scroll();
					}
					if($dragger.position().top>draggerContainerHeight-$dragger.height()){
						$dragger.css("top", draggerContainerHeight-$dragger.height());
						$customScrollBox_container.stop();
						Scroll();
					}
					return false;
				});
			});

			function Scroll(){
				var scrollAmount=(totalContent-(visibleHeight/bottomSpace))/(draggerContainerHeight-draggerHeight);
				var draggerY=$dragger.position().top;
				targY=-draggerY*scrollAmount;
				var thePos=$customScrollBox_container.position().top-targY;
				$customScrollBox_container.stop().animate({top: "-="+thePos}, animSpeed, easeType); //with easing
			}

			//dragger hover
			$dragger.mouseup(function(){
				DraggerOut();
			}).mousedown(function(){
				DraggerOver();
			});

			function DraggerOver(){
				$dragger.css("background", "url(image/picturegalley_images/round_custom_scrollbar_bg_over.png)");
			}

			function DraggerOut(){
				$dragger.css("background", "url(image/picturegalley_images/round_custom_scrollbar_bg.png)");
			}
		} else { //hide custom scrollbar if content is short
			$dragger,$dragger_container.css("display","none");
		}
	}
}
