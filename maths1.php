<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Translation Games for Kids from hindi to english and vice-versa" />
<meta name="language" content="en" />

<title>Interactive Translation Games for Kids</title>
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jqfloat.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/prototype/1.6.1/prototype.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

<script>
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
		speed:800,
		minHeight:1200
	});
	jQuery('#scrollH').jqFloat('stop',{
		width:5,
		height:40,
		speed:800,
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
	});
	jQuery('#stop').on('click', function() {
		clicked1 = !clicked1;
		if(clicked1){
			jQuery("#scroll").jqFloat('stop');
			jQuery("#scrollH").jqFloat('play');
			}
		else 
			jQuery("#scrollH").jqFloat('stop');
	});
	
});
</script>
<!--meta property="og:image" content="http://www.pbskidsplay.org/images/sharelogo_home.png" />
<meta name="google-site-verification" content="c_vQH3Yd4UIcXP6GlAyOhQZzFv5OS_VSStHK0p7LkgQ" /-->


 
 
  
<!--script type="text/javascript" src="js/pkp.js@v=1.8.2.0"></script>
<script type="text/javascript" src="js/launcher.js@v=1.8.2.0"></script>
<script type="text/javascript" src="js/scriptaculous.js"></script>
<script type="text/javascript" src="js/validation.js"></script-->
<link rel="stylesheet" type="text/css" media="screen" href="css/normalize.css@v=1.8.2.0" />
<link rel="stylesheet" type="text/css" media="screen" href="css/pkp.css@v=1.8.2.0" />
<!--link rel="stylesheet" type="text/css" media="screen" href="css/classroomHome.css@v=1.8.2.0" /-->
<!--link rel="stylesheet" type="text/css" media="screen" href="pkpPromoPlugin/css/pkpArticle/aboutHome.css@v=1.8.2.0" /-->
<link rel="stylesheet" type="text/css" media="screen" href="css/header.css@v=1.8.2.0" />
<link rel="stylesheet" type="text/css" media="screen" href="css/footer.css@v=1.8.2.0" />
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/quiz.css" />



</head>
<body>
			
			<div id="planet-grass">
  <div id="planet">
    <div id="wrapper">
      


<div id="header" class="component">
	
	<div class="bg-logo-hmh-white"></div>
	

	
			
			<div id="wooden-sign">
	<!--p>
				Need support?				<span>Send us an email at: <a href="mailto:abc@eduvate.org">abc@eduvate.org</a></span>	</p-->
				<img src="./images/look_down.gif" alt="cartoon">
</div>		
<script>
function moveSign(){
document.getElementById("wooden-sign").style.left="350px";
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
      
	  <style>
#Q1{
 float:left;
 width:150px;
 padding:5px;
 }
 #Sign{
 float:left;
 width:150px;
 margin-left:0px;
 padding:5px;
 }
 #Q2{
 float:left;
 width:150px;
 margin-left:100px;
 padding:5px;
 }
 #QuesMark{
 float:left;
 width:150px;
 margin-left:80px;
 padding:5px;
 visibility:hidden;
 }
 .ChooseFunc,.ChooseDiff{
 float:left;
 padding:5px;
 margin-left:250px;
 margin-bottom:20px;
 }
 .ChooseDiff{
 float:left;
 padding:5px;
 margin-left:150px;
 margin-bottom:20px;
 }
 /*#HighAcc,#HighSpeed,#HighDiff{
 float:left;
 margin-left:150px;
 margin-top:30px;*/
 }
 #buttonA1,#buttonB1,#buttonC1,#buttonD1{
 visibility:hidden;
 }
<!--
.Answer     {font-weight:bold; font-size:20px; text-align:center; text-decoration:none;}
.Question   {font-weight:bold; font-size:40px; text-align:center;}
.Sign       {font-weight:bold; font-size:30px; text-align:right; font-family:helvetica;}
.High       {font-weight:bold; font-size:15px; text-align:center; }
.sect1      {background-color:#efe9df;}
.sect2      {background-color:#efefef;}
.sect3      {background-color:#e9efdf;}
.sect4      {background-color:#dfe9ef;}
-->
</style>
 
 
<center>

<form name=Flash>
<!--font class=Sign>MATHEMANIA</font><br-->



<div id="game" style="background: url(./images/bg_light60.jpg); background-size:850px 750px; width:850px; height:750px;">
    <div class="ChooseDiff"><h2><small>Choose difficulty</small></h2><br>
    <select name="diff" class="form-control">
        <option value=10 setting="Easy">      Easy (0-10)
        <option value=20 setting="Medium">    Medium (0-20)
        <option value=50 setting="Hard">      Hard (0-50)
        <option value=100 setting="Expert">    Expert (0-100)
    </select>
    </div>
    <div class="ChooseFunc"><h2><small>Choose Math function</small></h2><br>
    <select  name="func" class="form-control" onclick="if (gamestart){alert('1st stop the game and try again!');}">
        <option  value="Add.">        Addition
        <option  value="Subt.">       Subtraction
        <option  value="Mult.">       Multiplication
		<option  value="Div."> 		  Divide
		<option  value="Rnd �">   Random (+  and -)
        <option  value="Rnd All"> Random all (+, -, x and /)
         
    </select>
    </div>

<div class="TopMenu" >
    <input type=button id="new" value="New player" class="btn btn-primary" onclick="ResetGame();">
    <input type=button id="start" value="Start game" class="btn btn-primary" onclick="StartGame();">
    <input type=button id="stop" value="Stop game" class="btn btn-primary" onclick="StopGame();">
    <input type=button id="instruct" value="Instructions" class="btn btn-primary" onclick="window.location='#inst'">
</div>



   <div id="Q1" class="Question"> </div>
 


    <div id="Sign" class="Sign"> </div>
    <div id="Q2" class="Question"> </div>

<div id="QuesMark"><font class="Question">= &nbsp; &nbsp; &nbsp; &nbsp;?</font><br><br></div>

    <hr noshade width=100% align=right size=5 color="black">



  

	<div id="Ans1" class="Answer"> </div>
    <div id="Ans2" class="Answer"> </div>
    <div id="Ans3" class="Answer"> </div>
    <div id="Ans4" class="Answer"> </div>
	
<div id="buttonA1"><input type=button value="Answer A" id="A1" class="btn btn-primary btn-sm" guess="" onclick="guessThis(this.guess)"></div>
	<div id="buttonB1"><input  type=button value="Answer B" id="A2" class="btn btn-primary btn-sm" guess="" onclick="guessThis(this.guess)"></div>
    <div id="buttonC1"><input  type=button value="Answer C" id="A3" class="btn btn-primary btn-sm" guess="" onclick="guessThis(this.guess)"></div>
    <div id="buttonD1"><input type=button value="Answer D" id="A4" class="btn btn-primary btn-sm" guess="" onclick="guessThis(this.guess)"></div>
	
<div id="Response" class="Answer"> </div>
 


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
    
</div>
    </div>
  <!--div class="inner-box-bottom"></div>          </div-->
      </div>
           	
</div>
</div>
<div id="scroll">
<div class="ScoreHead"><b><p style="font-size:20px;" class="text-success">Player scoring</p></b></div>


 <div class="ScoreName"><b><p style="font-size:15px;" class="text-success">Name:</p></b>
   <div id="Player" class="Answer"> </div></div>


    <div class="scoreC"><p class="text-danger">Correct:</p>
    <div id="Correct" class="Answer">0</div></div>


    <div class="score1"><p class="text-danger">Incorrect:</p>
    <div id="Missed" class="Answer">0</div></div>


    <div class="score"><p class="text-danger">Accuracy:</p>
    <div id="Accuracy" class="Answer">0%</div></div>


    <div class="score1"><p class="text-danger">Speed:</p>
    <div id="Speed" class="Answer">0 sec</div></div>

 </div>
 <div id="scrollH">
 <div class="HighScores"> <p style="font-size:20px;" class="text-success">Highscores</p></div>

    <div id="HighName" class="High"><u><font color=#0099cc>Name</font></u><br></div>
    <div id="HighDiff" class="High"><u><font color=#0099cc>Difficulty</font></u><br></div>
    <div id="HighAcc" class="High"><u><font color=#0099cc>Accuracy</font></u><br></div>
    <div id="HighSpeed" class="High"><u><font color=#0099cc>Speed</font></u><br></div>
</div>
<div id="footer" class="component ext-footer__classroom ext-footer__characterDt ext-footer__curiousGeorge">
	
	

<div id="bottom"></div>

 	      </div>
<script>

 
function BadBrowser () {
alert("           * * * * * A T T E N T I O N * * * * * \n\nThis page will not work with your browser.  \n\nUse either Netscape 6x or Internet Explorer 5x or higher.    ");
}
 
//   ##############  SIMPLE  BROWSER SNIFFER
if (document.layers) {navigator.family = "nn4"; BadBrowser();}
if (window.navigator.userAgent.toLowerCase().indexOf('opera') != -1) {navigator.family = "opera"; BadBrowser();}
if (document.all) {navigator.family = "ie4"}
if (window.navigator.userAgent.toLowerCase().indexOf('gecko') != -1) {navigator.family = "gecko";
    document.Flash.diff[0].setting = "Easy";
    document.Flash.diff[1].setting = "Medium";
    document.Flash.diff[2].setting = "Hard";
    document.Flash.diff[3].setting = "Expert";
    }
if (window.navigator.platform.toLowerCase().indexOf('mac') != -1) {navigator.OS = "mac";}
 
farray = new Array("+","-","*","/","+ -","+ - * /");
fSignarray = new Array();
gamestart=false;
named=false;
 
good = new Array("Correct!","You got that one right.","Another one right.","You're doing great!",
"You're going to the head of the class!","I knew you could get that one.","That was easy, wasn't it?",
"That's the right answer.","Good going!","");
 
bad = new Array("Oops, try again.","Better luck next time","Try a different answer.","Nope, not that one.",
"nope, that one was a little hard.","Hmmm, that is incorrect.","Nope, try again.");
 
function ResetGame() {
name=prompt("Enter your name.","");
if (name == "") {alert("Please enter your name or click on 'Cancel'.   "); ResetGame();}
else if (name == "null") {return;}
 
WriteMessage("Player" , name);
WriteMessage("Correct" , "0");
WriteMessage("Missed" , "0");
WriteMessage("Accuracy" , "0%");
WriteMessage("Speed" , "0 sec");
document.getElementById("scroll").style.visibility="visible";
Timer = new Array();
named=true;
WriteMessage("Response" , "<font color=#0000aa>Click on 'Start game' to begin.");
}
 
 
function StartGame() {
if (!named) {
    WriteMessage("Response" , "<font color=#0000aa>Click on 'New player' and enter your name first.");
    return;
    }
if (gamestart) {return;}
WriteMessage("Correct" , "0");
WriteMessage("Missed" , "0");
WriteMessage("Accuracy" , "0%");
WriteMessage("Speed" , "0 sec");
Timer = new Array();
gamestart=true;
WriteMessage("Response" , "<font color=#0000aa>Click on an answer button.");
document.getElementById("buttonA1").style.visibility="visible";
document.getElementById("buttonB1").style.visibility="visible";
document.getElementById("buttonC1").style.visibility="visible";
document.getElementById("buttonD1").style.visibility="visible";
showProblem();
}
 
function StopGame(){
if (!gamestart) {return;}
else {  document.getElementById("scrollH").style.visibility="visible";
if (window.navigator.userAgent.toLowerCase().indexOf('gecko') != -1) {navigator.family = "gecko";}
    if (navigator.family == "ie4") {
        WriteMessage("HighName" , Player.innerHTML +"<br>","add");
        WriteMessage("HighDiff" , document.Flash.diff[document.Flash.diff.selectedIndex].setting+" "+ document.Flash.func[document.Flash.func.selectedIndex].value +"<br>","add");
        WriteMessage("HighAcc" , Accuracy.innerHTML +" ("+ Correct.innerHTML +"/"+ (Math.floor(Correct.innerHTML)+Math.floor(Missed.innerHTML)) +")<br>","add");
        WriteMessage("HighSpeed" , Speed.innerHTML +"<br>","add");
        WriteMessage("Response" , "<font color=#0000aa>Look at your Highscore!");
        gamestart=false;
        }
    else if (navigator.family == "gecko") {
 
        WriteMessage("HighName" ,   document.getElementById("Player").innerHTML +"<br>","add");
        WriteMessage("HighDiff" ,   document.Flash.diff[document.Flash.diff.selectedIndex].setting +" "+ document.Flash.func[document.Flash.func.selectedIndex].value +"<br>","add");
        WriteMessage("HighAcc" ,    document.getElementById("Accuracy").innerHTML +" ("+ document.getElementById("Correct").innerHTML +"/"+ (Math.floor(document.getElementById("Correct").innerHTML)+Math.floor(document.getElementById("Missed").innerHTML)) +")<br>","add");
        WriteMessage("HighSpeed" ,  document.getElementById("Speed").innerHTML +"<br>","add");
        WriteMessage("Response" ,   "<font color=#0000aa>Look at your Highscore!");  
        gamestart=false;
        }
    }
}
 
 
function showProblem () {
StartTime = new Date().getTime();
if (document.Flash.func.selectedIndex < 4) {
    MathSign = farray[document.Flash.func.selectedIndex];
    }
else {  RSign = farray[document.Flash.func.selectedIndex].split(" ");
    MathSign = RSign[Math.floor(Math.random() * RSign.length)];
    }
num1 = Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value);
num2 = Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value);
if (MathSign == "-") {
    if (num1 < num2) {
        temp=num1;
        num1=num2;
        num2=temp;
        }
    }
 
WriteMessage("Q1" , num1);
WriteMessage("Q2" , num2);
if (MathSign == "*")    {WriteMessage("Sign", "x");}
if (MathSign == "/")    {WriteMessage("Sign","/");}
else            {WriteMessage("Sign", MathSign);}
 
CorrectAns = eval(num1 + MathSign + num2);
if(MathSign == "/") {CorrectAns = CorrectAns.toFixed(3); }
//  #####  PUTS IN FAKE ANSWERS
fakie=",";
for (x=1;x<5;x++) {
    if (MathSign == "+")    {fakeans = Math.floor(Math.random() * (document.Flash.diff[document.Flash.diff.selectedIndex].value*2));}
    if (MathSign == "-")    {fakeans = Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value);}
    if (MathSign == "*")    {fakeans = Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value) * Math.floor(Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value);}
    if (MathSign == "/")    {fakeans = (Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value) * (Math.random() * document.Flash.diff[document.Flash.diff.selectedIndex].value)/(10*document.Flash.diff[document.Flash.diff.selectedIndex].value);
								fakeans = fakeans.toFixed(3);}
    if (fakie.match(","+fakeans+",") || fakeans == CorrectAns) {x--;}
    else {  fakie += fakeans+",";
        WriteMessage("Ans"+x , fakeans);
		var Ans=document.getElementById("Ans"+x);
		Ans.style.visibility="visible";
		document.getElementById("QuesMark").style.visibility="visible";
        if (navigator.family == "ie4") {document.all["A"+x].guess = fakeans;}
        else if (navigator.family == "gecko") {document.getElementById("A"+x).guess = fakeans;}
        }
    }
 
CPick = Math.floor(Math.random() * 3)+1;
WriteMessage("Ans"+CPick , CorrectAns);
if (navigator.family == "ie4") {document.all["A"+CPick].guess = CorrectAns;}
else if (navigator.family == "gecko") {document.getElementById("A"+CPick).guess = CorrectAns;}
 
}
 
function guessThis (number) {
if (!gamestart) {
    WriteMessage("Response" , "<font color=#0000aa>Click 'Start game' first.");
    return;
    }
if (number == CorrectAns) {
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
 


</body>
</html>

