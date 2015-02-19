<?php
session_start();
function confirm_logged_in ()
{
 
if (!(isset($_SESSION['user_id'])))
header("Location: login.php");
}
confirm_logged_in();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
 <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
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
			//document.getElementById ("xlInput").value = document.title;
			});
		});
	function closeDialog () {
		$('#windowTitleDialog').modal('hide'); 
		};

	function openDialog () {
		$('#windowTitleDialog').modal('show'); 
		};

	function okClicked () {
		//document.title = document.getElementById ("xlInput").value;
		closeDialog ();
		};
	</script>


<script>
function getimage(x)
{
//alert(x);
document.getElementById('myframe').src=x;
openDialog ();
}
</script>

<title>Gallery from Folder Demo</title>
        <style>

            /* Demo styles */
            html,body{background:#222;margin:0;}
            body{border-top:4px solid #000;}
            .content{color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:620px;margin:20px auto;}
            h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{margin:0 0 20px}
            a {color:#22BCB9;text-decoration:none;}
            .cred{margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{height:320px}

        </style>

       


</head>

<body>

<a href="index.php" style="position:fixed;margin-left:1100px;margin-top:20px;width:110px;z-index:1000" class="btn btn-primary">Back
</a>

<div class="divDemoBody" >
			
<div id="windowTitleDialog"  style="width:1150px;margin-left:-600px;" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true">
				
				<div class="modal-body"  >
					<div class="divDialogElements">
						
					<iframe width="1150"  height="900" id="myframe" src=""></iframe>

					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
					<a href="#" class="btn btn-primary" onclick="okClicked ();">OK</a>
				</div>
</div>
</div>
















	<br>
	<center><button class="btn btn-primary" style="width:720px;height:50px;"><font style="font-size:30px;color:white;font-family:helveltica;">GOTTA CATCH'EM ALL POKEMON</font></button></center>
        
	<?php
		$user1=$_GET['user1'];//"sanil123";
		$user2=$_GET['user2']; //"siddhant";
		$count1=0;
		$count2=0;
		echo "<div class=\"content\"> \n" ;
		echo "<div id=\"galleria\"> \n" ;
		echo "<div class=\"content\" id=\"div1\" style=\"width:575px;position:absolute;top:150px;margin-left:-320px;border:10px solid;\" > \n";
		echo "<br><center><button class=\"btn btn-primary\" style=\"width:300px;height:50px;\"><font style=\"font-size:30px;color:white;font-family:helveltica;\">$user1 </font></button></center><br>";
    			
		$file_handle= fopen("/var/www/edu1/galleryfromfolder/users/$user1","r");
		$dirname = "images/";
		$images = scandir($dirname);
		shuffle($images);
		$ignore = Array(".", "..");
		while(!feof($file_handle)){
			$curimg=fgets($file_handle);
			$parts=explode('\n',$curimg);
			$curimg=$parts[0];
			$curimg=$curimg.".png";
			if(!in_array($curimg, $ignore)) {
				$withoutExt = preg_replace("/\\.[^.\\s]{3,4}$/", "", $curimg);
				if($withoutExt != ""){
				//echo "<a href=\"http://www.pokemon.com/us/pokedex/$withoutExt\"><img src=\"$dirname$curimg\"  class=\"img-rounded\" style=\"width:110px;height:110px;border:1px solid;\" ></a>\n ";}
echo "<button id='http://www.pokemon.com/us/pokedex/".$withoutExt."'onclick=\"getimage(this.id)\"><img src=\"$dirname$curimg\"  class=\"img-rounded\" style=\"width:110px;height:110px;border:1px solid;\" ></button>\n ";}
				$count1=$count1+1;
			}
		} 	
		echo "</div> \n";
		fclose($file_handle);

		echo "<div class=\"content\" id=\"div2\" style=\"width:575px;position:absolute;top:150px;margin-left:350px;border:10px solid;\" > \n";
				echo "<br><center><button class=\"btn btn-primary\" style=\"width:300px;height:50px;\"><font style=\"font-size:30px;color:white;font-family:helveltica;\">$user2 </font></button></center><br>";

		$file_handle= fopen("/var/www/edu1/galleryfromfolder/users/$user2","r");
		$dirname = "images/";
		$images = scandir($dirname);
		shuffle($images);
		$ignore = Array(".", "..");
		while(!feof($file_handle)){
			$curimg=fgets($file_handle);
			$parts=explode('\n',$curimg);
			$curimg=$parts[0];
			$curimg=$curimg.".png";
			if(!in_array($curimg, $ignore)) {
				$withoutExt = preg_replace("/\\.[^.\\s]{3,4}$/", "", $curimg);
				if($withoutExt != ""){
				echo "<button id='http://www.pokemon.com/us/pokedex/".$withoutExt."'onclick=\"getimage(this.id)\"><img src=\"$dirname$curimg\"  class=\"img-rounded\" style=\"width:110px;height:110px;border:1px solid;\" ></button>\n ";}
				$count2=$count2+1;			
			}
		} 	
		echo "</div> \n";
		fclose($file_handle);
		$winner="";
		$loser="";
		if($count1>$count2)
		{$winner=$user1;$loser=$user2;}
		else
		{
		$winner=$user2;$loser=$user1;
		}

		$display="";
		if($count1 == $count2)
		{
			$display=$user1." has a tie with ".$user2;
		}
		else
		{
			$display=$winner." beats ".$loser;
		}
		echo "<center><button class=\"btn btn-primary\" style=\"width:500px;height:50px;\"><font style=\"font-size:25px;color:white;font-family:helveltica;\">$display </font></button></center>";
    			
		echo "</div> \n";	
		echo "</div> \n";		
	?>

    
</body>
</html>
