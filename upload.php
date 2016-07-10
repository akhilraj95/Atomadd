<?php
session_start();
if(!isset($_SESSION["user_id"]) or !isset($_FILES["file1"]["name"]))
  die("Page not found");
$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

$color = test_input($_POST["color"]);
$material = test_input($_POST["material"]);
$fullname = test_input($_POST["fullname"]);
$mobilenumber = test_input($_POST["mobilenumber"]);
$pincode = test_input($_POST["pincode"]);
$address = test_input($_POST["address"]);
$landmark = test_input($_POST["landmark"]);
$towncity = test_input($_POST["towncity"]);
$state = test_input($_POST["state"]);
$user_id = $_SESSION["user_id"];
//print_r($_POST);

$now = new DateTime();
$prefix = $now->getTimestamp();     
$destfilename = $prefix."-".$fileName;

if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if(move_uploaded_file($fileTmpLoc, "uploads/$destfilename")){
   
	include ('include/dbgetconn.php');
    
    $sql = "INSERT INTO `filetable`(`filename`, `color`, `material`, `fullname`, `mobilenumber`, `pincode`, `address`, `landmark`, `towncity`, `state`, `user_id`) VALUES ('$destfilename','$color','$material','$fullname','$mobilenumber','$pincode','$address','$landmark','$towncity','$state',$user_id)";

    //echo $sql;

    if ($conn->query($sql) === TRUE) {
    	echo("Order successfull");

    	// Sending order confirmation to customer
                include ('include/init_masterplacemail.php');

                $mail->setFrom('marketplace@atomadd.com', 'AtomAdd');     // Add a recipient
                $mail->addAddress($_SESSION['user_email']);               // Name is optional

                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'AtomAdd Order Confirmation';
                $mail->Body    = '<html>
<h4>Hello '.$fullname.',<//h4>
<br//>
<p>Thank you for placing your order with AtomAdd . We would like to let you know that our designers have received your order, and are analyzing the model.<//p><br>
<p>Our designers will get back to your with the qoute and expected date of delivery<//p><br><br>
<p><b>Order Summary<//b><br><br>
<table style="width:100%">
  <tr>
    <td>specification<//td>
    <td>value<//td> 
  <//tr>
  <tr>
    <td>Filename<//td>
    <td>'.$fileName.'<//td> 
  <//tr>
  <tr>
    <td>Color<//td>
    <td>'.$color.'<//td> 
  <//tr>
  <tr>
    <td>Material<//td>
    <td>'.$material.'<//td> 
  <//tr>
  <tr>
    <td>Name</td>
    <td>'.$fullname.'<//td> 
  <//tr>
  <tr>
    <td>Phone number<//td>
    <td>'.$mobilenumber.'<//td> 
  <//tr>
  <tr>
    <td>address<//td>
    <td>'.$address.','.$landmark.','.$towncity.','.$state.','.$pincode.'<//td> 
  <//tr>
</table>
<br><br>
<p>We hope to see you again soon.<//p>
<p><b>AtomAdd<//b><//p>
<//html>
';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }

    } else {
    	$conn->close();
        die("Order error. try again(error - #111)");
    }
	$conn->close();
    
} else {
    echo "couldnt move the uploaded file. try again (error - #444)";
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>