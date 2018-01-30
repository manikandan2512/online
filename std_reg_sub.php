<html>
<SCRIPT language ="JavaScript" type="text/javascript">
	
        
        var message = "No right click for you";
	function rightclickcheck(keyp){
        if (navigator.appName == "Netscape" && keyp.which == 3)
        { 	alert(message); return false; }
	if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2)
        { 	alert(message); return false; } }
	document.onmousedown = rightclickcheck;

</SCRIPT>
<script src='js/user_reg.js' type='text/javascript'></script>
<head>

<link href="frm_css.css" rel="stylesheet">
</head>
<?php
echo"<body bgcolor = '#92BAE3' topmargin='120' leftmargin='0'>";

echo"<div class='head'>
<div class='headtxt'><font style='font-family:Arial' size='5'><b> WELCOME TO ONLINE CAREER GUIDANCE AND PLACEMENT UNIT</b>
</div>
<div class='mar'><CENTER><marquee id='test' behavior='scroll' direction='left' cellspacing='0' height='30' width='700' scrolldelay='1'  scrollamount='3' onMouseOver='document.all.test.stop()'
onMouseOut='document.all.test.start()'>
<font style='font-family:Arial' size='4'><b>WELCOME YOU ! </b>
</marquee></CENTER>
</div></div>";
require'db_conn1.php';
$code=$_POST['code'];

$cn=$_POST['cn'];
$fn=$_POST['fn'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$gc=$_POST['sex'];
$cat=$_POST['cat'];
$addr1=$_POST['addr1'];
$addr2=$_POST['addr2'];
$addr3=$_POST['addr3'];
$addr4=$_POST['addr4'];
$addr5=$_POST['addr5'];
$cno=$_POST['cno'];
$email=$_POST['email'];
$nc=$_POST['nc'];
$crs=$_POST['crs'];
$bch=$_POST['bch'];
$sem=$_POST['sem'];
$rono=$_POST['rono'];
$dt=date("d/m/y");
$sts='Inactive';

//alphanumeric passwrd

$length=7;
$password="";
$possible="123468ADSGHFJHGagjhgfjgu$%#@&*";
$maxlength=strlen($possible);
if($length>$maxlength)
{
  $length=$maxlength;
}
$i=0;
while($i<$length)
{
  $char=substr($possible,mt_rand(0,$maxlength-1),1);
  if(!strstr($password,$char))
  {
    $password.=$char;
    $i++;
  }
}
 //

if(isset($_POST['submit']))
{
if(md5($code).'b81144'==$_COOKIE['rungta'])
{
 $result = mysql_query("insert into std_register values('$cn','$fn','$dd $mm $yy','$gc','$cat','$addr1,$addr2,$addr3,$addr4,$addr5','$cno','$email','$password','$nc','$crs','$bch','$sem','$rono','$dt','$sts')");
if($result)
echo"<font color='green' style='font-family:Arial' size='2'><center><b>Thank You $cn , you have been registered successfuly.<br><font color='yellow' style='font-family:Arial' size='2'> Please note to access your account </font><br><font color='blue' style='font-family:Arial' size='2'> Email : $email <br> Password: $password</font><p><a href='std_registration.php'><font color='red'><-Back</font> </center></h2>";
else
  echo "<font color='red' style='font-family:Arial' size='2'><center><b>Sorry! You have allready registered , Please Try Again !.</center>";
  }
else
  header("Location: std_registration.php?cn=$cn&fn=$fn&dd=$dd&mm=$mm&yy=$yy&addr=$addr&cno=$cno&email=$email&nc=$nc&crs=$crs&bch=$bch&sem=$sem&rono=$rono&wrong_code=true");
}
$db_close=mysql_close();

echo"</body>";
echo"</html>";
?>
