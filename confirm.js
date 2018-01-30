function ClickCheckAll(vol)
{
var i=1;
for(i=1;i<=document.frmMain.hdnCount.value;i++)
{
if(vol.checked == true)
{
eval("document.frmMain.checkbox"+i+".checked=true");
}
else
{
eval("document.frmMain.checkbox"+i+".checked=false");
}
}
}
function onDelete()
{
if(confirm('Do you want to delete ?')==true)
{
return true;
}
else
{
return false;
}
}