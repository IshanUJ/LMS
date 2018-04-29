
<?php
	// include 'connectoion.php';

	$con = mysql_connect("localhost","root","") or 
	die("Error : ".mysql_error());
	mysql_select_db("student");
	$result = mysql_query("select * from lectures");


	$uname = $_REQUEST["uname"];
	$pwd = $_REQUEST["psw"];

	// $sql= "select * from lectures";

	// $result = $con->query($sql);

	while($row = mysql_fetch_assoc($result)){

		if($row != null){
			if($row['Password']==$pwd)
				header("Location:leclog1.php");
			else
				echo '<script language="javascript">';
				echo 'alert("YOUR PASSWORD OR USERNAME IS IN CORRECT TRY AGAIN!!!!!!")';
				echo '</script>';
		}
	}
		
?>