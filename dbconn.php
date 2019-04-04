<html>
<body>

<?php
	$con = mysql_connect("localhost","root'@'::1","a@123");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
        $name = addslashes ($_POST['name']);
        $email = addslashes ($_POST['email']);
		$contact = $_POST['no1'];
		$alternative = $_POST['no2'];
		mysql_select_db("cis_id", $con);
		$sql="INSERT INTO `employee_details`(`Name`, `Email`, `Contact`, `Alternavtive`) VALUES ('$name','$email','$contact','$alternative')";
		if (!mysql_query($sql,$con))
		{
		  die('Error: ' . mysql_error());
		  }
		echo "1 record added";
		mysql_close($con)
?>
	<a href = E:\on map\html\Bootstrap\New folder\index.html> <input = "submit" value = "btn">Back</a>
</body>

</html>