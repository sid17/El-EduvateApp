<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    
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
   
  <body>


<?php
		$userid=$_SESSION['user_id'];
		$dirname = "audio/";
		$a=glob('audio/*');
		//print_r($a);
		foreach ($a as $value) 
		{
		    //echo $value;
		   $pos = strrpos($value, "^");
		  //echo $pos;
                  $str=substr ($value , 6, $pos-6 );
                  //echo $str;
		  $str1=substr ($value , 6);
			if ($str==$userid)
{
		echo "<audio controls>
		  <source src=\"".$value."\" type=\"audio/wav\">
		  Your browser does not support the audio element.
		</audio><br>".$str1."<br>";
}

		}
		
?>

<div>



</div>






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


   

   




      </body>
</html>
