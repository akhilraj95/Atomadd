<?php 
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    if(!isset($_SESSION["user_id"]))
    {           header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Script Eden ( http://scripteden.net/ ) Template Builder v2.0.0">  

    <?php include ('include/googleSignIn.php'); ?>


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

    	<!-- Start Content Block 1-4 -->

    <div class="container" style="margin-top:7%;outline:2px solid grey;">
            <h4><b> Your orders</b></h4>
                          
                  

                    <?php

                              include ('include/dbgetconn.php');
        
                                $sql = "SELECT * FROM `filetable` WHERE `user_id`=".$_SESSION['user_id'];
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    
                                    echo '<table class="table table-responsive">
                                            <thead>
                                              <tr>
                                                <th>OrderName</th>
                                                <th>Color</th>
                                                <th>Material</th>
                                                <th>Time</th>
                                                <th>Address</th>
                                              </tr>
                                            </thead>
                                            <tbody>';
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo "<tr>";
                                        echo "<td>".substr($row['filename'],11)."</td>";
                                        echo "<td>".$row['color']."</td>";
                                        echo "<td>".$row['material']."</td>";
                                        echo "<td>".$row['timestamp']."</td>";
                                        echo "<td> ".$row['fullname'].", ".$row['mobilenumber'].", ".$row['address'].", ".$row['towncity'].", ".$row['state']."</td>";
                                        echo "</tr>";
                                    }
                                    
                                } else {

                                    echo "<h5> You dont have any orders yet! Click on <a href='StlView.php'>3Dprint</a> to order.</h5>";
                                    
                                }
                    ?>
                     
                    </tbody>
                  </table>
                
    </div>

	</div><!-- /#page -->
    <?php include ('include/loadjs.php'); ?>

</body>
</html>