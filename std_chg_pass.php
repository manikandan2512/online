<html>
<head>
<script src='js/admin_chg_pass.js' type='text/javascript'></script>
<link href="frm_css.css" rel="stylesheet">
</head>
<?php
echo"<body bgcolor = 'black' topmargin='200' leftmargin='0'>";

echo"<div class='head'><div class='headtxt'><font style='font-family:Arial' size='5'><b>WELCOME TO ONLINE CAREER GUIDANCE AND PLACEMENT UNIT</b></div>
<div class='mar'><CENTER><marquee id='test' behavior='scroll' direction='left' cellspacing='0' height='30' width='700' scrolldelay='1'  scrollamount='3' onMouseOver='document.all.test.stop()'
onMouseOut='document.all.test.start()'>
<font style='font-family:Arial' size='4'><b>WELCOME TO YOU !,WELCOME TO ONLINE CAREER GUIDANCE AND PLACEMENT UNIT </b>
</marquee></CENTER></div></div>";

echo "<form method=POST enctype='multipart/form-data' name='n' onSubmit='return validated()'>";
echo"<center><table style='border:1px solid #ADAEAF;border-radius:5px;'><tr><td><table bgcolor='#99CCFF' width='360' height='250'  cellspacing='0'padding='0'>
<tr><td><font style='font-family:Arial' size='2' color='blue'><b>&nbsp&nbsp Email Id :<td><input type='text' name=email size='20' style='background-color:#DEE189;'>
<tr><td><font style='font-family:Arial' size='2' color='blue'><b>&nbsp&nbsp Old Password:<td><input type='password' name=pass size='20' style='background-color:#DEE189;'>
<tr><td><font style='font-family:Arial' size='2' color='blue'><b>&nbsp&nbsp New Password:<td><input type='password' name=npass size='20'  style='background-color:#DEE189;'>";
?>
<tr><td>&nbsp&nbsp<a href="index.php" style="text-decoration:none;border:2px solid white outset;background: #DDDDE0;border-radius:5px;"><font style='font-family:Arial' size='2' color='red' > <b>&nbsp<-Back &nbsp</a>
<td><input type="submit" name="sub" value="submit" size="30" style="background-color:#3A8C03;font: bold 14px Arial;color:white;" onmouseover="this.style.background='#B7C706'" onmouseout="this.style.background='#B1160E'">
<?php
echo"</td></tr></table></td></tr></table></center>";
echo"</body>";
echo"</html>";
?>
<?php
require'db_conn1.php';
$email=$_POST['email'];
$ps=$_POST['pass'];
 $nps=$_POST['npass'];
  $results=mysql_query("select*from std_register where email='$email'");
 
 if(isset($_POST['sub']))
 {
 if(mysql_Numrows($results)>0)
{
  $numrows=mysql_Numrows($results);
  $x=0;
  while($x<$numrows)
  {
    $mail=mysql_result($results,$x,"email");
    $pass=mysql_result($results,$x,"pass");
    $x++;
  }

 if($email==$mail&&$ps==$pass)
 {


  $results=mysql_query("update std_register set pass='$nps' where email='$email'");
  if($results)
  echo"<font color='red'><h2><center><td><font style='font-family:Arial' size='2' color='green'><b>Your password has been succesfully updated.<p><a href='index.php'><font color='red'><-Back</font></b></h2></center>";
  else
  echo"<center><font style='font-family:Arial' size='2' color='red'><b>!Sorry Try again</b></center>";

}
else
{
   echo"<center><font style='font-family:Arial' size='2' color='red'><b>You have entered invalid user name or password, Please try again!</font></center>";
}
}
}

?>
