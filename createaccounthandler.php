<?php

$email = $password = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  $email = test_input($_POST["email"]);
  $passwrd = test_input($_POST["password"]);

  $fullname = test_input($_POST["fullname"]);
  $mobilenumber = test_input($_POST["mobilenumber"]);
  $pincode= test_input($_POST["pincode"]);
  $address = test_input($_POST["address"]);
  $landmark = test_input($_POST["landmark"]);
  $towncity = test_input($_POST["towncity"]);
  $state = test_input($_POST["state"]);
  $country = test_input($_POST["country"]);
  

  include ('include/dbgetconn.php');
    
    $sql = "INSERT INTO `usertable`(`user_email`, `user_password`, `fullname`, `mobilenumber`, `pincode`, `address`, `landmark`, `towncity`, `state`, `user_country`) VALUES ('$email','$passwrd','$fullname','$mobilenumber','$pincode','$address','$landmark','$towncity','$state','$country')";

    if ($conn->query($sql) === TRUE) {
        
        session_start();
        $_SESSION['user_id'] = $conn->insert_id;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_country'] = $country;

        $_SESSION['user_fullname'] = $fullname;
        $_SESSION['user_mobilenumber'] = $mobilenumber;
        $_SESSION['user_pincode'] = $pincode;
        $_SESSION['user_address'] = $address;
        $_SESSION['user_landmark'] = $landmark;
        $_SESSION['user_towncity'] = $towncity;
        $_SESSION['user_state'] = $state;
        
        header('Location: dashboard.php');

    } else {
        header('Location: createaccount.php');
    }
 $conn->close();

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>