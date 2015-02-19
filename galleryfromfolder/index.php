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

<body style="background-image:url('images/poke1.jpg')">

<a href="../index.php" style="position:fixed;margin-left:1100px;margin-top:20px;width:110px;z-index:1000" class="btn btn-primary">Back
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
















	<center><button class="btn btn-primary" style="width:720px;height:50px;"><font style="font-size:30px;color:white;font-family:helveltica;">Your Pokemon Trophy Collection</font></button></center>
        
	<?php
		$userid=$_SESSION['user_id'];
		echo "<div class=\"content\"> \n" ;
		echo "<div id=\"galleria\"> \n" ;
		$file_handle= fopen("/var/www/edu1/galleryfromfolder/users/$userid","r");
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
			}
		} 		
		echo "</div> \n";	
		echo "</div> \n";	
		echo "<input id=\"user1\" style=\"display:none\" type=\"text\"/><script>document.getElementById('user1').value='".$userid."';</script>";
	?>

<div style="margin-left:500px"><h2>Compete with a friend</h2></div>
<input  style="margin-left:500px" id="compare" type="text"/>

<button onclick="myfunction()" class="btn btn-primary">Compete now</button>
    <script>
function myfunction()
{
var x=document.getElementById('compare').value;
var y=document.getElementById('user1').value;
//alert(x);
if (x!='')
{
	$.ajax
	({
		type: "POST",
		url: "check_user.php",
		data: { name:x }
	})
	.done(function(msg2) 
	{
		if (msg2=='true')
		{
			window.location="arena.php?user1="+x+"&user2="+y;
		}
		else
		{
			alert("user not in the database");
		}
	});
}

else
{
alert('Please enter a user to compete with');
}
}
</script>
</body>
</html>
