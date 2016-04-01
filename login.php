
<!DOCTYPE html
PUBLIC "-//WC//DTD XHTML 1.0 strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Login page</title>
<script type="text/javascript">
function valid1()
{
if(document.myform.usrname.value=="")
{
window.alert("pls fillup userid field");
document.form.usrname.focus();
return false;
}
if(isNaN(document.myform.usrname.value))
{
window.alert("pls enter the valid userId!");
document.form.usrname.focus();
return false;
}
}
</script>
</head>
<body background="blue_background_abstract-wide.jpg">
<center>
<form action="pro.php"  name="myform" method="POST"><br><br><br><br><br><br>
<p style="color:black; size=16px;">User ID:<input type="text" name="usrname"   onblur="return(valid1());"></p></font><br>
<p style="color:black; size=16px;">Password:<input type="password" name="pass1" required="required" ></p></font><br>
<input type="Submit" name="submit"><br>
<img src="h.jpg" width="350px" height="250px">
</center>
</body>
</html>

