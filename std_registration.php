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
<script src='js/std_reg.js' type='text/javascript'></script>
<head>

<link href="frm_css.css" rel="stylesheet">
</head>
<?php
echo"<body bgcolor = '#F0F2E1' topmargin='120' leftmargin='0'>";

echo"<div class='head'>
<div class='headtxt'><font style='font-family:Arial' size='5'><b> WELCOME TO ONLINE CAREER GUIDANCE AND PLACEMENT UNIT</b>
</div>
<div class='mar'><CENTER><marquee id='test' behavior='scroll' direction='left' cellspacing='0' height='30' width='700' scrolldelay='1'  scrollamount='3' onMouseOver='document.all.test.stop()'
onMouseOut='document.all.test.start()'>
<font style='font-family:Arial' size='4'><b>WELCOME YOU !</b>
</marquee></CENTER>
</div></div>";
echo "<form method=POST enctype='multipart/form-data' action='std_reg_sub.php' name='sreg' onSubmit='return val()'>";
echo"<center><font style='font-size:18;font-family:Arial;color:black'><b>Student's Registration Form :</center>";
echo"<center><br><table border='1' cellspacing='0' cellpadding='0' height='300'>
<tr bgcolor='#D4A502'><td width=800 align='center' height='30'><font style='font-size:15;font-family:Arial;color:black'><b>Fill Personal Details:<br></td>
<tr><td width=800>";

?>
<center>
<br><table>
<tr><td>
<b><font style='font-size:14;font-family:Arial;color:black'>Candidate Name:</td><td><input type="text" name="cn" value="<?php echo $_GET['cn'];?>" style="background-color:#DEE189;" onfocus="changeColor('cn');"></td></tr>
<tr><td>
<b><font style='font-size:14;font-family:Arial;color:black'> Father Name:</td><td><input type="text" name="fn" value="<?php echo $_GET['fn'];?>" style="background-color:#DEE189;" onfocus="changeColor('fn');"></td></tr>
<tr><td>
<tr><td><b><font style='font-size:14;font-family:Arial;color:black'>Date Of Birth:<td><font style='font-size:14;font-family:Arial;color:black'>Day:<select name=dd style="background-color:#DEE189;" onfocus="changeColor('dd');" value="<?php echo $_GET['dd'];?>">
<?php
echo "<option value='-1'>Day</option>";
$i=1;
$mm=0;
for($i=1;$i<=31;$i++)
{
 $mm=$mm+1;
 echo "<option value='$mm'>$mm</option>";
}

echo"</select>";
?>
<font style='font-size:14;font-family:Arial;color:black'>Month:<select name="mm" style="background-color:#DEE189;" onfocus="changeColor('mm');" value="<?php echo $_GET['mm'];?>">
<?php
echo "<option value='-1'>Month</option>";
echo "<option value='Jan'>Jan</option>";
echo "<option value='Feb'>Feb</option>";
echo "<option value='March'>March</option>";
echo "<option value='April'>April</option>";
echo "<option value='May'>May</option>";
echo "<option value='June'>June</option>";
echo "<option value='July'>July</option>";
echo "<option value='August'>August</option>";
echo "<option value='Sept'>Sept</option>";
echo "<option value='Oct'>Oct</option>";
echo "<option value='Nov'>Nov</option>";
echo "<option value='Dec'>Dec</option>";
echo"</select>";
?>
<font style='font-size:14;font-family:Arial;color:black'>Year:<select name="yy" style="background-color:#DEE189;" onfocus="changeColor('yy');" value="<?php echo $_GET['yy'];?>">
<?php
echo "<option value='-1'>Year</option>";
$i=1;
$yr=2016;
for($i=1;$i<=71;$i++)
{
 $yr=$yr-1;
 echo "<option value='$yr'>$yr</option>";
}



echo"</select></td></tr>";
echo "<tr><td>";
echo "<b><font style='font-size:14;font-family:Arial;color:black'>Sex:</td><td><input type=radio  name=sex value=male id=rd1 style='background-color:#DEE189;border:1px solid;'><font style='font-size:14;font-family:Arial;color:black'>Male";
echo"<input type=radio  name=sex value=female id=rd2 style='background-color:#DEE189;border:1px solid;'><font style='font-size:14;font-family:Arial;color:black'>Female</td></tr>";
?>
<tr><td>
<b><font style='font-size:14;font-family:Arial;color:black'>Category:</td><td><input type="radio"  name="cat" value="GEN" id="rd3" style="background-color:#DEE189;border:1px solid;"><font style='font-size:14;font-family:Arial;color:black'>GEN

<input type="radio"  name="cat" value="OBC" id="rd4" style="background-color:#DEE189; border:1px solid;"><font style='font-size:14;font-family:Arial;color:black'>OBC

<input type="radio"  name="cat" value="SC" id="rd5" style="background-color:#DEE189; border:1px solid;"><font style='font-size:14;font-family:Arial;color:black'>SC

<input type="radio"  name="cat" value="ST" id="rd6" style="background-color:#DEE189; border:1px solid;"><font style='font-size:14;font-family:Arial;color:black'>ST </td></tr>
<tr><td><br></td></tr></table>
<tr  bgcolor='#D4A502'><td width=800 align='center' height='30'><font style='font-size:15;font-family:Arial;color:black'><b>Fill Contact details:<br></td>
<tr><td>
<center><br><table>
<tr ><td>
<b><font style='font-size:14;font-family:Arial;color:black'>Address:</td><td>Line 1 : &nbsp <input type="text"  name="addr1" value="<?php echo $_GET['addr1'];?>" size="40" style="background-color:#DEE189;" onfocus="changeColor('addr');"></td></tr>
<tr ><td>
<b><font style='font-size:14;font-family:Arial;color:black'></td><td>Line 2 : &nbsp <input type="text"  name="addr2" value="<?php echo $_GET['addr2'];?>" size="40" style="background-color:#DEE189;" onfocus="changeColor('addr');"></td></tr>
<tr ><td>
<b><font style='font-size:14;font-family:Arial;color:black'></td><td>Line 3 : &nbsp <input type="text"  name="addr3" value="<?php echo $_GET['addr3'];?>" size="40" style="background-color:#DEE189;" onfocus="changeColor('addr');"></td></tr>
<tr ><td>
<b><font style='font-size:14;font-family:Arial;color:black'></td><td>City : &nbsp&nbsp&nbsp&nbsp <input type="text"  name="addr4" value="<?php echo $_GET['addr4'];?>" size="40" style="background-color:#DEE189;" onfocus="changeColor('addr');"></td></tr>
<tr ><td>
<b><font style='font-size:14;font-family:Arial;color:black'></td><td>State : &nbsp&nbsp <input type="text"  name="addr5" value="<?php echo $_GET['addr5'];?>" size="40" style="background-color:#DEE189;" onfocus="changeColor('addr');"></td></tr>

<tr><td>
<b><font style='font-size:14;font-family:Arial;color:black'>Contact No.:</td><td><input type="text" name="cno" value="<?php echo $_GET['cno'];?>" style="background-color:#DEE189;" onfocus="changeColor('cno');"></td></tr>
<tr><td>
<b><font style='font-size:14;font-family:Arial;color:black'>Email-Id:</td><td><input type="text"  name="email" value="<?php echo $_GET['email'];?>" style="background-color:#DEE189;" onfocus="changeColor('email');"></td></tr>
<tr><td><br></td></tr></table>
<tr  bgcolor='#D4A502'><td width=800 align='center' height='30'><font style='font-size:15;font-family:Arial;color:black'><b>Fill Current Qualification Details:<br></td>
<tr><td>
<center><br><table>
<tr ><td>
<b><font style='font-size:14;font-family:Arial;color:black'>Name of Institute / College:</td><td><input type=text  name="nc" size="40" value="KG College of Arts and Science" readonly='readonly' style="background-color:#DEE189;" onfocus="changeColor('nc');"></td></tr>
<tr><td>
<font style='font-size:14;font-family:Arial;color:black'><b>Course:<td><select name=crs style="background-color:#DEE189;" onfocus="changeColor('crs');" value="<?php echo $_GET['crs'];?>">
 <?php
echo "<option valu1='-1'> Select type</option>";
echo "<option value='M.Tech'>M.Tech</option>";
echo "<option value='MCA'>MCA</option>";
echo "<option value='B.Tech'>B.Tech</option>";
echo "<option value='BE'>BE</option>";
echo "<option value='MSc'>MSc</option>";
echo "<option value='BCA'>BCA</option>";
echo "<option value='BSc'>BSc</option>";
echo "<option value='Others'>Others</option>";
echo"</select>";
echo"</td></tr>";
?>
<tr><td>
<font style='font-size:14;font-family:Arial;color:black'><b>Branch:<td><select name=bch style="background-color:#DEE189;" onfocus="changeColor('bch');" value="<?php echo $_GET['bch'];?>">
 <?php
echo "<option value='-1'> Select type</option>";
echo "<option value='ME'>ME</option>";
echo "<option value='CS'>CS</option>";
echo "<option value='IT'>IT</option>";
echo "<option value='EC'>EC</option>";
echo "<option value='EE'>EE</option>";
echo "<option value='CE'>CE</option>";
echo "<option value='NA'>NA</option>";
echo "<option value='Others'>Others</option>";
echo"</select>";
echo"</td></tr>";
?>
<tr><td>
<font style='font-size:14;font-family:Arial;color:black'><b>Semester:<td><select name=sem style="background-color:#DEE189;" onfocus="changeColor('sem');" value="<?php echo $_GET['sem'];?>">
 <?php
echo "<option value='-1'> Select type</option>";
echo "<option value='Sem-I'>Sem-I</option>";
echo "<option value='Sem-II'>Sem-II</option>";
echo "<option value='Sem-III'>Sem-III</option>";
echo "<option value='Sem-IV'>Sem-IV</option>";
echo "<option value='Sem-V'>Sem-V</option>";
echo "<option value='Sem-VI'>Sem-VI</option>";
echo "<option value='Sem-VII'>Sem-VII</option>";
echo "<option value='Sem-VIII'>Sem-VIII</option>";

echo"</select>";
echo"</td></tr>";
?>
<tr><td>
<b><font style='font-size:14;font-family:Arial;color:black'>Roll No.:</td><td><input type="text" name="rono" value="<?php echo $_GET['rono'];?>" style="background-color:#DEE189;" onfocus="changeColor('rono');"></td></tr>

<tr><td><td><div class="code"><img src="std_verify.php?<?php echo rand(1000,9999);?>" align="absbottom"></div></td></tr>
<tr><td><b><font style='font-size:14;font-family:Arial;color:black'>Enter Verification code:<td><input type="text" size="26" name="code" style="background-color:#DEE189;" id="code" onfocus="changeColor('code');"></td></tr>
<tr><td><td>
<?php
if(isset($_GET['wrong_code'])){?>
<div class="error"><font style='font-size:14;font-family:Arial;color:red'>You have Entered wrong code!, Please try again.</div>
<?php ;}?>
</td></tr>
<?php
echo"<tr><td><td><input type=Submit name=submit value=Submit size='20' style='background-color:#C4C3BF;font: bold 14px Arial;' >&nbsp<input type=reset name=btn3 value=Refresh style='background-color:#C4C3BF;font: bold 14px Arial;'></td></tr>
</div></td></tr></table><br>
<tr  bgcolor='#666666'><td width=800 align='center' height='30'><font style='font-size:15;font-family:Arial;color:black'><center><a href='index.php' style='text-decoration:none;'><font style='font-size:14;font-family:Arial;color:yellow'><<-Goto Login</a><br></td>
</td></tr></table></center>";
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