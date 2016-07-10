 <?php
if(isset($_POST["email"])){

        $email = $_POST["email"];
        $randomgen = md5(uniqid(rand(), true));

         include ('include/dbgetconn.php');
         $sql = "UPDATE `usertable` SET `signaturestamp`= '$randomgen' where `user_email`= '$email'";
        
      
        if ($conn->query($sql) === TRUE) {


          $sql = "SELECT `signaturestamp` FROM `usertable` WHERE `user_email`='$email'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $signaturestamp = $row['signaturestamp'];
            
              include ('include/init_masterplacemail.php');

                              $mail->setFrom('marketplace@atomadd.com', 'AtomAdd');     // Add a recipient
                              $mail->addAddress($email);               // Name is optional

                              $mail->isHTML(true);                                  // Set email format to HTML

                              $mail->Subject = 'AtomAdd Password Reset';
                              $mail->Body    = '
              <html>
              <h4>Hello,<//h4>
              <br//>
              <p>We have recieved a password reset request.<//p><br>
              <p>If you want to reset the password click the link below.<//p><br><br>
              <p><b>Password reset link<//b><br><br>
              <br>
              <a href="atomadd.com/98213487.php?id='.$signaturestamp.'">reset password</a>
              <p>Ignore if you didnt request for a password reset<//p>
              <p>We hope to see you soon.<//p>
              <p><b>AtomAdd<//b><//p>
              <//html>
              ';
                              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                              if(!$mail->send()) {
                                  echo 'Message could not be sent.';
                                 
                              } else {
                                  echo 'Message has been sent. Please check your email to reset the password';
                              }

    }
   }
  }
?>