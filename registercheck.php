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
$password=$_POST['passwd'];

$result=mysql_query("SELECT * FROM users ",$connection);
if (!$result)
die("database query failed:".mysql_error());
$flag=0;
while ($row=mysql_fetch_array($result))
{
    
    if ($row['name']==$username)
    $flag=1;
}
if ($flag==0)
{
 
$sql ="INSERT INTO users(name, passwd) values ('$username','$password')";
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{
$str='touch galleryfromfolder/users/'.$username;
shell_exec($str);
echo 'true';
}
}
else
{
 echo "false";
}
mysql_close($connection);
?>
