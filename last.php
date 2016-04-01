<?php
	$host="us-cdbr-iron-east-03.cleardb.net";
	$dbuser="b4c35862030d7b";
	$dbname="ad_2ab6d38636788ac";
	$password="cf8c5819";
	$con=mysql_connect($host,$dbuser,$password);
	
	if(!$con)
	{
	die('could not connect:'. mysql_error());
	}
	mysql_select_db($dbname,$con);
	$name=$_POST["name"];
	$mail=$_POST["mail"];
	$phone=$_POST["mobile"];
	$uname=$_POST["uname"];
	$pass=$_POST["pas"];
	$cat=$_POST["cat1"];
   if($cat=='student' || $cat=='professor')
	{
		$iname=$_POST["iname"];
	$sql1="insert into user (name,mail,mobile,userid,pass,category,insname)values('".$name."','".$mail."',".$phone.",".$uname.",'".$pass."','".$cat."','".$iname."')";
	//echo "$sql1";
	}
	else
	{
	$pname=$_POST["pname"];
	$sql1="insert into user (name,mail,mobile,userid,pass,category,pubsname) values('".$name."','".$mail."',".$phone.",".$uname.",'".$pass."','".$cat."','". $pname."')";
	//echo "$sql1";
	}
    if(mysql_query($sql1,$con))
	{
	echo " new record inseerted sucessfully";
	}
	else
	{
	   echo "error".$sql1.mysql_error($con);
	}
		mysql_close($con);
	?>
	


<html>
<body bgcolor='#godplsgive'>
<center>
<a href="index.php">HOME</a>
<h3><b><font color='white'>Thankyou For Your Registration!!!!!!</font></b></h3>
<p><i><font color='white'>Go to home page for login!!!!!!!</i></font></p>
<marquee behavior="alternate"><img src="6sufyghsj.jpg" /></marquee>
</body>
</center>
</html>
