<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Script Eden ( http://scripteden.net/ ) Template Builder v2.0.0">  



    <!--pageMeta-->
    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style.complete.css" rel="stylesheet">
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!--headerIncludes-->
     
    
<style type="text/css"></style></head>
<body>
    
    <div id="page" class="page">
    <?php include ('include/header.php'); ?>

            <div class="container">
                    <form class="form-signin jumbotron  " action="login.php" style="margin-top:10%;"method="POST">
                        <h2 class="form-signin-heading" style="text-align: center;">Login failed</h2>
                        <h3 class="form-signin-heading" style="text-align: center;">The email and password that you entered don't match.</h3>
                        <div class="g-signin2" data-onsuccess="onSignIn" align="center"></div>
                       

                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" value="<?php echo $email;?>" required autofocus>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>


                         <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8 text-center">
                                <a href="createaccount.php">Create a new account</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-offset-2 col-md-8 text-center">
                                <a href="forgotpasswordhandler.php">Forgot your password?</a>
                            </div>
                        </div>
            </div>


	<!--// END Footer Copyright Bar -->

	</div><!-- /#page -->
    <?php include ('include/loadjs.php'); ?>

</body>
</html>