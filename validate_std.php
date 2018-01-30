<?php
$email=$_POST['un'];
$ps=$_POST['pass'];
session_start();
$_SESSION['a']=$email;
$_SESSION['b']=$ps;

require'db_conn1.php';
$q1=mysql_query("select * from std_register where email='$email' and pass='$ps'");

while($r1=mysql_fetch_array($q1,MYSQL_ASSOC))
{
  $mail=$r1['email'];
  $pass=$r1['pass'];
  $sts=$r1['status'];
}
if($sts=='Active')
{
if($email==$mail && $ps==$pass)
{
   echo "<script>alert('Welcome Student');
 window.location='std_panel.php'</script>";

}
else
{
  header('location:index.php?invalid=true');
}
}
else
{
  echo"<center>Student Account Not Activated <br> <a href='index.php'><font color='red'><<-Back</center>";
}



?>
