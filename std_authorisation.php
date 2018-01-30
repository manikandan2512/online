<?php
require'db_conn1.php';

session_start();
$mail=$_SESSION["a"];
$q1=mysql_query("select*from std_register where email='$mail'");
while($r1=mysql_fetch_array($q1,MYSQL_ASSOC))
{
  $email=$r1['email'];
  $pass=$r1['pass'];
}

if(!($_SESSION['a']==$email && $_SESSION['b']==$pass))
{
header('location:index.php');
}
?>
