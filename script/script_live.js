$(document).ready(function() {
				
				//for channel header bar slideup and down
				$('#toggle').toggle(
					
					function() {
						$('#channel_header').slideUp('slow');
						$('#toggle img').attr('src','image/channelheadertoggle.png');
					},
					
					function() {
						$('#channel_header').slideDown('slow');
						$('#toggle img').attr('src','image/channelheadertoggleminus.png');
					}
				);
				
				//for channel button hover
				$('#channel1').hover(function(){$('#channel1 a').css("top","-100px")},function(){$('#channel1 a').css("top","0px")});				
				$('#channel2').hover(function(){$('#channel2 a').css("top","-100px")},function(){$('#channel2 a').css("top","0px")});				
				$('#channel3').hover(function(){$('#channel3 a').css("top","-100px")},function(){$('#channel3 a').css("top","0px")});				
				$('#channel4').hover(function(){$('#channel4 a').css("top","-100px")},function(){$('#channel4 a').css("top","0px")});				
				$('#channel5').hover(function(){$('#channel5 a').css("top","-100px")},function(){$('#channel5 a').css("top","0px")});				
				$('#channel6').hover(function(){$('#channel6 a').css("top","-100px")},function(){$('#channel6 a').css("top","0px")});
				$('#channel7').hover(function(){$('#channel7 a').css("top","-100px")},function(){$('#channel6 a').css("top","0px")});
				$('#channel8').hover(function(){$('#channel8 a').css("top","-100px")},function(){$('#channel6 a').css("top","0px")});
				$('#channel9').hover(function(){$('#channel9 a').css("top","-100px")},function(){$('#channel6 a').css("top","0px")});
				$('#channel10').hover(function(){$('#channel10 a').css("top","-100px")},function(){$('#channel6 a').css("top","0px")});
				/*$('.channel2 a').hover(function(){$(this).stop().animate({'opacity' : '0'}, 1000);},function(){$(this).stop().animate({'opacity' : '1'}, 1000);});
				$('.channel3 a').hover(function(){$(this).stop().animate({'opacity' : '0'}, 1000);},function(){$(this).stop().animate({'opacity' : '1'}, 1000);});
				$('.channel4 a').hover(function(){$(this).stop().animate({'opacity' : '0'}, 1000);},function(){$(this).stop().animate({'opacity' : '1'}, 1000);});
				$('.channel5 a').hover(function(){$(this).stop().animate({'opacity' : '0'}, 1000);},function(){$(this).stop().animate({'opacity' : '1'}, 1000);});
				$('.channel6 a').hover(function(){$(this).stop().animate({'opacity' : '0'}, 1000);},function(){$(this).stop().animate({'opacity' : '1'}, 1000);});*/
				
				//for channel button click
				$('#channel1 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/bkrlive?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				$('#channel2 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/bkrlive2?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				$('#channel3 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/bkrlive3?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				$('#channel4 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/bkrlive4?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				$('#channel5 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/bkrlive5?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				$('#channel6 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/bkrlive6?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				$('#channel7 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/satguru?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				$('#channel8 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/bkrliveharidwar?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				$('#channel9 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/bkrlivesangrar?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				$('#channel10 a').click(function(){$('#channel_player').html('<iframe width="640" height="385" src="http://cdn.livestream.com/embed/bkrliveprogrammes?layout=4&color=0xe7e7e7&autoPlay=true&mute=false&iconColorOver=0x888888&iconColor=0x777777&allowchat=flase&height=385&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');});
				//code to bring the channel logos to the center
				var channellogowidth=$('.channel1').width();
				var channellogoleftmargin=$('.channel1').css('margin-left');
				var channellogostotalsize=(channellogowidth*6)+((channellogoleftmargin.split('p'))[0]*6);
				var documentwidth=$(document).width();
				var halfdocumentwidth=(documentwidth/2);
				var halfchannellogostotalsize=(channellogostotalsize/2);
				var topad=halfdocumentwidth-halfchannellogostotalsize;
				$('#channel_header').css({'padding-left':topad});
				
				//for custom scrollbar
				$(function()
				{
					$('#channel_header').jScrollPane();
				});
				
			});