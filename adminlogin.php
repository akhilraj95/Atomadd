<?php
  session_start();
  if(isset($_SESSION["try"]))
    {
      $_SESSION["try"] = $_SESSION["try"]+1;

      if($_SESSION["try"] == 5)
      {
        echo "<h4 class='text-center'> You have one last try. Your session will be blocked.</h4>";
      }
      else if($_SESSION["try"] > 5){
        header('Location: index.php');
      }
      else{
        echo "<p class='text-center'> Invalid Credentials</p>";
      }   
      
    }
  else
  {
    $_SESSION["try"] = 1;
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
     <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style.complete.css" rel="stylesheet">
    
  </head>
  <body id="login">
    <div class="container" style="margin-top:5%;">
      <div class="text-center">
      <h3><b>Admin login</b></h3>
        <form role="form" action="admindashboard.php" method="POST"> 
          <div> 
            <div class="form-group col-md-offset-4 col-md-4">
              <label for="email">Username:</label>
              <input type="email" name="username" class="form-control" id="email">
            </div>
          </div>
          <div>
            <div class="form-group col-md-offset-4 col-md-4">
              <label for="pwd">Password:</label>
              <input type="password" name="password" class="form-control" id="pwd">
            </div>
          </div>
          <div class="row col-md-offset-4 col-md-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

    </div>
    </div> <!-- /container -->
  </body>
</html>