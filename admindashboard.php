<?php
	session_start();
	if(!isset($_SESSION["admin"]))
	{
		if(isset($_POST["username"]))
		{
			$username = test_input($_POST["username"]);
			$passwrd = test_input($_POST["password"]);	
			
			if($username != "" or $passwrd != "")
			{
				  header('Location: adminlogin.php');
			}else
			{
				  $_SESSION["admin"]="1";
			}
		}
		else
		{
			header('Location: adminlogin.php');

		}
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>
<html>
<head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
     <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style.complete.css" rel="stylesheet">
  	
  	<script type="text/javascript">
  		function confirmalert()
  		{
  			var r = confirm("Are you sure you want to delete?");
			if (r == true) {
			    return true;
			} else {
				return false;
			}
  		}
  	</script>  

</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Admin Dashboard</a>
	    </div><!-- 
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Page 1</a></li>
	      <li><a href="#">Page 2</a></li> 
	      <li><a href="#">Page 3</a></li> 
	    </ul> -->
	    <ul class="nav navbar-nav navbar-right">
    			<li class="propClone">
                    <a href="signout.php">Signout <span class="glyphicon glyphicon-log-out"></span></a>
                </li>
    	</ul>
	  </div>

	</nav>

<div class="container">
	<div class="panel panel-default">
  <div class="panel-heading">Live Orders</div>
  <div class="panel-body">
  		<table class="table table-responsive">
                    <thead>
                      <tr>
                        <th>OrderName</th>
                        <th>Color</th>
                        <th>Material</th>
                        <th>Time</th>
                        <th>Address</th>
                        <th>Download</th>
                        <th>Delete</th>  
                      </tr>
                    </thead>
                    <tbody>

                    <?php

                              include ('include/dbgetconn.php');
        
                                $sql = "SELECT * FROM `filetable`";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo "<tr>";
                                        echo "<td>".substr($row['filename'],11)."</td>";
                                        echo "<td>".$row['color']."</td>";
                                        echo "<td>".$row['material']."</td>";
                                        echo "<td>".$row['timestamp']."</td>";
                                        echo "<td> ".$row['fullname'].", ".$row['mobilenumber'].", ".$row['address'].", ".$row['towncity'].", ".$row['state']."</td>";
                                        echo "<td> <form method='POST' action='downloadfile.php'><input type='hidden' name='filename' value='".$row['filename']."'><input type='submit' value='download'></form></td>";
                                        echo "<td> <form method='POST' action='deletefile.php'><input type='hidden' name='filename' value='".$row['filename']."'><input type='submit' value='delete' onclick='return confirmalert()'></form></td>";
                                        echo "</tr>";
                                    }
                                    
                                } else {
                                    
                                }
                    ?>
                     
                    </tbody>
                  </table>
  </div>
</div>

</div>
</body>
</html>