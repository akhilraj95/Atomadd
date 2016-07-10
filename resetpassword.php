<?php 

	if(isset($_POST["email"]) and isset($_POST["password"]) and isset($_POST["signaturestamp"])){

		 include ('include/dbgetconn.php');
    
		 $randomgen = md5(uniqid(rand(), true));
		 $email = $_POST["email"];
		 $signaturestamp = $_POST["signaturestamp"];
		 $password = $_POST["password"];

		 $sql = "UPDATE `usertable` SET `user_password`='$password',`signaturestamp`='$randomgen' WHERE `user_email`='$email' and `signaturestamp`='$signaturestamp'";

        $conn->query($sql);
	     if ($conn->affected_rows>0) {
        	echo "password updated<br><br><a href='http://www.atomadd.com'>go to atomadd</a>";
	     }
	     else
	     {
	     	echo "password reset failed <a href='http://www.atomadd.com'>go to atomadd</a>";
	     }
	

	}

?>