<?php
$host="localhost";
	$dbuser="root";
	$dbname="elearn";
	$password="";
	
//session_start();
$con=mysql_connect($host,$dbuser,$password);
	
	if(!$con)
	{
	die('could not connect:'. mysql_error());
	}
//	die("error");
	mysql_select_db($dbname,$con);
	$usrname=$_POST["usrname"];
	$pass1=$_POST["pass1"];
	$qry="select * from user where userid=$usrname" ;           
	$flag=0;
	$ch="";
	if($res=mysql_query($qry,$con)){
	while($row = mysql_fetch_array($res)){
		$flag=1;
		$ch=$row[4];
		//echo "$ch $pass1";
		if($row[4]==$pass1){
			echo "successfulll";
			break;}
	}
	}
	if($ch != $pass1){
	//echo "error:" .$qry. "<br>" .mysql_error($con);
	echo "login failed,try again";
	die("error");}
	mysql_close($con);
?> 

<!DOCTYPE html
PUBLIC "-w3c/DTD XHTML 1.0 strict //EN"
"http://www.w3.org/tr/xhtmll/DTD/xhtml-strict.dtd">
<html xmlns=""http://www.w3.org/1999/xhtml">
<head>
<title>E-LEARNING RESOURCE LOCATER</title>
<link rel="stylesheet" type="text/css" href="st.css">
</head>
<body id="i1" bgcolor="meena"></br></br>
<center></br></br></br>
<form action="up.php"></br></br>
<input type="submit" value="UPLOAD MATERIAL"  id="b1"></br></br>
</form>
</br>
</br>
<form action="do.php">
<input type="submit" value="DOWNLOAD MATERIAL" onclick="do.html" id="b2"></br></br>
</br>
</form>
</br>
</br>
</center> 
</body>
</html>
