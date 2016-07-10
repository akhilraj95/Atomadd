<?php

    $email = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
          $email = test_input($_POST["email"]);
          $passwrd = test_input($_POST["password"]);

        include ('include/dbgetconn.php');
        
        $sql = "SELECT * FROM `usertable` WHERE `user_email`='$email' AND `user_password` = '$passwrd'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            $row = $result->fetch_assoc();
            
            session_start();
            $_SESSION['user_id'] = $row["user_id"];
            $_SESSION['user_email'] = $email;
            $_SESSION['user_country'] = $row["user_country"];

            $_SESSION['user_fullname'] = $row["fullname"];
            $_SESSION['user_mobilenumber'] = $row["mobilenumber"];
            $_SESSION['user_pincode'] = $row["pincode"];
            $_SESSION['user_address'] = $row["address"];
            $_SESSION['user_landmark'] = $row["landmark"];
            $_SESSION['user_towncity'] = $row["towncity"];
            $_SESSION['user_state'] = $row["state"];

           // echo $_SESSION['user_id'].$_SESSION['user_email'].$_SESSION["user_country"].$_SESSION['user_fullname'].$_SESSION["user_mobilenumber"].$_SESSION['user_pincode'].$_SESSION["user_address"].$_SESSION['user_landmark'].$_SESSION["user_towncity"].$_SESSION['user_state'];
            header('Location: dashboard.php');
            
        } else {
            
            ?>    
                <?php include ('include/loginfail.php'); ?>

            <?php
            
        }

    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>