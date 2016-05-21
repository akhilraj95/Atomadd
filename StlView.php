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
            <div class="jumbotron">
                <div class="text-center">
                    <br/>
                     <div class="row">
                                    <h1>Drag and Drop your model and get printing</h1>
                                    <p>Select your file or drop your file</p>
                                     <input type="file" id="file"/> 
                    </div>
                    <div id="view"></div>
                </div>
            </div>
        </div>
        <?php include ('include/footer.php'); ?>
    
    </div><!-- /#page -->

    <?php include ('include/loadjs.php'); ?>
</body>
</html>