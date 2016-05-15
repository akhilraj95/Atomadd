<html>
<head>
 <?php include ('include/cdn.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r68/three.min.js"></script>
    <script src="https://rawgit.com/mrdoob/three.js/master/examples/js/controls/TrackballControls.js"></script>


<script src="js/loader.js"></script>
<script src="js/stl.js"></script>

</head>
<body>

    <div id="page" class="page">
        <?php include ('include/header.php'); ?>
	
        <div class="container">
                <div class="row banner">
                    
                        <div class="col-md-12">
                            
                            <h1 class="text-center margin-top-100 editContent">
                                Use <b>Halumalu</b> to solve all your 3D printing needs                             
                                <br>
                                Drag and Drop your model and get printing
                            </h1>
                            
                        </div>
                </div><!-- /.row -->
        </div>

        <div class="container">
             <div>
                            select stl file: <input type="file" id="file" /> or drop stl file
            </div>
                            <div id="view"></div>
        </div>

        <?php include ('include/footer.php'); ?>
	</div><!-- /#page -->

    <?php include ('include/loadjs.php'); ?>
</body>
</html>