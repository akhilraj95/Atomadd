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
                    <form class="form-signin jumbotron  " action="sendpasswordresetmail.php" style="margin-top:10%;"method="POST">
                        <h2 class="form-signin-heading" style="text-align: center;">Reset your password</h2>
                        <h3 class="form-signin-heading" style="text-align: center;">We will send you a link to change your password</h3>
                        <div class="g-signin2" data-onsuccess="onSignIn" align="center"></div>
                       <br/>

                        <div class="row">
                            <div class="col-md-offset-3 col-md-6">
                            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" value="" required autofocus>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-md-offset-3 col-md-6">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                            </div>
                        </div>
            </div>


	<!--// END Footer Copyright Bar -->

	</div><!-- /#page -->
    <?php include ('include/loadjs.php'); ?>

</body>
</html>