<?php
session_start();
function confirm_logged_in ()
{
 
if (!(isset($_SESSION['user_id'])))
header("Location: login.php");
}
confirm_logged_in();
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="Translation Games for Kids from hindi to english and vice-versa" />
<meta name="language" content="en" />

	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="./css/normalize.css@v=1.8.2.0" />
	<link rel="stylesheet" type="text/css" media="screen" href="./css/pkp.css@v=1.8.2.0" />
	<link rel="stylesheet" type="text/css" media="screen" href="./css/header.css@v=1.8.2.0" />
	<link rel="stylesheet" type="text/css" media="screen" href="./css/footer.css@v=1.8.2.0" />
		<script src="./js/jquery-1.8.3.min.js"></script>
		<script src="./js/bootstrap-transition.js"></script>
		<script src="./js/bootstrap-modal.js"></script>
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
      .soundBite input {
        margin-right: 4px;
      }
			</style>
		
<title>Interactive Translation Games for Kids</title>
<link rel="shortcut icon" href="/favicon.ico" />




</head>
<body>


<a href="logout.php" style="position:fixed;margin-left:850px;margin-top:20px;width:110px;z-index:1000" class="btn btn-success">Log Out
</a>
<a href="galleryfromfolder/index.php" style="position:fixed;margin-left:1000px;margin-top:20px;width:110px;z-index:1000" class="btn btn-success">Pokemons
</a>
<a href="getrecord.php" style="position:fixed;margin-left:1150px;margin-top:20px;width:110px;z-index:1000" class="btn btn-success">Recordings
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

<h2><center>Record</center></h2>
      <p>
		<center>
        <button class="btn btn-primary" onclick="startRecording(this);">Record</button>
        <button class="btn btn-warning" onclick="stopRecording(this);" disabled>Stop</button>
		</center>
      </p>
      
      <table id="recordingslist" align="center" background="green.jpg">
        <tr>
          <th id="sequencerBoxes">
            
          </th>
        </tr>
       </table>


</div>
    
   

			
 </div>



	</div>


    </div>
   
  <!--div class="inner-box-bottom"></div-->          </div>
      </div>



<div id="footer" class="component ext-footer__classroom ext-footer__characterDt ext-footer__curiousGeorge">
	
	

<div id="bottom"></div>

 	      </div>

    <script src="./js/bootstrap-alert.js"></script>
    <script src="./js/bootstrap-dropdown.js"></script>
    <script src="./js/bootstrap-scrollspy.js"></script>
    <script src="./js/bootstrap-tab.js"></script>
    <script src="./js/bootstrap-tooltip.js"></script>
    <script src="./js/bootstrap-popover.js"></script>
    <script src="./js/bootstrap-button.js"></script>
    <script src="./js/bootstrap-collapse.js"></script>
    <script src="./js/bootstrap-carousel.js"></script>
    <script src="./js/bootstrap-typeahead.js"></script>


    <script type="text/javascript" src="app/js/ACFIRFilter.js"></script>
    <script type="text/javascript" src="app/js/ACAAFilter.js"></script> 
    <script type="text/javascript" src="app/js/ACSpectrum.js"></script>    
    <script type="text/javascript" src="app/js/ACFFT.js"></script>
    <script type="text/javascript" src="app/js/SpectrumWorker.js"></script>
    <script type="text/javascript" src="app/js/SpectrumDisplay.js"></script>
    <script type="text/javascript" src="app/js/audioplayback.js"></script>
    <script type="text/javascript" src="app/js/filedropbox.js"></script>
    <script type="text/javascript" src="app/js/fft.js"></script>
    <script type="text/javascript" src="app/js/audioLayerControl.js"></script>
    <script type="text/javascript" src="app/js/audiosequence.js"></script>
    <script type="text/javascript" src="app/js/AudioSequenceEditor.js"></script>
    <script type="text/javascript" src="app/js/mathutilities.js"></script>
    <script type="text/javascript" src="app/js/wavetrack.js"></script>
    <script type="text/javascript" src="app/js/binarytoolkit.js"></script>
    <script type="text/javascript" src="app/js/filesystemutility.js"></script>
    <script type="text/javascript" src="app/js/editorapp.js"></script>

    <script src="js/lib/recorder.js"></script>
    <script src="js/recordLive.js"></script>
    <script src="js/sequencer.js"></script>
    <script src="js/drone.js"></script>

</body>


</html>

