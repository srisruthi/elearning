<!DOCTYPE html
PUBLIC "-//WC//DTD XHTML 1.0 strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>signup page</title>
<script type="text/javascript">
function check1()
{
if(document.getElementById('s').checked || document.getElementById('p').checked)
{
document.getElementById("pn").disabled=true;
document.getElementById("in").disabled=false;
}
if(document.getElementById('pc').checked )
{
document.getElementById("in").disabled=true;
document.getElementById("pn").disabled=false;
}

}
function validate()
{
if(document.myform.name.value=="")
{
window.alert("please fill up the name field!");
document.myform.name.focus();
return false; 
}
if(!isNaN(document.myform.name.value))
{
window.alert("please enter the valid name");
document.myform.name.focus();
return false;
}
var email=document.myform.mail; 
if(email.value.indexOf("@",0)<0)
{
window.alert("pls enter valid emailid!");
email.focus();
return false;
}

if(email.value.indexOf(".",0)<0)
{
window.alert("pls enter valid emailid!");
email.focus();
return false;
}
var user=document.myform.uname.value;
if(isNaN(user))
{
window.alert("pls enter the ID as numbers!");
user.focus();
return false;
}
}
function pass()
{
var p1=document.getElementById("pass1").value;
var p2=document.getElementById("pass2").value;
if(p1!=p2)
{
alert(" invalid.make sure ur password");
return false;
}
else
return true;
}
/*var pw=document.myform.pas.value;
var p=document.myform.pswd.value;
var str1=pw.toString();
var str2=p.toString();
var v=str1.localeCompare(str2);
if(v!=0)
{
window.alert("pls make sure ur password!);
pw.focus();
return false;
}*/
/*if(pwd.match(/^[a-z][A-Z]/) && pwd.match(/^[0-9]/) && pwd.match(/^[!,@,#,$,%,^,&,*,(,),?,_,-,+]/) && pwd.length>8)
{
window.alert("ur password should contain alphabet,digits,special character ang length should be 8");
pwd.focus();
return false;
}*/
function chh()
{
if(document.myform.name.value==null ||document.myform.mail.value==null  || document.myform.uname.value==null    || document.myform.pas.value==null
 || document.myform.pswd.value==null   || document.myform.cat1.value==null   || document.myform.uname.value==null  || document.myform.agree.value==null
  || document.myform.iname.value==null   || document.myform.pname.value==null)
{
alert ("Ensure all the fields are filled");
}
}
function mob()
{
var m=document.myform.mobile.value;
var max=/^[0-9]{10}$/;
if(!(m.match(max)))
{
window.alert("pls enter the phonenumber maximum 10 characters");
}
}
</script>
</head>
<center>
<h1 style="color:white">Signup</h1>
<body background="blue-business-background.jpg">
<img src="Sign-up-button-created-by-KG.png" width="250px" height="250px" style="float:left;">
<table>
<form action="last.php"  target="_blank" name="myform" method="POST" onsubmit="return validate();">
<tr><td style="color:white;font-size:23px;">Name:</td>
<td><input type="text" name="name"  onblur="return(validate());"></td></tr> 
<tr><td style="color:white;font-size:23px;">Email-Id:</td> 
<td><input type="text" name="mail"  onblur="return(validate());"></td></tr>
<tr><td style="color:white;font-size:23px;">Mobile NO:</td> 
<td><input type="text" name="mobile"  onblur="return(mob());"></td></tr>
<tr><td style="color:white;font-size:23px;">UserID:</td>
<td><input type="text" name="uname"  onblur="return(validate());"></td></tr>
<tr><td style="color:white;font-size:23px;">Password:</td>
<td><input type="password" name="pas"   onblur="return(pass());" id="pass1"></td></tr>
<tr><td style="color:white;font-size:23px;" >Confirm Password:</td>
<td><input type="password" name="pswd" onblur="return(pass());" id="pass2"></td></tr>
<tr><td style="color:white;font-size:23px;">Category:</td>
<td style="color:white;font-size:23px;">
		<input type="radio" name="cat1" value="student" id="s" onclick="return(check1());">Student
		 <input type="radio" name="cat1" value="professor" id="p" onclick="return(check1());">Professor
		 <input type="radio" name="cat1" value="publicator" id="pc" onclick="return(check1());">Publisher</td></tr>
<tr><td style="color:white;font-size:23px;">Institution Name:</td>
<td><input type="text" name="iname" id="in"disabled   onblur="return(validate());"></td></tr>
<tr><td style="color:white;font-size:23px;">Publicator Name:</td>
<td><input type="text" name="pname" id="pn" disabled   onblur="return(validate());"></td></tr>
<tr><td style="color:white;font-size:23px;"><input type="checkbox" name="agree" value="agree" value="agree">I agree that above given details are correct upto my knowledge</td></tr><br><br>										
<tr><td style="color:white;font-size:23px;"><input type="s	ubmit" name="submit" onclick="return(chh());">
<input type="reset" name="reset"></td></tr>
</form>
</table>
<script>
</script>
</body>
</center>
</html>

