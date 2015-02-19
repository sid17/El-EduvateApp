<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWD","qwerty");
define("DB_NAME","eduvate");
$connection=mysql_connect(DB_SERVER,DB_USER,DB_PASSWD);
if (!$connection)
{
    die("Database connection failed:".mysql_error());
}
$db_select=mysql_select_db("eduvate",$connection);
if (!$db_select)
{
    die("Database connection failed:".mysql_error());
}
$username=$_POST['name'];

$result=mysql_query("SELECT * FROM users ",$connection);
if (!$result)
die("database query failed:".mysql_error());

$flag=0;
while ($row=mysql_fetch_array($result))
{
    
    if ($row['name']==$username)
    $flag=1;
}
if ($flag==1)
{
 echo "true";  

}
else
{
 echo "false";
}
mysql_close($connection);
?>
