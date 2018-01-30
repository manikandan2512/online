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
<script src='js/campus_details_view.js' type='text/javascript'></script>
<head>

<link href="frm_css.css" rel="stylesheet">


	<script type='text/javascript' src='calendar/jquery.js'></script>
	<link href='calendar/calendar.css' rel='stylesheet' type='text/css'>
        <script type='text/javascript'>
            var getDatee = new Date();
            var monthe = getDatee.getMonth();
            var yeare = getDatee.getFullYear();
            var day = getDatee.getDate(); 
            function isEmpty(val){
               return (val === undefined || val == null || val.length <= 0) ? true : false;
            }

            function prev()
            {
            	monthe = monthe-1;
                if(monthe < 0)
        	{
        	    yeare = yeare-1;	
                    monthe = 11;
                }
                dispCal(monthe, yeare);
                return false;
            }
            
            function next()
            {
            	monthe = monthe+1;
                if(monthe > 11)
        	{
        	    yeare = yeare+1;	
                    monthe = 0;
                }
                dispCal(monthe, yeare);
                return false;
            }
            
            function daysInMonth(monthe, yeare)
            {
                return 32 - new Date(yeare, monthe, 32).getDate();
            }

            function getElementPosition(arrName,arrItem){
                for(var pos=0; pos<arrName.length; pos++ ){
                    if(arrName[pos]==arrItem){
                        return pos;
                    }
                }
            }
            
            function setVal(getDat){
                $('#sel').val(getDat);
                $('#calendar').hide();
            }
            
            function dispCal(mon,yea){
		var ar = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
                var chkEmpty = isEmpty(mon);
                var n,days,calendar,startDate,newYea,setvale,i;
                if(chkEmpty != true){
                    mon = mon+1;
                    n = ar[mon-1];
                    n += " "+yea;
                    newYea = yea;
                    days = daysInMonth((mon-1),yea);
                    startDate = new Date(ar[mon-1]+" 1"+","+parseInt(yea));
                }else{
                    mon = getElementPosition(ar,ar[getDatee.getMonth()]);
                    n = ar[getDatee.getMonth()];
                    n += " "+yeare;
                    newYea = yeare;
                    days = daysInMonth(mon,yeare);
                    startDate = new Date(ar[mon]+" 1"+","+parseInt(yeare));
                }
                
                var startDay = startDate.getDay();
                var startDay1 = startDay;
                while(startDay> 0){
                   calendar += "<td></td>";  
                   startDay--;
                }                
                i = 1;
                while (i <= days){
                  if(startDay1 > 6){
                      startDay1 = 0;  
                      calendar += "</tr><tr>";  
                  }  
                  mon = monthe+1;
                  setvale = i+","+n;
		  if(i == day && newYea==yeare && mon==monthe){
		    calendar +="<td class='thisday' onclick='setVal(\""+i+"-"+mon+"-"+newYea+"\")'>"+i+"</td>";
                  }else{  
                    calendar +="<td class='thismon' onclick='setVal(\""+i+"-"+mon+"-"+newYea+"\")'>"+i+"</td>";   
                  }
		  startDay1++;  
                  i++;  
                }
		    calendar +="<td><a style='font-size: 9px; color: #efefef; font-family: arial; text-decoration: none;'</td>";
		
                $('#calendar').css('display','block');
                $('#month').html(n);
                var test = "<tr class='weekdays'><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td></tr>";
                test += calendar;
		$('#dispDays').html(test);
            }
        </script>


</head>
<?php
require'db_conn1.php';
echo"<body bgcolor = '#DFE3E3' topmargin='10' leftmargin='0'>";
echo "<form method=POST enctype='multipart/form-data' action='' name='campus' onSubmit='return val()'>";
echo"<center></center>";
echo"<center><br><table cellspacing='0' cellpadding='0' height='300' bgcolor='#E2E3E3'>
<tr><td width=900 align='center' height='30'><font style='font-size:15;font-family:Arial;color:black'><b><font style='font-size:18;font-family:Arial;color:blue'><u>VIEW CAMPUS SCHEDULE:</u></td>
<tr><td width=900>";


?>
<center>
<br><table>
   <tr><td align='left'>&nbsp <font style='font-size:14;font-family:Arial;color:black'>Choose Company:
   <select name='comn1' />
   <?php
  $qry1 = mysql_query("select*from company");
  echo"<option value='-1'>Select name</option>";
 while($r1=mysql_fetch_array($qry1,MYSQL_ASSOC))
 {
   $comn=$r1['comn'];
   echo"<option value='$comn'>$comn</option>";
 }
 echo"</select></td>";
 ?>
        <td align='left' style='position: absolute;z-index:1;'>&nbsp&nbsp <font style='font-size:14;font-family:Arial;color:black'>
        Select Date:<input type='text' id='sel' name='dt1' onclick='dispCal()' size=10 readonly='readonly' />


	<img src='calendar/calendar.png' onclick='dispCal()' style='cursor: pointer; vertical-align: middle;' /> 
        <table class='calendar' id='calendar' border=0 cellpadding=0 cellspacing=0 bgcolor='#FF9900'>
            <tr class='monthdisp'>
                <td class='navigate' align='left'><img src='calendar/previous.png' onclick='return prev()' /></td>
                <td align='center' id='month'></td>
                <td class='navigate' align='right'><img src='calendar/next.png' onclick='return next()' /></td>
                </tr>
            <tr>
                <td colspan=3>
                    <table id='dispDays' border=0 cellpadding=4 cellspacing=4>                        
                    </table>
                </td>
            </tr>
        </table>

        </div>
<td align='right' width='380'><input type='submit' value='Search' Name='search'></tr>


<tr><td><br></td></tr></table>
<tr><td>
<?php


$comn1=$_POST['comn1'];
$dt1=$_POST['dt1'];
if(isset($_POST['search']))
{

$qry2 = mysql_query("select*from company where comn='$comn1' and dt='$dt1'");
echo"<center><table cellspacing='0' cellpadding='0' style='border: 1px solid black;border-radius:5px;'>
<tr>
<th width='22' bgcolor='yellow'>
<th align='center' width='150' bgcolor='#333333'><font size='3' style='font-family:arial;color:white;'>Date :
<th align='center' width='400' bgcolor='#333333'><font size='3' style='font-family:arial;color:white;'>Company name :
<th align='center' width='300' bgcolor='#333333'><font size='3' style='font-family:arial;color:white;'>Eligibility :</th></tr>
";


 while($rows=mysql_fetch_array($qry2, MYSQL_ASSOC))
 {
 $dt=$rows['dt'];$comn=$rows['comn'];$eleg=$rows['eleg'];
echo"<tr>
<td width='22' height='25' bgcolor='#DEF4F9'>
<td bgcolor='#D2E8ED' align='center'><font size='2' style='font-family:arial;color:black'> $dt
<td bgcolor='#C8DEE3' align='center'><font size='2' style='font-family:arial;color:black'>$comn
<td bgcolor='#BFD3D8' align='center'><font size='2' style='font-family:arial;color:black'>$eleg
</tr>";
}
echo"<tr  bgcolor='#F5E9C6'><td colspan='4' align='center'> <br> <center><input type='button' name='btn' value='Print' onclick='window.print()'></center> <BR></td></tr>";
echo"</table></center><br>";
}

?>
<tr><td>
</td></tr></table></center>
</body>
</html>
<?php
include("fm.php"); 
