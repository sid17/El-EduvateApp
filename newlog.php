<?php
session_start();
?>
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
	
<title>Interactive Translation Games for Kids</title>
<link rel="shortcut icon" href="favicon.ico" />



</head>
<body>

			
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
    <div style="height:740px;margin-top:50px;width:890px;z-index:30;">




<div class="main_content" style="margin-left:100px; z-index:30;" >
<div class="container" style="margin-top:200px;">
<form action="confirmlogin.php" method="POST" class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="username"><b>Username</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" id="username" name="username"  placeholder="Username">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label " for="inputPassword"><b>Password</b></label>
    <div class="controls">
      <input type="password"  name="password" class="input-xlarge btn-large" id="inputPassword" placeholder="Password">
    </div>
  </div>


<div class="control-group" style="display:none">
    <label class="control-label " for="inputPassword"><b>Password</b></label>
    <div class="controls">
      <input type="lat"  name="lat" class="input-xlarge btn-large" id="lat" placeholder="lat">
    </div>
  </div>



<div class="control-group" style="display:none">
    <label class="control-label " for="inputPassword"><b>Password</b></label>
    <div class="controls">
      <input type="long"  name="long" class="input-xlarge btn-large" id="long" placeholder="long">
    </div>
  </div>



  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <button onclick="getLocation()"> Getlocation</button>
      </label>
      <span><button type="submit" class="btn btn-large btn-primary"><span style="margin-left:25px;margin-right:25px;margin-top:-9px">Log In</span></button> <span class="pull-right" style="margin-right:350px;margin-top:-25px;"><p style="color:#999;font-size:20px;">Not Registered </p><a href="register.php" class="btn btn-primary " style="height:32px;"><span style="margin-left:25px;margin-right:25px;margin-top:-5px">Sign Up</span></a></span></span>
       
    </div>
  </div>
</form>

    </div> <!-- /container -->


</div>
    
   

			
 </div>



	</div>


    </div>
   
  <!--div class="inner-box-bottom"></div-->          </div>
      </div>



<div id="footer" class="component ext-footer__classroom ext-footer__characterDt ext-footer__curiousGeorge">
	
	

<div id="bottom"></div>

 	      </div>
<script>
function moveSign(){
document.getElementById("wooden-sign").style.left="-20px";
}
moveSign();
</script>


<script>
var x=document.getElementById("lat");
var y=document.getElementById("long");
function getLocation()
  {
  if (navigator.geolocation)
    {
    	navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
  x.value=position.coords.latitude;
  y.value=position.coords.longitude;
alert(x.value);
alert(y.value);	
  }
</script>



</body>


</html>

