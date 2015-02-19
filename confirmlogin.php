<?php
ob_start();
?>
<?php
session_start();
?>
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
//2.Select a database
$db_select=mysql_select_db("eduvate",$connection);
if (!$db_select)
{
    die("Database connection failed:".mysql_error());
}
?>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
?>
<?php
//3.perform database  query
$result=mysql_query("SELECT * FROM users ",$connection);
if (!$result)
die("database query failed:".mysql_error());
//4. Use returned data
$flag=0;
while ($row=mysql_fetch_array($result))
{
    
    if ($row['name']==$username && $row['passwd']==$password)
    $flag=1;
}
if ($flag==1)
{
 $_SESSION['user_id']=$username;
header("location:index.php?username=$username");   

}
else
{
 header("location:wronglogin.php");
}
//5.close the coonection
mysql_close($connection);
?>

<?php
ob_end_flush(); //now the headers are sent
?>
