<?php
session_start();
function confirm_logged_in ()
{
 
if (!(isset($_SESSION['user_id'])))
header("Location: login.php");
}
confirm_logged_in();
?>

<?php
if(isset($_POST['number']))
$user=$_SESSION['user_id'];
$file = 'galleryfromfolder/users/'.$user;
echo $file;
$fileHandle = fopen($file, 'a'); // Note that the mode has changed
 $data = $_POST['number']."\n"; // set data we will be writing
fwrite($fileHandle, $data); // write data to file 
fclose($fileHandle); // close the file since we're done
 ?>
