<?php
if (isset($_POST['name']))
    {
      // echo "hello"; 
       //Convert($_POST['name']);
   	echo Convert($_POST['name']);
    }
    else
    {
        echo "Meaning not available";
    }
function Convert($var1)
{
$file = "dictionary.json";
$var1 = strtoupper($var1);
//echo $var1;
$json = json_decode(file_get_contents($file), true);
//echo $json;
//print_r ($json);
return $json[$var1];
}

?>





