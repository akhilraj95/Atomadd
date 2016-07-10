<?php session_start(); ?>

    <header class="item header margin-top-0 padding-bottom-0" id="header5">
    
    		<div class="wrapper">
    	
    			<div class="container">
    		
    				<nav role="navigation" class="navbar navbar-inverse navbar-embossed navbar-lg navbar-fixed-top">
    					
    					<div class="container">
    				
    						<div class="navbar-header">
    							<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
    								<span class="sr-only">Toggle navigation</span>
    							</button>
    							<a href="index.php" class="navbar-brand brand"> AtomADD</a>
   							</div>
    								
    						<div id="navbar-collapse-02" class="collapse navbar-collapse">
    							<ul class="nav navbar-nav">			      
    								<li id="navbar-opt-1" class="propClone"><a href="dashboard.php">Dashboard</a></li>
    								<li id="navbar-opt-2" class="propClone"><a href="StlView.php">3D Print</a></li>
    								<!-- <li id="navbar-opt-3" class="propClone"><a href="#">About</a></li>
    								<li id="navbar-opt-4" class="propClone"><a href="#">Contact</a></li> -->
    							</ul> 		      
    							<ul class="nav navbar-nav navbar-right">
    								<li class="propClone">
                                        <?php
                                            if(isset($_SESSION['user_id'])){
                                               echo '<a href="signout.php">Signout <span class="glyphicon glyphicon-log-out"></span></a>';
                                            }
                                            else{
                                                echo '<a  data-toggle="modal" data-target="#myModal">Login <span class="fa fa-lock"></span></a>';
                                            }
                                        ?>
                                    </li>
    							</ul>
    						</div><!-- /.navbar-collapse -->
    					
    					</div><!-- /.container -->
    					
    				</nav>
    			
    			
    			</div><!-- /.container -->
    	
    		</div><!-- /.wrapper -->
    	
    	</header><!-- /.item --><!-- Start Footer Copyright Bar -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
            

                    <form class="form-signin" action="login.php" method="POST">
             <!--            <h2 class="form-signin-heading" style="text-align: center;">Sign in or create an account</h2>
 -->
                       <!--  <div class="g-signin2" data-onsuccess="onSignIn" align="center"></div>
                        <p style="text-align: center;">Or</p>
 -->
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
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




                  </form>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      
        