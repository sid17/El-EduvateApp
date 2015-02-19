<?php
session_start();
?>
<?php

    if( isset($HTTP_RAW_POST_DATA))
   {
      $cad = $HTTP_RAW_POST_DATA;
      $stringas = explode(":",$cad);
      $type = explode(";", $stringas[1]);
      $base = explode(",", $type[1]);
      $base64 = $base[1];
      print_r ( $base64 );
      $timestamp=time();
      $name=$_SESSION['user_id'].'_'.$timestamp;
      $myFile = $name.".wav";//"testFile.wav";
      $fh = fopen('audio/'.$myFile, 'w');
      fwrite($fh, base64_decode($base64));
   }
?>





