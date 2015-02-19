<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Audio Recorder</title>
    
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      .soundBite input {
        margin-right: 4px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body style="background:url(green.jpg) no-repeat;background-size:1351px 756px;">
    	
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
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->





    <script src="jquery/js/jquery-1.7.2.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>


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
