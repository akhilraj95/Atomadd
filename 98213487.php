<?php
	if(isset($_GET['id']))
	{
		$signaturestamp = $_GET['id'];		
	}
	else
	{
		header('Location: index.php');
	}
?>
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
			    
			     <script type="text/javascript">
			        function passwordcheck()
			        {
			            if(document.getElementById("password").value != document.getElementById("repassword").value)
			            {
			                alert("passwords dont match");
			                return false;
			            }
			            return true;

			        }
			    </script>
     

			<style type="text/css"></style></head>
			<body>
			    
			    <div id="page" class="page">
			            <div class="container">
			                  <form class="form-signin jumbotron  " action="resetpassword.php" style="margin-top:10%;"method="POST">
			                        <h2 class="form-signin-heading" style="text-align: center;">Reset your password</h2>
			                        <div class="g-signin2" data-onsuccess="onSignIn" align="center"></div>
			                       <br/>

			                        <div class="row">
			                            <div class="col-md-offset-3 col-md-6">
			                            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" value="" required autofocus>
			                            </div>
			                        </div>
			                        <div class="row">
			                            <div class="col-md-offset-3 col-md-6">
			                            <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
			                            </div>
			                        </div>
			                        <div class="row">
			                            <div class="col-md-offset-3 col-md-6">
			                            <input type="password" id="repassword" class="form-control" name="repassword" placeholder="re-enter password">
			                            </div>
			                        </div>
			                        <input type="hidden"  name="signaturestamp" value="<?php echo $signaturestamp;?>" >

			                         <div class="row">
			                            <div class="col-md-offset-3 col-md-6">
			                                <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="return passwordcheck()">Sign in</button>
			                            </div>
			                        </div>
			         		</form>
			            </div>


				<!--// END Footer Copyright Bar -->

				</div><!-- /#page -->

			</body>
			</html>
			

			