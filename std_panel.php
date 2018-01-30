<?php
require'db_conn1.php';
require'std_authorisation.php';
echo"<html>";
echo"<frameset rows='16%,*' border='2'>";
echo"<frame src=std_frm_header.php name= header >";
echo"<frameset rows= '7%,*'>";
echo"<frame src= std_frm_btn.php name = left>";
echo"<frame src=std_frm_main.php  name= main>";
echo"</frameset>";
echo"</frameset>";
echo"</html>";

?>
<?php
include("fm.php")
?>