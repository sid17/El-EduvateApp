<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Translation Games for Kids from hindi to english and vice-versa" />
<meta name="language" content="en" />

	<link href="./css/bootstrap2.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="css/normalize.css@v=1.8.2.0" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/pkp.css@v=1.8.2.0" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/header.css@v=1.8.2.0" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/footer.css@v=1.8.2.0" />
		<script src="./js/jquery-1.8.3.min.js"></script>
		<script src="./js/bootstrap-transition.js"></script>
		<script src="./js/bootstrap-modal.js"></script>
		<script src="./js/jqfloat.min.js"></script>
		<script src="./js/float.js"></script>
		<style>
			.divDemoBody  {
				
				}
			.divDemoBody p {
				font-size: 18px;
				line-height: 140%;
				padding-top: 12px;
				}
			.divDialogElements input {
				font-size: 18px;
				padding: 3px; 
				height: 32px; 
				width: 500px; 
				}
			.divButton {
				padding-top: 12px;
				}
			</style>
		<script>
			$(document).ready(function() {
				$('#windowTitleDialog').bind('show', function () {
					document.getElementById ("xlInput").value = document.title;
					});
				});
			function closeDialog () {
				$('#windowTitleDialog').modal('hide'); 
				};

			function openDialog () {
				$('#windowTitleDialog').modal('show'); 
				};

			function okClicked () {
				document.title = document.getElementById ("xlInput").value;
				closeDialog ();
				};
			</script>
		

<script>
    function myfunction()
    {
   	var x=document.getElementById('editor').value;
var strString = x;
var regex = /^[a-zA-Z ]*$/;
if (strString.match(regex))
{
alert("english");
document.getElementById('myspeechconvert').value=x;
do_tts();
OnCall(x);
$.ajax({
type: "POST",
url: "convert.php",
data: { name:x }
})
.done(function(msg1) 
{
//document.getElementById('eword').innerHTML=x;
document.getElementById ("eword").value = x;

//document.getElementById('eng1').innerHTML=msg1;
document.getElementById('eng1').value=msg1;
$.ajax({
type: "POST",
url: "trans_eng.php",
data: { name:x }
})
.done(function(msg2) 
{

//document.getElementById('hin2').innerHTML=msg1;

//document.getElementById('hword').innerHTML=msg2;
document.getElementById('hword').value=msg2;
//alert(msg1);
});
$.ajax({
type: "POST",
url: "trans_eng.php",
data: { name:msg1 }
})
.done(function(msg2) 
{
//document.getElementById('hin2').innerHTML=msg2;
document.getElementById('hin2').value=msg2;
openDialog ();
//alert(msg1);
});
//alert(msg1);
});


}
else
{
	//document.getElementById('hword').innerHTML=x;
document.getElementById('hword').value=x;
//alert(hword);
//alert(x);
   	$.ajax({
  	type: "POST",
  	url: "trans.php",
  	data: { name:x }
	})
  	.done(function(msg) 
  	{
	  	document.getElementById('myspeechconvert').value=msg;
	  	do_tts();
	  	OnCall(msg);
	  	
	  	//alert("eword");
		//alert(msg);
	  	
	  	//document.getElementById('eword').innerHTML=msg;
document.getElementById('eword').value=msg;
	  	$.ajax({
	  	type: "POST",
	  	url: "convert.php",
	  	data: { name:msg }
		})
	  	.done(function(msg2) 
	  	{
	  		//alert(msg2);

			//document.getElementById('eng1').innerHTML=msg2;


document.getElementById('eng1').value=msg2;
//alert("eng1");
//alert(msg2);

		$.ajax({
	  	type: "POST",
	  	url: "trans_eng.php",
	  	data: { name:msg2 }
		})
	  	.done(function(msg1) 
	  	{
	  		
			//document.getElementById('hin2').innerHTML=msg1;
document.getElementById('hin2').value=msg1;
openDialog ();
//alert("hin2");
//alert(msg1);

			//alert(msg1);
	  	});

	  	});
  	
  	
  	
  	});



  }  
    
    }

    </script>




<title>Interactive Translation Games for Kids</title>
<link rel="shortcut icon" href="favicon.ico" />


<style>
#branah-keyboard{width:630px;line-height:20px;font-size:1em}.branah-key,#branah-backspace,#branah-tab,#branah-k25,#branah-caps-lock,#branah-enter,#branah-left-shift,#branah-right-shift,#branah-space,#branah-left-ctrl,#branah-right-ctrl,#branah-left-alt,#branah-right-alt,#branah,#branah-escape{float:left;display:block;margin:1px;height:3em;line-height:2.75em;text-align:center;color:gray}.branah-key{width:40px}#branah-backspace{width:78px}#branah-tab{width:62px}#branah-k25{width:56px}#branah-caps-lock{width:76px}#branah-enter{width:84px}#branah-left-shift{width:46px}#branah-right-shift{width:114px}#branah-space{width:246px;text-align:center}#branah-right-ctrl,#branah-right-alt,#branah-escape{width:62px}#branah-left-ctrl,#branah-left-alt,#branah{width:60px}.branah-label-reference{color:gray;font-size:.9em;line-height:12px;text-align:left;cursor:default}.branah-label-natural{margin-top:-5px;color:#e0115f;font-size:1.5em;line-height:20px;text-align:center;cursor:default}.branah-label-shift{margin-top:-5px;color:#057cb5;font-size:1.5em;line-height:20px;text-align:center;cursor:default}#branah-k29 .branah-label-reference,#branah-k32 .branah-label-reference{color:#000}.branah-recessed span{color:#3C0}.branah-clear{clear:both};
    </style>

<style>
	
	

	

	.flip-container {
			-webkit-perspective: 1000;
			-moz-perspective: 1000;
			perspective: 1000;

			border: 1px solid #ccc;
		}

			
			  #flip-togglepro.flip .flipper {
				-webkit-transform: rotateY(180deg);
				-moz-transform: rotateY(180deg);
				transform: rotateY(180deg);
				filter: FlipH;
    			-ms-filter: "FlipH";
			}
                        
                        #flip-toggledis.flip .flipper {
				-webkit-transform: rotateY(180deg);
				-moz-transform: rotateY(180deg);
				transform: rotateY(180deg);
				filter: FlipH;
    			-ms-filter: "FlipH";
			}
                        
                        #flip-togglesi.flip .flipper {
				-webkit-transform: rotateY(180deg);
				-moz-transform: rotateY(180deg);
				transform: rotateY(180deg);
				filter: FlipH;
    			-ms-filter: "FlipH";
			}
			
			 #flip-toggleterm.flip .flipper {
				-webkit-transform: rotateY(180deg);
				-moz-transform: rotateY(180deg);
				transform: rotateY(180deg);
				filter: FlipH;
    			-ms-filter: "FlipH";
			}

		.flip-container, .front, .back {
			width: 320px;
			height: 427px;
		}

		.flipper {
			-webkit-transition: 0.6s;
			-webkit-transform-style: preserve-3d;

			-moz-transition: 0.6s;
			-moz-transform-style: preserve-3d;

			transition: 0.6s;
			transform-style: preserve-3d;

			position: relative;
		}

		.front, .back {
			-webkit-backface-visibility: hidden;
			-moz-backface-visibility: hidden;
			backface-visibility: hidden;

			position: absolute;
			top: 0;
			left: 0;
		}

		.front {
			background: lightgreen;
			z-index: 2;
		}

		.back {
			background: lightblue;
			-webkit-transform: rotateY(180deg);
			-moz-transform: rotateY(180deg);
			transform: rotateY(180deg);
		}

		.front .name {
			font-size: 2em;
			display: inline-block;
			background: rgba(33, 33, 33, 0.9);
			color: #f8f8f8;
			font-family: Courier;
			padding: 5px 10px;
			border-radius: 5px;
			bottom: 60px;
			left: 25%;
			position: absolute;
			text-shadow: 0.1em 0.1em 0.05em #333;

			-webkit-transform: rotate(-20deg);
			-moz-transform: rotate(-20deg);
			transform: rotate(-20deg);
		}

		.back-logo {
			position: absolute;
			top: 40px;
			left: 90px;
			width: 160px;
			height: 117px;
			background: url(logo.png) 0 0 no-repeat;
		}

		.back-title {
			font-weight: bold;
			color: #00304a;
			position: absolute;
			top: 180px;
			left: 0;
			right: 0;
			text-align: center;
			text-shadow: 0.1em 0.1em 0.05em #acd7e5;
			font-family: Courier;
			font-size: 2em;
		}

		.back p {
			position: absolute;
			bottom: 40px;
			left: 0;
			right: 0;
			text-align: center;
			padding: 0 20px;
		}

		/* vertical */
		.vertical.flip-container {
			position: relative;
		}

			.vertical .back {
				-webkit-transform: rotateX(180deg);
				-moz-transform: rotateX(180deg);
				transform: rotateX(180deg);
			}

			.vertical.flip-container .flipper {
				-webkit-transform-origin: 100% 213.5px;
				-moz-transform-origin: 100% 213.5px;
				transform-origin: 100% 213.5px;
			}

			.vertical.flip-container:hover .flipper {
				-webkit-transform: rotateX(-180deg);
				-moz-transform: rotateX(-180deg);
				transform: rotateX(-180deg);
			}
	
</style>



</head>
<body>

<div class="divDemoBody" >
			
<div id="windowTitleDialog"  class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true">
				
				<div class="modal-body" style="margin-top:0px">
					<div class="divDialogElements">
						<input style="display:none"class="xlarge" id="xlInput" name="xlInput" type="text" />
						<div id="content" style="position:absolute;height:100px;width:100px;margin-top:0px">Loading...</div>
				<input class="xlarge" id="eng1" name="eng1" type="text" style="position:relative;margin-top:100px" />
						<input class="xlarge" id="eword" name="hin2" type="text" />
						<input class="xlarge" id="hword" name="hword" type="text" />
						<input class="xlarge" id="hin2" name="eword" type="text" />


<div id="speechinput">
  <input id="speech" type="text" speech="speech" x-webkit-speech="x-webkit-speech" onspeechchange="processspeech();" onwebkitspeechchange="processspeech();" />
  <input style="display:none" type="text" id="myInput" value="initial"/>
<div style="display:none" id="speechnotification"></div>

<div style="font-size:25px;display:none">
<input id="myspeechconvert" name="txt" type="text" value="" /><br />
<input name="filename" type="text" /><br />
<input type="checkbox" name="save" /><br/>
 <input name="submit" type="submit" value="Convert" onClick="do_tts()" />
</div>
<div id="player"></div>







						</div>
					</div>
				<div class="modal-footer">
					<a href="#" class="btn" onclick="closeDialog ();" style="color:black" >Cancel</a>
					
					</div>
				</div>
			
			
</div>


</div>

<a href="logout.php" style="position:fixed;margin-left:850px;margin-top:20px;width:80px;z-index:1000" class="btn btn-success">Log Out
</a>
<a href="login.php" style="position:fixed;margin-left:1000px;margin-top:20px;width:80px;z-index:1000" class="btn btn-success">Log In
</a>
<a href="register.php" style="position:fixed;margin-left:1150px;margin-top:20px;width:80px;z-index:1000" class="btn btn-success">Register
</a>





			
			<div id="planet-grass" style="z-index:30;">
  <div id="planet" style="z-index:30;">
    <div id="wrapper" style="z-index:30;">
      


<div id="header" class="component" style="z-index:30;">
	
	<div class="bg-logo-hmh-white" style="z-index:30;"></div>
	

	
			
			<div id="wooden-sign" style="z-index:30;">
	<!--p>
				Need support?				<span>Send us an email at: <a href="mailto:abc@eduvate.org">abc@eduvate.org</a></span>	</p-->
				<img src="./images/look_down.gif" alt="cartoon">
</div>		

    
	<a href="" class="exclusive-learning_classroom" tag_category="header" tag_action="click" tag_label = "classroom">
        Click here to go to main site!</a></div>    
		<div class="main-holder" style="">
        <!-- main-nav -->
                	                <!-- main block -->
          <div id="content" class="component" style="z-index:30;">
       
<div id="topmenu" style="z-index:30;">
                                                               <div class="product active" style="margin-left:-30px;">
            <a href="index.php"><img style="width:140px;" src="./images/icons/icon_home_access.png" alt="Science"title="Go to Home"></a>
         </div>
         <ul>
            <li class="science"><a href="pronoun.php"><img style="width:140px;" src="./images/icons/creativity-icon.png" alt="Science" title="Play Science"></a></li>
            <li class="games"><a href="maths.php"><img style="width:140px;" src="./images/icons/mathematics-icon.png" alt="Mathematics" title="Go to Maths"></a></li>
            <li class="maths"><a href="trans-game.php"><img style="width:140px;" src="./images/icons/literacy-icon.png" alt="Literacy" title="Go to Liter"></a></li>
            <li class="lang"><a href="record.php"><img style="width:140px;" src="./images/icons/languagedevelopment-icon.png" alt="LanguageDevelopment" title="Go to Lang"></a></li>
         </ul>
         </div>
    <div style="height:430px;margin-top:50px;width:890px;z-index:30;">




<div class="main_content" style="margin-left:100px; z-index:30;" >
<p><textarea id="editor" name="editor" rows="6" cols="100" dir="ltr" style="width:620px"></textarea></p>




            <p><span id="response"></span></p>

          
            <div id="keyboard" style="z-index:30;"><div id="branah-keyboard"><button id="branah-k0" class="branah-key"><div class="branah-label-reference">`</div><div class="branah-label-natural">&nbsp;</div></button><button id="branah-k1" class="branah-key"><div class="branah-label-reference">1</div><div class="branah-label-natural">1</div></button><button id="branah-k2" class="branah-key"><div class="branah-label-reference">2</div><div class="branah-label-natural">2</div></button><button id="branah-k3" class="branah-key"><div class="branah-label-reference">3</div><div class="branah-label-natural">3</div></button><button id="branah-k4" class="branah-key"><div class="branah-label-reference">4</div><div class="branah-label-natural">4</div></button><button id="branah-k5" class="branah-key"><div class="branah-label-reference">5</div><div class="branah-label-natural">5</div></button><button id="branah-k6" class="branah-key"><div class="branah-label-reference">6</div><div class="branah-label-natural">6</div></button><button id="branah-k7" class="branah-key"><div class="branah-label-reference">7</div><div class="branah-label-natural">7</div></button><button id="branah-k8" class="branah-key"><div class="branah-label-reference">8</div><div class="branah-label-natural">8</div></button><button id="branah-k9" class="branah-key"><div class="branah-label-reference">9</div><div class="branah-label-natural">9</div></button><button id="branah-k10" class="branah-key"><div class="branah-label-reference">0</div><div class="branah-label-natural">0</div></button><button id="branah-k11" class="branah-key"><div class="branah-label-reference">-</div><div class="branah-label-natural">-</div></button><button id="branah-k12" class="branah-key"><div class="branah-label-reference">=</div><div class="branah-label-natural">ृ</div></button><button id="branah-backspace"><span>Backspace</span></button><div class="branah-clear"></div><button id="branah-tab"><span>Tab</span></button><button id="branah-k13" class="branah-key"><div class="branah-label-reference">q</div><div class="branah-label-natural">ौ</div></button><button id="branah-k14" class="branah-key"><div class="branah-label-reference">w</div><div class="branah-label-natural">ै</div></button><button id="branah-k15" class="branah-key"><div class="branah-label-reference">e</div><div class="branah-label-natural">ा</div></button><button id="branah-k16" class="branah-key"><div class="branah-label-reference">r</div><div class="branah-label-natural">ी</div></button><button id="branah-k17" class="branah-key"><div class="branah-label-reference">t</div><div class="branah-label-natural">ू</div></button><button id="branah-k18" class="branah-key"><div class="branah-label-reference">y</div><div class="branah-label-natural">ब</div></button><button id="branah-k19" class="branah-key"><div class="branah-label-reference">u</div><div class="branah-label-natural">ह</div></button><button id="branah-k20" class="branah-key"><div class="branah-label-reference">i</div><div class="branah-label-natural">ग</div></button><button id="branah-k21" class="branah-key"><div class="branah-label-reference">o</div><div class="branah-label-natural">द</div></button><button id="branah-k22" class="branah-key"><div class="branah-label-reference">p</div><div class="branah-label-natural">ज</div></button><button id="branah-k23" class="branah-key"><div class="branah-label-reference">[</div><div class="branah-label-natural">ड</div></button><button id="branah-k24" class="branah-key"><div class="branah-label-reference">]</div><div class="branah-label-natural">़</div></button><button id="branah-k25"><div class="branah-label-reference">\</div><div class="branah-label-natural">ॉ</div></button><div class="branah-clear"></div><button id="branah-caps-lock"><span>Caps Lock</span></button><button id="branah-k26" class="branah-key"><div class="branah-label-reference">a</div><div class="branah-label-natural">ो</div></button><button id="branah-k27" class="branah-key"><div class="branah-label-reference">s</div><div class="branah-label-natural">े</div></button><button id="branah-k28" class="branah-key"><div class="branah-label-reference">d</div><div class="branah-label-natural">्</div></button><button id="branah-k29" class="branah-key"><div class="branah-label-reference">f</div><div class="branah-label-natural">ि</div></button><button id="branah-k30" class="branah-key"><div class="branah-label-reference">g</div><div class="branah-label-natural">ु</div></button><button id="branah-k31" class="branah-key"><div class="branah-label-reference">h</div><div class="branah-label-natural">प</div></button><button id="branah-k32" class="branah-key"><div class="branah-label-reference">j</div><div class="branah-label-natural">र</div></button><button id="branah-k33" class="branah-key"><div class="branah-label-reference">k</div><div class="branah-label-natural">क</div></button><button id="branah-k34" class="branah-key"><div class="branah-label-reference">l</div><div class="branah-label-natural">त</div></button><button id="branah-k35" class="branah-key"><div class="branah-label-reference">;</div><div class="branah-label-natural">च</div></button><button id="branah-k36" class="branah-key"><div class="branah-label-reference">'</div><div class="branah-label-natural">ट</div></button><button id="branah-enter" class="branah-enter"><span>Enter</span></button><div class="branah-clear"></div><button id="branah-left-shift"><span>Shift</span></button><button id="branah-k47" class="branah-key"><div class="branah-label-reference">\</div><div class="branah-label-natural">ॉ</div></button><button id="branah-k37" class="branah-key"><div class="branah-label-reference">z</div><div class="branah-label-natural">&nbsp;</div></button><button id="branah-k38" class="branah-key"><div class="branah-label-reference">x</div><div class="branah-label-natural">ं</div></button><button id="branah-k39" class="branah-key"><div class="branah-label-reference">c</div><div class="branah-label-natural">म</div></button><button id="branah-k40" class="branah-key"><div class="branah-label-reference">v</div><div class="branah-label-natural">न</div></button><button id="branah-k41" class="branah-key"><div class="branah-label-reference">b</div><div class="branah-label-natural">व</div></button><button id="branah-k42" class="branah-key"><div class="branah-label-reference">n</div><div class="branah-label-natural">ल</div></button><button id="branah-k43" class="branah-key"><div class="branah-label-reference">m</div><div class="branah-label-natural">स</div></button><button id="branah-k44" class="branah-key"><div class="branah-label-reference">,</div><div class="branah-label-natural">,</div></button><button id="branah-k45" class="branah-key"><div class="branah-label-reference">.</div><div class="branah-label-natural">.</div></button><button id="branah-k46" class="branah-key"><div class="branah-label-reference">/</div><div class="branah-label-natural">य</div></button><button id="branah-right-shift"><span>Shift</span></button><div class="branah-clear"></div><button id="branah-left-ctrl"><span>Ctrl</span></button><button id="branah"><span>branah</span></button><button id="branah-left-alt"><span>Alt</span></button><button id="branah-space"><span>Space</span></button><button id="branah-right-alt"><span>Alt</span></button><button id="branah-escape" title="Turn on/off keyboard input conversion"><span>Esc</span></button><button id="branah-right-ctrl"><span>Ctrl</span></button><div class="branah-clear"></div></div></div>

<div id="submit_func"><input type="image" style="width:100px;height:80px;margin-left:650px;margin-top:-10px;" src="images/submit.png" value="submit" onclick="myfunction()"/> </div>
    </div>

<div id="last_query" style="">
				<a data-toggle="modal" class="btn btn-primary" href="#windowTitleDialog" >Last Query</a>
</div>









</div>
    
      
    





			
 </div>




	</div>
	
	



    </div>
   
  <!--div class="inner-box-bottom"></div-->          </div>
      </div>
           	








<div id="footer" class="component ext-footer__classroom ext-footer__characterDt ext-footer__curiousGeorge">
	
	

<div id="bottom"></div>

 	      </div>

		







</body>


<script>!window.jQuery && document.write('<script src="./script/jquery.min.js"><\/script>');</script>

    <script>
var branah={};branah.util={keyCode:function(b){if(!b){var b=window.event}if($.browser.mozilla){var a=b.keyCode;switch(a){case 59:a=186;break;case 107:a=187;break;case 109:a=189;break;case 61:a=187;break;case 173:a=189;break}return a}if($.browser.opera){var a=b.keyCode;switch(a){case 59:a=186;break;case 61:a=187;break;case 109:a=189;break}return a}return b.keyCode},isCtrl:function(a){if(!a){var a=window.event}return a.ctrlKey},isAlt:function(a){if(!a){var a=window.event}return a.altKey},isShift:function(a){if(!a){var a=window.event}return a.shiftKey},insertAtCaret:function(a,f){var d=this.getSelectionStart(a);var b=this.getSelectionEnd(a);var c=a.value.length;a.value=a.value.substring(0,d)+f+a.value.substring(b,c);this.setCaretPosition(a,d+f.length,0)},deleteAtCaret:function(c,b,a){var g=this.getSelectionStart(c);var d=this.getSelectionEnd(c);var f=c.value.length;if(b>g){b=g}if(d+a>f){a=f-d}var h=c.value.substring(g-b,d+a);c.value=c.value.substring(0,g-b)+c.value.substring(d+a);this.setCaretPosition(c,g-b,0);return h},getSelectionStart:function(a){a.focus();if(a.selectionStart!==undefined){return a.selectionStart}else{if(document.selection){var b=document.selection.createRange();if(b==null){return 0}var d=a.createTextRange();var c=d.duplicate();d.moveToBookmark(b.getBookmark());c.setEndPoint("EndToStart",d);return c.text.length}}return 0},getSelectionEnd:function(a){a.focus();if(a.selectionEnd!==undefined){return a.selectionEnd}else{if(document.selection){var b=document.selection.createRange();if(b==null){return 0}var d=a.createTextRange();var c=d.duplicate();d.moveToBookmark(b.getBookmark());c.setEndPoint("EndToStart",d);return c.text.length+b.text.length}}return a.value.length},setCaretPosition:function(b,d,a){var c=b.value.length;if(d>c){d=c}if(d+a>c){a=c-a}b.focus();if(b.setSelectionRange){b.setSelectionRange(d,d+a)}else{if(b.createTextRange){var f=b.createTextRange();f.collapse(true);f.moveEnd("character",d+a);f.moveStart("character",d);f.select()}}b.focus()},selectAll:function(a){this.setCaretPosition(a,0,a.value.length)}};branah.layout=function(){this.keys=[];this.deadkeys=[];this.dir="ltr";this.name="US";this.lang="en"};branah.layout.prototype.loadDefault=function(){this.keys=[{i:"k0",c:"0",n:"`",s:"~"},{i:"k1",c:"0",n:"1",s:"!"},{i:"k2",c:"0",n:"2",s:"@"},{i:"k3",c:"0",n:"3",s:"#"},{i:"k4",c:"0",n:"4",s:"$"},{i:"k5",c:"0",n:"5",s:"%"},{i:"k6",c:"0",n:"6",s:"^"},{i:"k7",c:"0",n:"7",s:"&"},{i:"k8",c:"0",n:"8",s:"*"},{i:"k9",c:"0",n:"9",s:"("},{i:"k10",c:"0",n:"0",s:")"},{i:"k11",c:"0",n:"-",s:"_"},{i:"k12",c:"0",n:"=",s:"+"},{i:"k13",c:"1",n:"q",s:"Q"},{i:"k14",c:"1",n:"w",s:"W"},{i:"k15",c:"1",n:"e",s:"E"},{i:"k16",c:"1",n:"r",s:"R"},{i:"k17",c:"1",n:"t",s:"T"},{i:"k18",c:"1",n:"y",s:"Y"},{i:"k19",c:"1",n:"u",s:"U"},{i:"k20",c:"1",n:"i",s:"I"},{i:"k21",c:"1",n:"o",s:"O"},{i:"k22",c:"1",n:"p",s:"P"},{i:"k23",c:"0",n:"[",s:"{"},{i:"k24",c:"0",n:"]",s:"}"},{i:"k25",c:"0",n:"\\",s:"|"},{i:"k26",c:"1",n:"a",s:"A"},{i:"k27",c:"1",n:"s",s:"S"},{i:"k28",c:"1",n:"d",s:"D"},{i:"k29",c:"1",n:"f",s:"F"},{i:"k30",c:"1",n:"g",s:"G"},{i:"k31",c:"1",n:"h",s:"H"},{i:"k32",c:"1",n:"j",s:"J"},{i:"k33",c:"1",n:"k",s:"K"},{i:"k34",c:"1",n:"l",s:"L"},{i:"k35",c:"0",n:";",s:":"},{i:"k36",c:"0",n:"'",s:'"'},{i:"k37",c:"1",n:"z",s:"Z"},{i:"k38",c:"1",n:"x",s:"X"},{i:"k39",c:"1",n:"c",s:"C"},{i:"k40",c:"1",n:"v",s:"V"},{i:"k41",c:"1",n:"b",s:"B"},{i:"k42",c:"1",n:"n",s:"N"},{i:"k43",c:"1",n:"m",s:"M"},{i:"k44",c:"0",n:",",s:"<"},{i:"k45",c:"0",n:".",s:">"},{i:"k46",c:"0",n:"/",s:"?"},{i:"k47",c:"0",n:"\\",s:"|"}];this.dir="ltr";this.name="US";this.lang="en"};branah.layout.prototype.load=function(a){this.keys=a.keys;this.deadkeys=a.deadkeys;this.dir=a.dir;this.name=a.name;this.lang=a.lang?a.lang:"en"};branah.layout.parser={keyCodes:[192,49,50,51,52,53,54,55,56,57,48,189,187,81,87,69,82,84,89,85,73,79,80,219,221,220,65,83,68,70,71,72,74,75,76,186,222,90,88,67,86,66,78,77,188,190,191,220],getKeyCode:function(c,e,b){var d=c.length;for(var a=0;a<d;a++){if(c[a].i==b){return e==1?(c[a].s?c[a].s:""):(c[a].n?c[a].n:"")}}return 0},getKey:function(c,b){var d=c.length;for(var a=0;a<d;a++){if(c[a].i==b){return c[a]}}return null},isDeadkey:function(a,d){if(!a){return false}var c=a.length;for(var b=0;b<c;b++){if(a[b].k==d){return true}}return false},getMappedValue:function(a,e,d){if(!a){return""}var c=a.length;for(var b=0;b<c;b++){if(a[b].k==d&&a[b].b==e){return a[b].c}}return""},getKeyId:function(b){for(var a=0;a<48;a++){if(this.keyCodes[a]==b){return a}}return -1},getState:function(d,a,e,b,c){var f="n";if(!a&&!e&&d){f="n"}else{if(!a&&e&&!d){f="s"}else{if(!a&&e&&d){f="s"}else{if(a&&!e&&!d){f="n"}else{if(a&&!e&&d){f="t"}else{if(a&&e&&!d){f="s"}else{if(a&&e&&d){f="f"}}}}}}}if((f=="n"||f=="s")&&b){if(c=="1"){if(f=="n"){f="s"}else{f="n"}}if(c=="SGCap"){if(f=="n"){f="y"}else{if(f=="s"){f="z"}}}}return f}};branah.keyboard=function(a,d){this.defaultLayout=new branah.layout();this.defaultLayout.loadDefault();this.virtualLayout=new branah.layout();this.virtualLayout.loadDefault();this.currentLayout=this.virtualLayout;this.shift=false;this.caps=false;this.alt=false;this.ctrl=false;this.counter=0;this.interval=0;this.prev="";this.cancelkeypress=false;this.customOnBackspace=function(e){};this.customOnEnter=function(){};this.customOnSpace=function(){return false};this.customOnKey=function(e){return false};this.customOnEsc=function(){};this.customDrawKeyboard=function(e){return e};this.textbox=$("#"+d);this.nativeTextbox=document.getElementById(d);var c=['<div id="branah-keyboard">'];for(var b=0;b<13;b++){c.push('<button id="branah-k',b,'" class="branah-key"></button>')}c.push('<button id="branah-backspace"><span>Backspace</span></button>');c.push('<div class="branah-clear"></div>');c.push('<button id="branah-tab"><span>Tab</span></button>');for(var b=13;b<25;b++){c.push('<button id="branah-k',b,'" class="branah-key"></button>')}c.push('<button id="branah-k25"></button>');c.push('<div class="branah-clear"></div>');c.push('<button id="branah-caps-lock"><span>Caps Lock</span></button>');for(var b=26;b<37;b++){c.push('<button id="branah-k',b,'" class="branah-key"></button>')}c.push('<button id="branah-enter" class="branah-enter"><span>Enter</span></button>');c.push('<div class="branah-clear"></div>');c.push('<button id="branah-left-shift"><span>Shift</span></button>');c.push('<button id="branah-k47" class="branah-key"></button>');for(var b=37;b<47;b++){c.push('<button id="branah-k',b,'" class="branah-key"></button>')}c.push('<button id="branah-right-shift"><span>Shift</span></button>');c.push('<div class="branah-clear"></div>');c.push('<button id="branah-left-ctrl"><span>Ctrl</span></button>');c.push('<button id="branah"><span>branah</span></button>');c.push('<button id="branah-left-alt"><span>Alt</span></button>');c.push('<button id="branah-space"><span>Space</span></button>');c.push('<button id="branah-right-alt"><span>Alt</span></button>');c.push('<button id="branah-escape" title="Turn on/off keyboard input conversion"><span>Esc</span></button>');c.push('<button id="branah-right-ctrl"><span>Ctrl</span></button>');c.push('<div class="branah-clear"></div>');c.push("</div>");document.getElementById(a).innerHTML=c.join("");this.wireEvents();this.drawKeyboard()};branah.keyboard.prototype.loadDefaultLayout=function(a){this.defaultLayout.load(a);this.drawKeyboard()};branah.keyboard.prototype.loadVirtualLayout=function(a){this.virtualLayout.load(a);this.drawKeyboard();this.textbox.attr("dir",this.attr("dir"))};branah.keyboard.prototype.switchLayout=function(){this.currentLayout=(this.currentLayout===this.defaultLayout)?this.virtualLayout:this.defaultLayout;this.reset();this.drawKeyboard();this.textbox.attr("dir",this.attr("dir"))};branah.keyboard.prototype.onEsc=function(){this.switchLayout();this.customOnEsc()};branah.keyboard.prototype.onShift=function(){this.shift=!this.shift;this.drawKeyboard()};branah.keyboard.prototype.onAlt=function(){this.alt=!this.alt;this.drawKeyboard()};branah.keyboard.prototype.onCtrl=function(){this.ctrl=!this.ctrl;this.drawKeyboard()};branah.keyboard.prototype.onCapsLock=function(){this.caps=!this.caps;this.drawKeyboard()};branah.keyboard.prototype.onBackspace=function(){if(this.prev!=""){this.prev="";this.shift=false;this.drawKeyboard()}else{var a=branah.util.deleteAtCaret(this.nativeTextbox,1,0);this.customOnBackspace(a)}};branah.keyboard.prototype.onEnter=function(){branah.util.insertAtCaret(this.nativeTextbox,"\u000A");this.customOnEnter()};branah.keyboard.prototype.onSpace=function(){if(!this.customOnSpace()){branah.util.insertAtCaret(this.nativeTextbox,"\u0020")}};branah.keyboard.prototype.attr=function(a){if(a=="dir"){return this.currentLayout.dir}else{if(a=="lang"){return this.currentLayout.lang}else{if(a=="name"){return this.currentLayout.name}}}return""};branah.keyboard.prototype.reset=function(){this.shift=false;this.caps=false;this.alt=false;this.ctrl=false;this.counter=0;this.interval=0;this.prev=""};branah.keyboard.prototype.stopRepeat=function(){if(this.interval!=0){clearInterval(this.interval);this.counter=0;this.interval=0}};branah.keyboard.prototype.onKey=function(b){var a=branah.layout.parser.getKey(this.currentLayout.keys,b);if(a){var d=branah.layout.parser.getState(this.ctrl,this.alt,this.shift,this.caps,a.c?a.c:"0");var e=a[d]?a[d]:"";if(this.prev!=""){var c=branah.layout.parser.getMappedValue(this.currentLayout.deadkeys,e,this.prev);if(c!=""){branah.util.insertAtCaret(this.nativeTextbox,c)}this.prev=""}else{if(branah.layout.parser.isDeadkey(this.currentLayout.deadkeys,e)){this.prev=e}else{if(e!=""){if(!this.customOnKey(e)){branah.util.insertAtCaret(this.nativeTextbox,e)}}}}}};branah.keyboard.prototype.drawKeyboard=function(){if(!this.currentLayout.keys){return}var a,c,e,f;var d=this.currentLayout.keys.length;for(var b=0;b<d;b++){c=this.currentLayout.keys[b];if(!$("branah-"+c.i)){continue}e=branah.layout.parser.getState(this.ctrl,this.alt,this.shift,this.caps,c.c?c.c:"0");f=c[e]?c[e]:"";if(this.prev!=""){f=branah.layout.parser.getMappedValue(this.currentLayout.deadkeys,f,this.prev)}if(!this.shift){f=this.customDrawKeyboard(f);if(f==""){f="&nbsp;"}a='<div class="branah-label-reference">'+branah.layout.parser.getKeyCode(this.defaultLayout.keys,0,c.i)+'</div><div class="branah-label-natural">'+f+"</div>"}else{if(f==""){f="&nbsp;"}a='<div class="branah-label-reference">'+branah.layout.parser.getKeyCode(this.defaultLayout.keys,0,c.i)+'</div><div class="branah-label-shift">'+f+"</div>"}document.getElementById("branah-"+c.i).innerHTML=a}if(this.ctrl){$("#branah-left-ctrl").addClass("branah-recessed");$("#branah-right-ctrl").addClass("branah-recessed")}else{$("#branah-left-ctrl").removeClass("branah-recessed");$("#branah-right-ctrl").removeClass("branah-recessed")}if(this.alt){$("#branah-left-alt").addClass("branah-recessed");$("#branah-right-alt").addClass("branah-recessed")}else{$("#branah-left-alt").removeClass("branah-recessed");$("#branah-right-alt").removeClass("branah-recessed")}if(this.shift){$("#branah-left-shift").addClass("branah-recessed");$("#branah-right-shift").addClass("branah-recessed")}else{$("#branah-left-shift").removeClass("branah-recessed");$("#branah-right-shift").removeClass("branah-recessed")}if(this.caps){$("#branah-caps-lock").addClass("branah-recessed")}else{$("#branah-caps-lock").removeClass("branah-recessed")}};branah.keyboard.prototype.wireEvents=function(){var a=this;$("#branah-keyboard").delegate("button","mousedown",function(b){var c=this.id;a.interval=setInterval(function(){a.counter++;if(a.counter>5){switch(c){case"branah-backspace":a.onBackspace();break;default:if(c.search("branah-k([0-9])|([1-3][0-9])|(4[0-7])")!=-1){a.onKey(c.substr(7));a.shift=false;a.alt=false;a.ctrl=false;a.drawKeyboard()}break}}},50)});$("#branah-keyboard").delegate("button","mouseup",function(b){a.stopRepeat()});$("#branah-keyboard").delegate("button","mouseout",function(b){a.stopRepeat()});$("#branah-keyboard").delegate("button","click",function(b){var c=this.id;switch(c){case"branah-left-shift":case"branah-right-shift":a.onShift();break;case"branah-left-alt":case"branah-right-alt":a.onCtrl();a.onAlt();break;case"branah-left-ctrl":case"branah-right-ctrl":a.onAlt();a.onCtrl();break;case"branah-escape":a.onEsc();break;case"branah-caps-lock":a.onCapsLock();break;case"branah-backspace":a.onBackspace();break;case"branah-enter":a.onEnter();break;case"branah-space":a.onSpace();break;default:if(c.search("branah-k([0-9])|([1-3][0-9])|(4[0-7])")!=-1){a.onKey(c.substr(7));a.shift=false;a.alt=false;a.ctrl=false;a.drawKeyboard()}break}});a.textbox.bind("keydown",function(b){var d=branah.util.keyCode(b);if((d==65||d==67||d==86||d==88||d==89||d==90)&&(a.ctrl&&!a.alt&&!a.shift)){return}if(a.currentLayout==a.defaultLayout&&d!=27){return}switch(d){case 17:a.ctrl=false;a.onCtrl();break;case 18:a.alt=false;a.onAlt();break;case 16:a.shift=false;a.onShift();break;case 27:a.onEsc();break;case 8:a.onBackspace();b.preventDefault();break;case 32:a.onSpace();b.preventDefault();break;case 10:a.onEnter();b.preventDefault();break;default:var c=branah.layout.parser.getKeyId(branah.util.keyCode(b));if(c!=-1){a.onKey("k"+c);a.drawKeyboard();b.preventDefault();a.cancelkeypress=true}break}});if($.browser.opera){a.textbox.bind("keypress",function(b){if(a.cancelkeypress){b.preventDefault();a.cancelkeypress=false}})}a.textbox.bind("keyup",function(b){switch(branah.util.keyCode(b)){case 17:a.ctrl=true;a.onCtrl();break;case 18:a.alt=true;a.onAlt();break;case 16:a.shift=true;a.onShift();break;default:}})};
    var keyboard = null;
    $(document).ready(function () {
        keyboard = new branah.keyboard("keyboard", "editor");
        keyboard.loadVirtualLayout({"name":"Hindi","dir":"ltr","keys":[{"i":"k0","c":"0","t":"`"},{"i":"k1","c":"0","n":"1","s":"ऍ","t":"१"},{"i":"k2","c":"0","n":"2","s":"ॅ","t":"२"},{"i":"k3","c":"0","n":"3","s":"#","t":"३"},{"i":"k4","c":"0","n":"4","s":"$","t":"४"},{"i":"k5","c":"0","n":"5","t":"५"},{"i":"k6","c":"0","n":"6","t":"६"},{"i":"k7","c":"0","n":"7","t":"७"},{"i":"k8","c":"0","n":"8","t":"८"},{"i":"k9","c":"0","n":"9","s":"(","t":"९"},{"i":"k10","c":"0","n":"0","s":")","t":"०"},{"i":"k11","c":"0","n":"-","s":"ः","t":"-"},{"i":"k12","c":"0","n":"ृ","s":"ऋ","t":"="},{"i":"k13","c":"0","n":"ौ","s":"औ"},{"i":"k14","c":"0","n":"ै","s":"ऐ"},{"i":"k15","c":"0","n":"ा","s":"आ"},{"i":"k16","c":"0","n":"ी","s":"ई"},{"i":"k17","c":"0","n":"ू","s":"ऊ"},{"i":"k18","c":"0","n":"ब","s":"भ"},{"i":"k19","c":"0","n":"ह","s":"ङ"},{"i":"k20","c":"0","n":"ग","s":"घ"},{"i":"k21","c":"0","n":"द","s":"ध"},{"i":"k22","c":"0","n":"ज","s":"झ"},{"i":"k23","c":"0","n":"ड","s":"ढ","t":"["},{"i":"k24","c":"0","n":"़","s":"ञ","t":"]"},{"i":"k25","c":"0","n":"ॉ","s":"ऑ","t":"\\"},{"i":"k26","c":"0","n":"ो","s":"ओ"},{"i":"k27","c":"0","n":"े","s":"ए"},{"i":"k28","c":"0","n":"्","s":"अ"},{"i":"k29","c":"0","n":"ि","s":"इ"},{"i":"k30","c":"0","n":"ु","s":"उ"},{"i":"k31","c":"0","n":"प","s":"फ"},{"i":"k32","c":"0","n":"र","s":"ऱ"},{"i":"k33","c":"0","n":"क","s":"ख"},{"i":"k34","c":"0","n":"त","s":"थ"},{"i":"k35","c":"0","n":"च","s":"छ","t":";"},{"i":"k36","c":"0","n":"ट","s":"ठ","t":"'"},{"i":"k37","c":"0","t":"'"},{"i":"k38","c":"0","n":"ं","s":"ँ"},{"i":"k39","c":"0","n":"म","s":"ण"},{"i":"k40","c":"0","n":"न"},{"i":"k41","c":"0","n":"व"},{"i":"k42","c":"0","n":"ल","s":"ळ"},{"i":"k43","c":"0","n":"स","s":"श"},{"i":"k44","c":"0","n":",","s":"ष","t":","},{"i":"k45","c":"0","n":".","s":"।","t":"."},{"i":"k46","c":"0","n":"य","s":"य़","t":"/"},{"i":"k47","c":"0","n":"ॉ","s":"ऑ"}],"deadkeys":[]});

        $("#editor").attr("dir", keyboard.attr("dir"));
        $("#editor").focus();

        

        var textbox = document.getElementById("editor");

      
      
       
    });
    </script>

<script>
var myInput=document.getElementById("myInput");
Object.defineProperty(myInput,"value",{
    set:function(val)
    {
    var y=document.getElementById('myspeechconvert').value;
    var str1 = y.toUpperCase();
    var str2=val.toUpperCase();
    //alert(levenshteinDistance (str1, str2) );
	if (levenshteinDistance (str1, str2)<=4/10*str1.length)
{
alert("passed");
}
else
{
alert("try again");
}
this.setAttribute("value",val);}
});
</script>





</html>

