<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Translation Games for Kids from hindi to english and vice-versa" />
<meta name="language" content="en" />

<title>Interactive Translation Games for Kids</title>
<link rel="shortcut icon" href="favicon.ico" />

<link rel="stylesheet" type="text/css" media="screen" href="css/normalize.css@v=1.8.2.0" />
<link rel="stylesheet" type="text/css" media="screen" href="css/pkp.css@v=1.8.2.0" />
<!--link rel="stylesheet" type="text/css" media="screen" href="css/classroomHome.css@v=1.8.2.0" /-->
<!--link rel="stylesheet" type="text/css" media="screen" href="pkpPromoPlugin/css/pkpArticle/aboutHome.css@v=1.8.2.0" /-->
<link rel="stylesheet" type="text/css" media="screen" href="css/header.css@v=1.8.2.0" />
<link rel="stylesheet" type="text/css" media="screen" href="css/footer.css@v=1.8.2.0" />


		<script src="./js/jquery-1.8.3.min.js"></script>
		<script src="./js/bootstrap-transition.js"></script>
		<script src="./js/bootstrap-modal.js"></script>


<script type="text/javascript" src="./js/speakGenerator.js"></script>
<script type="text/javascript" src="script/script.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="./css/quiz.css" />






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
					
					});
				});
			function closeDialog () {
				$('#windowTitleDialog').modal('hide'); 
				};

			function openDialog () {
				$('#windowTitleDialog').modal('show'); 
				};

			function okClicked () {
				
				closeDialog ();
				};
			</script>
		




 
 
  



</head>
<body>














<div class="divDemoBody" >
			
<div id="windowTitleDialog"  class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true">
				<div class="modal-header" style="z-index:100">
					<a href="#" class="close" data-dismiss="modal">&times;</a>
					<h3>Please enter a new title for this window.</h3>
					</div>
				<div class="modal-body" style="z-index:100">
					<div class="divDialogElements" >
						<input class="xlarge" id="xlInput" name="xlInput" type="text" />
						<div id="content">Loading...</div>
						<input class="xlarge" id="eng1" name="eng1" type="text" />
						<input class="xlarge" id="eword" name="hin2" type="text" />
						<input class="xlarge" id="hword" name="hword" type="text" />
						<input class="xlarge" id="hin2" name="eword" type="text" />


<!--<div id="content">Loading...</div>
<div id="eng1"></div>
<div id="hin2"></div>
<div id="hword"></div>
<div id="eword"></div>-->

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
					<a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
					<a href="#" class="btn btn-primary" onclick="okClicked ();">OK</a>
					</div>
				</div>
			
			
</div>


</div>


			
			<div id="planet-grass">
  <div id="planet">
    <div id="wrapper">
      
<script>
function levenshteinDistance (s, t) 
{
if (!s.length) return t.length;
if (!t.length) return s.length;
return Math.min(
levenshteinDistance(s.substr(1), t) + 1,
levenshteinDistance(t.substr(1), s) + 1,
levenshteinDistance(s.substr(1), t.substr(1)) + (s[0] !== t[0] ? 1 : 0)
);
}
</script>


<style>
#Q1{
 clear:both;
 padding:5px;
 }
  #buttonA,#buttonB,#buttonC,#buttonD{
 visibility:hidden;
 }
</style>

<script>
function do_tts(x)
{
	text=x;
//alert(x);
	//document.getElementsByName('txt').item(0).value;
	if (text!="")
	{
		var bytearray = generateSpeech(text);
		document.getElementById('player').innerHTML='<audio autoplay="autoplay" controls="controls" src="data:audio/x-wav;base64,'+encode64(bytearray)+'">';
	}
}
</script>


<div id="header" class="component">
	
	<div class="bg-logo-hmh-white"></div>
	

	
			
			<div id="wooden-sign">
	<!--p>
				Need support?				<span>Send us an email at: <a href="mailto:abc@eduvate.org">abc@eduvate.org</a></span>	</p-->
				<img src="./images/look_down.gif" alt="cartoon">
</div>		
<script>
function moveSign(){
document.getElementById("wooden-sign").style.left="720px";
}
moveSign();
</script>
    
	<a href="" class="exclusive-learning_classroom" tag_category="header" tag_action="click" tag_label = "classroom">
        Click here to go to main site!</a></div>      <div class="main-holder">
        <!-- main-nav -->
                	                <!-- main block -->
          <div id="content" class="component">
       
<div id="topmenu">
                                                               <div class="product active">
            <a href="index.php"><img style="width:140px;" src="./images/icons/icon_home_access.png" alt="Science"title="Go to Home"></a>
         </div>
         <ul>
            <li class="science"><a href="pronoun.php"><img style="width:140px;" src="./images/icons/creativity-icon.png" alt="Science" title="Play Science"></a></li>
            <li class="games"><a href="maths.php"><img style="width:140px;" src="./images/icons/mathematics-icon.png" alt="Mathematics" title="Go to Maths"></a></li>
            <li class="maths"><a href="trans-game.php"><img style="width:140px;" src="./images/icons/literacy-icon.png" alt="Literacy" title="Go to Liter"></a></li>
            <li class="lang"><a href="record/index.php"><img style="width:140px;" src="./images/icons/languagedevelopment-icon.png" alt="LanguageDevelopment" title="Go to Lang"></a></li>
         </ul>
         </div>
    <div class="inner-box-content"></div>
    <div class="inner-box-repeat">
      
	  <center>
<form name=Flash>
<font class=Sign><h1><small>Pronunciation</small></h1></font><br>
<div id="game" style="background: url(./images/baby55.jpg); background-size:850px 750px; width:850px; height:750px;">
    
	<div class="TopMenu" >
    <input type=button id="new" value="New player" class="btn btn-primary" onclick="ResetGame();">
    <input type=button id="start" value="Start game" class="btn btn-primary" onclick="StartGame();">
    <input type=button id="stop" value="Stop game" class="btn btn-primary" onclick="StopGame();">
    <input type=button id="instruct" value="Instructions" class="btn btn-primary" onclick="window.location='#inst'">
</div>
 

<div style="font-size:25px">
<input style="display:none" name="txt" type="text" value="" /><br />
<input  style="display:none" name="filename" type="text" /><br />
<input style="display:none" type="checkbox" name="save" /><br/>
<input style="display:none" name="submit" type="submit" value="Convert" onClick="do_tts()" />
</div>

<div id="Q1" class="Question"> </div>
<div id="player"></div>
<div id="speechinput">
<input id="speech" style="display:none" type="text" speech="speech" x-webkit-speech="x-webkit-speech" onspeechchange="processspeech();" onwebkitspeechchange="processspeech();" />
<input style="display:none" type="text" id="myInput" value="initial"/>
<div style="display:none" id="speechnotification"></div>

<div id="Q1" class="Question"> </div>

<div id="Response" class="Answer"> </div>
 
<b>Player scoring:</b>


 <div class="ScoreName">Name:
   <div id="Player" class="Answer"> </div></div>


    <div class="score">Correct:
    <div id="Correct" class="Answer">0</div></div>


    <div class="score1">Incorrect:
    <div id="Missed" class="Answer">0</div></div>


    <div class="score">Accuracy:
    <div id="Accuracy" class="Answer">0%</div></div>


    <div class="score1">Speed:
    <div id="Speed" class="Answer">0 sec</div></div>

 
<div class="HighScores">  - - - - - - - - - - - - - - - - - - - Highscores - - - - - - - - - - - - - - - - - - -</div>

    <div id="HighName" class="High"><u><font color=#0099cc>Name</font></u><br></div>
    <!--div id="HighDiff" class="High"><u><font color=#0099cc>Difficulty</font></u><br></div-->
    <div id="HighAcc" class="High"><u><font color=#0099cc>Accuracy</font></u><br></div>
    <div id="HighSpeed" class="High"><u><font color=#0099cc>Speed</font></u><br></div>

<!--/table-->
 </div>
 
<br><br><br><br><br><br><br><br><br><br><br><br>
 
<a name=inst></a>
 
<div id="Instructions" style="visibility:hidden;">
<tr class="sect1"><td>
<center><h2>Instructions</h2></center>
 
Before you begin, be sure to select the difficulty setting and math function that you want.  
These options are at the top of the page and can only be changed after the game has stopped.  
The difficulty option shows the range of numbers that the problem can be constructed from, (0-10 means the problem can be from 0+0 to 10+10.
<br><br>
 
To start a session, click on the '<b>New Player</b>' button.  
Enter your name, then click on the '<b>Start game</b>' button to begin answering the problems.  
To answer a problem, just click on the button under the answer you want.
<br><br>
 
The game will track how many answers you get right and wrong and how long it takes you to get the correct answer (in seconds).  
You can stop the game at any time by clicking on the '<b>Stop game</b>' button.  
This will put your current score in the Highscores area at the bottom.
<br><br>
 
To switch players, click on the '<b>New Player</b>' button.  
As you switch players, the previous player's score will be added to the Highscores area.
<br><br>
 
<center><input type=button value="Back to the game" onclick="window.location='#top'">
<br><br>

 
</td></tr>
</div>
<!--/table-->
 
</form>
 
 
<script>

var myInput=document.getElementById("myInput");
Object.defineProperty(myInput,"value",{
set:function(val)
    {
   
   guessThis (val)
   //alert("value detected");
   this.setAttribute("value",val);}
});
</script> 


<script>

 
function BadBrowser () {
alert("           * * * * * A T T E N T I O N * * * * * \n\nThis page will not work with your browser.  \n\nUse either Netscape 6x or Internet Explorer 5x or higher.    ");
}
 
//   ##############  SIMPLE  BROWSER SNIFFER
if (document.layers) {navigator.family = "nn4"; BadBrowser();}
if (window.navigator.userAgent.toLowerCase().indexOf('opera') != -1) {navigator.family = "opera"; BadBrowser();}
if (document.all) {navigator.family = "ie4"}
/*if (window.navigator.userAgent.toLowerCase().indexOf('gecko') != -1) {navigator.family = "gecko";
    document.Flash.diff[0].setting = "Easy";
    document.Flash.diff[1].setting = "Medium";
    document.Flash.diff[2].setting = "Hard";
    document.Flash.diff[3].setting = "Expert";
    }*/
if (window.navigator.platform.toLowerCase().indexOf('mac') != -1) {navigator.OS = "mac";}
 
//farray = new Array("+","-","*","/","+ -","+ - * /");
//fSignarray = new Array();
gamestart=false;
named=false;
 
good = new Array("Correct!","You got that one right.","Another one right.","You're doing great!",
"You're going to the head of the class!","I knew you could get that one.","That was easy, wasn't it?",
"That's the right answer.","Good going!","");
 
bad = new Array("Oops, try again.","Better luck next time","Try a different answer.","Nope, not that one.",
"nope, that one was a little hard.","Hmmm, that is incorrect.","Nope, try again.");
 
function ResetGame() {
if(gamestart){
alert("1st stop the game and then try!");}
else{
name=prompt("Enter your name.","");
if (name == "") {alert("Please enter your name or click on 'Cancel'.   "); ResetGame();}
else if (name == "null") {return;}
 
WriteMessage("Player" , name);
WriteMessage("Correct" , "0");
WriteMessage("Missed" , "0");
WriteMessage("Accuracy" , "0%");
WriteMessage("Speed" , "0 sec");
Timer = new Array();
named=true;
WriteMessage("Response" , "<font color=#0000aa>Click on 'Start game' to begin.");
}
}
 
 
function StartGame() {
if (!named) {
    WriteMessage("Response" , "<font color=#0000aa>Click on 'New player' and enter your name first.");
    return;
    }
if (gamestart) {alert("1st stop the game and try again!");}
else{
WriteMessage("Correct" , "0");
WriteMessage("Missed" , "0");
WriteMessage("Accuracy" , "0%");
WriteMessage("Speed" , "0 sec");
Timer = new Array();
gamestart=true;
WriteMessage("Response" , "<font color=#0000aa>Pronounce the word!");

showProblem();
}
}
 
function StopGame(){
if (!gamestart) {return;}
else {  if (window.navigator.userAgent.toLowerCase().indexOf('gecko') != -1) {navigator.family = "gecko";}
    if (navigator.family == "ie4") {
        WriteMessage("HighName" , Player.innerHTML +"<br>","add");
       WriteMessage("HighAcc" , Accuracy.innerHTML +" ("+ Correct.innerHTML +"/"+ (Math.floor(Correct.innerHTML)+Math.floor(Missed.innerHTML)) +")<br>","add");
        WriteMessage("HighSpeed" , Speed.innerHTML +"<br>","add");
        WriteMessage("Response" , "<font color=#0000aa>Look at your Highscore!");
        gamestart=false;
        }
    else if (navigator.family == "gecko") {
 
        WriteMessage("HighName" ,   document.getElementById("Player").innerHTML +"<br>","add");
        WriteMessage("HighAcc" ,    document.getElementById("Accuracy").innerHTML +" ("+ document.getElementById("Correct").innerHTML +"/"+ (Math.floor(document.getElementById("Correct").innerHTML)+Math.floor(document.getElementById("Missed").innerHTML)) +")<br>","add");
        WriteMessage("HighSpeed" ,  document.getElementById("Speed").innerHTML +"<br>","add");
        WriteMessage("Response" ,   "<font color=#0000aa>Look at your Highscore!");  
        gamestart=false;
var cor=document.getElementById('Correct').innerHTML;
var accu=document.getElementById('Accuracy').innerHTML;
var act=accu.substring(0,accu.length-1);
if (act>70 && cor>5)
{
Winasprite();
}

        }
    }
}
 
function Winasprite()
{
var x=Math.floor(Math.random() * 649);
$.ajax
	({
		type: "POST",
		url: "updatesprites.php",
		data: { number:x}
	})
	.done(function(msg2) 
	{
		alert("Congratulations ! You have won a Pokemon Sprite");
	});


//document.getElementById('modimage').src="galleryfromfolder/images/"+x+".png";

} 
 
 
 function capitaliseFirst(string){
return string.charAt(0).toUpperCase() + string.slice(1);
}
 
function showProblem () {

StartTime = new Date().getTime();
var sample=["cat","ball","wave","law","heart","coast","present","sand","arm","soil","sail","temperature","finger","industry","fight","circle","ear","broke","lake","square","scale","length","spring","art","child","energy","hunt","nation","dictionary","bed","milk","brother","speed","egg","organ","cell","forest","dress","cloud","race","window","stone","summer","train","climb","sleep","exercise","experiment","wall","bottom","cat","ch","key","mount","iron","sky","stick","winter","skin","crease","hole","instrument","glass","grass","office","cow","mouth","sign","symbol","gas","weather","wrote","seed","bear","flower","lady","clothe","yard","baby","oil","eight","blood","village","meet","grew","root","team","wire","metal","cost","brown","seven","wear","garden","three","hair","cook","bank","burn","hill","truck","woman","captain","shop","doctor","throw","shine","noon","molecule","ring","insect","gray","radio","salt","atom","nose","electric","continent","crop","sugar","death","student","women","party","magnet","bone","silver","rail","branch","chair","fruit","steel","soldier","apple","wing","coat","bat","card","band","crowd","rope","corn","win","evening","bell","meat","tool","tube","smell","dollar","valley","seat","triangle","planet","parent","shore","clock","sheet","tie","yellow","gun","bread","desert","suit","lift","rose","duck","hat","market","chick","enemy","drink","swim","shoe","camp","liquid","log","cotton","teeth","neck"];
var x=Math.floor(Math.random() * sample.length);
var rand = capitaliseFirst(sample[x]);
//alert(rand);
WriteMessage("Q1" , "<h2><small>"+rand+"</small></h2>");
CorrectAns = capitaliseFirst(sample[x]);;
do_tts(rand);
document.getElementById('speech').style.display="block";
}

function guessThis (number) {
if (!gamestart) {
    WriteMessage("Response" , "<font color=#0000aa>Click 'Start game' first.");
    return;
    }

var str1 = number.toUpperCase();
var str2=CorrectAns.toUpperCase();
    
	

if (levenshteinDistance (str1, str2)<=4/10*str1.length) 
{
    EndTime=new Date().getTime();
    Timer[Timer.length] = EndTime-StartTime;
    WriteMessage("Response" , "<font color=#00aa00>"+ good[Math.floor(Math.random() * (good.length-1))]);
    if (navigator.family == "ie4")      {WriteMessage("Correct" , Math.floor(Correct.innerHTML)+1);}
    else if (navigator.family == "gecko")   {WriteMessage("Correct" , Math.floor(document.getElementById("Correct").innerHTML)+1);}
    updateScore();
    showProblem();
    }
else {  WriteMessage("Response" , "<font color=#aa0000>"+ bad[ Math.floor(Math.random() * (bad.length-1))]);
    if (navigator.family == "ie4")      {WriteMessage("Missed" , Math.floor(Missed.innerHTML)+1);}
    else if (navigator.family == "gecko")   {WriteMessage("Missed" , Math.floor(document.getElementById("Missed").innerHTML)+1);}
    updateScore();
    showProblem();
    }
}
 
 
 
 
 
function updateScore () {
if (navigator.family == "ie4")      {
    Perc = (Math.floor(Correct.innerHTML ) / (Math.floor(Missed.innerHTML )+ Math.floor(Correct.innerHTML))) * 100;
    }
else if (navigator.family == "gecko")   {
    Perc = (Math.floor(document.getElementById("Correct").innerHTML ) / (Math.floor(document.getElementById("Missed").innerHTML )+ Math.floor(document.getElementById("Correct").innerHTML))) * 100;
    }
WriteMessage("Accuracy" , Perc.toString().substring(0,4) +"%");
temptimer = 0;
for (x=0;x<Timer.length;x++) {
    temptimer += Math.floor(Timer[x]);
    }
 
newSpeed = (temptimer*.001/(Timer.length)).toString().substring(0,(temptimer*.001/(Timer.length)).toString().indexOf(".")+3);
if (newSpeed != "Na") {
    WriteMessage("Speed" , (temptimer*.001/(Timer.length)).toString().substring(0,(temptimer*.001/(Timer.length)).toString().indexOf(".")+3) +" sec");
    }
}
 
 
function WriteMessage(where,what,addto) {
if (window.navigator.userAgent.toLowerCase().indexOf('gecko') != -1) {navigator.family = "gecko";}
if (addto) {
    if (navigator.family == "ie4")      {document.all[where].innerHTML += what;}
    if (navigator.family == "gecko")    {document.getElementById(where).innerHTML += what;}
    }
else {
    if (navigator.family == "ie4")      {document.all[where].innerHTML = what;}
    if (navigator.family == "gecko")    {document.getElementById(where).innerHTML = what;}
    }
}
 
</script>
    
</div>
    </div>
  <!--div class="inner-box-bottom"></div>          </div-->
      </div>
           	
</div>
</div>

<div id="footer" class="component ext-footer__classroom ext-footer__characterDt ext-footer__curiousGeorge">
	
	

<div id="bottom"></div>

 	      </div>

 


</body>
</html>

