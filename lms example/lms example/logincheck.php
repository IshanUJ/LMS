
<?php
include_once 'connectoion.php';
	$uname = $_REQUEST["uname"];
	$pwd = $_REQUEST["psw"];
	
	$sql= "SELECT * FROM student WHERE name='".$uname."' AND Password ='".$pwd."'";
	$sql2= "SELECT * FROM lectures WHERE L_NAme='".$uname."' AND Password ='".$pwd."'";

	$result = $con->query($sql);
	$result2 = $con->query($sql2);

	if($result->num_rows>0){
			header("Location:log1.php");
	} else if($result2->num_rows>0){
			header("Location:leclog1.php");
	}
	else
		echo '<script language="javascript">';
		echo 'alert("YOUR PASSWORD OR USERNAME IS IN CORRECT TRY AGAIN!!!!!!")';
		echo '</script>';
		
?>
