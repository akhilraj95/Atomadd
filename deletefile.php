<?php
	session_start();
	if(!isset($_SESSION["admin"]))
	{
			header('Location: adminlogin.php');
	}


	if(isset($_POST["filename"])){
		

	  include ('include/dbgetconn.php');
	    
	    $sql = "DELETE FROM `filetable` WHERE `filename`='".$_POST["filename"]."'";

	    if ($conn->query($sql) === TRUE) {
			unlink('uploads//'.$_POST["filename"]);
			header('Location: admindashboard.php');
		}
		else
		{
			echo "File deletion failure.";
		}

	}
?>
