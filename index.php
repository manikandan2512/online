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
<script src='js/std_log.js' type='text/javascript'></script>
<script src='js/campus_details_view.js' type='text/javascript'></script>
<head>

<link href="frm_css.css" rel="stylesheet">
</head>
<?php
echo"<body bgcolor = '#92BAE3' topmargin='200' leftmargin='0'>";

echo"<div class='head'><div class='lng'></div>
<div class='headtxt'><font style='font-family:Arial' size='5'><div id='rng'><b>WELCOME TO ONLINE CAREER GUIDANCE AND PLACEMENT UNIT</b></div>
</div>

<div class='admin' style='border-radius:10px;'><a href='admin/log.php' style='text-decoration:none;'><font color='#B7DC0A' style='font-family:Arial' size='2'><b>&nbsp&nbsp&nbsp Go To Admin...</b></a>
</div>
<div class='mar'><CENTER><marquee id='test' behavior='scroll' direction='left' cellspacing='0' height='30' width='700' scrolldelay='1'  scrollamount='3' onMouseOver='document.all.test.stop()'
onMouseOut='document.all.test.start()'>
<font style='font-family:Arial' size='4'><b>WELCOME ! Developed by Manikandan.M KG BSc CS A </b>
</marquee></CENTER>
</div></div>";

echo "<form method=POST  action='validate_std.php' name='n' onSubmit='return validated()'>";
echo"<center><table background='img/tlb.jpg' width='1000' height='250'><tr><td><br>
<table align='center' width='950' height='290'  cellspacing='0' cellpadding='0'  >
";

?>
 <tr><td ><td colspan='2'><font style='font-family:Arial' size='2' color='blue'><b>Student's Login :</td></tr>
 <tr><td><font style='font-family:Arial' size='2' color='blue'>EmailID : <td><input type="text" style="background-color:#CCCCCC;" name="un" onfocus="ChangeColor('un')"></tr></td>
 <tr><td><font style='font-family:Arial' size='2' color='blue'>Password : <td><input type="password" style="background-color:#CCCCCC;" name="pass" onfocus="ChangeColor('pass')">
&nbsp <input type="submit" name="sub" value="login" size="30" style="background-color:#3A8C03;font: bold 14px Arial;color:white;" onmouseover="this.style.background='#B7C706'" onmouseout="this.style.background='#B1160E'"> <td>
<tr><td><td><a href="std_registration.php" style="text-decoration:none;"><font style='font-family:Arial' size='2' color='black'>Not Registered yet ? Register Now !</a><td>
<tr><td><td><a href="std_forget_pass.php" style="text-decoration:none;"><font style='font-family:Arial' size='2' color='black'>Forget Password</a><td>
<tr><td><td><a href="std_chg_pass.php" style="text-decoration:none;"><font style='font-family:Arial' size='2' color='black'>Change Password</a></td></tr>
<?php
echo"</td></tr></table></td></tr></table></center>";
echo"</body>";
echo"</html>";
?>
<?php
if(isset($_GET['invalid'])){?>
<div class="invalid"><font color="red" size="3"><b>You have entered invalid name or password ! , Please try again.</div>
<?php ;}?>
<?php
include("fm.php"); 
?>