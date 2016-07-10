<?php session_start(); 
    error_reporting(E_ERROR | E_PARSE);
?>
<html>
<head>
 <?php include ('include/cdn.php'); ?>

    <!-- for STL Viewing -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r68/three.min.js"></script>
    <script src="https://rawgit.com/mrdoob/three.js/master/examples/js/controls/TrackballControls.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/stl.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


    <script>
    /* Script written by Adam Khoury @ DevelopPHP.com */
    /* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
    function _(el){
      return document.getElementById(el);
    }
    function uploadFile(){

      var file = _("file").files[0];

      var material = _('sel1').options[_('sel1').selectedIndex].text;
      var color = _('sel2').options[_('sel2').selectedIndex].text;

      var fullname = _('fullname').value;
      var mobilenumber = _('mobilenumber').value;
      var pincode = _('pincode').value;
      var address = _('address').value;
      var landmark = _('landmark').value;
      var towncity = _('towncity').value;
      var state = _('state').value;

      if(!file)
      {
        alert("Choose File");
        return false;
      }
      if(fullname == ""){
        alert("Enter fullname");
        return false;
      }
      if(mobilenumber.length < 5 ){
        alert("Enter a valid mobilenumber");
        return false;
      } 
      if(pincode == ""){
        alert("Enter a valid pincode");
        return false;
      }
      if(address == ""){
        alert("Enter a valid address");
        return false;
      }
      if(towncity == ""){
        alert("Enter a valid town/city");
        return false;
      }
      if(state == ""){
        alert("Enter a valid town/city");
        return false;
      }  

      // alert(file.name+" | "+file.size+" | "+file.type);
      var formdata = new FormData();
      formdata.append("file1", file);
      formdata.append("material", material);
      formdata.append("color", color);
      formdata.append("fullname", fullname);
      formdata.append("mobilenumber", mobilenumber);
      formdata.append("pincode", pincode);
      formdata.append("address", address);
      formdata.append("landmark", landmark);
      formdata.append("towncity", towncity);
      formdata.append("state", state);
      
      var ajax = new XMLHttpRequest();
      ajax.upload.addEventListener("progress", progressHandler, false);
      ajax.addEventListener("load", completeHandler, false);
      ajax.addEventListener("error", errorHandler, false);
      ajax.addEventListener("abort", abortHandler, false);
      ajax.open("POST", "upload.php");
      ajax.send(formdata);
    
    }
    function progressHandler(event){
      var percent = (event.loaded / event.total) * 100;
      _("progressBar").value = Math.round(percent);
      _("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
    }
    function completeHandler(event){
      _("status").innerHTML = event.target.responseText;
      window.open("dashboard.php","_self")
    }
    function errorHandler(event){
      _("status").innerHTML = "Upload Failed";
    }
    function abortHandler(event){
      _("status").innerHTML = "Upload Aborted";
    }
    </script>

    <script>     

      function loginfirst(){                
          var check = <?php if(isset($_SESSION['user_country'])) echo "1"; else echo "0";?>;
          if(check == 0){
                $("#myModal").modal();
                }else{
                $('#demo').collapse('toggle');
            }

      }
    </script>

</head>
<body>

    <div id="page" class="page">
        <?php include ('include/header.php'); ?>
    

        <div class="container">
            <div class="jumbotron">
                <div class="text-center">
                    <br/>
                     <div class="row">
                                    <h2><b>Select your file or drop your file</b></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-4 col-md-4">
                                     <input type="file"  id="file" name ="file" /> 
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="view"></div>
                        </div>
                    </div>

                    <div class="row">
                    
                        <div class="col-md-offset-1 col-md-4">
                            <div class="form-group">
                              <label for="sel1"><h4><b> Material :</b></h4></label>
                              <select class="form-control" id="sel1">
                                <option>PLA</option>
                                <option>Ninja Flex</option>
                                <option>ABS</option>
                                <option>Nylon12</option>
                                <option>ULTEM9085</option>
                                <option>PA-2200</option>
                                <option>PA-2201</option>
                                <option>PA-3200GF</option>
                                <option>PrimeCAST-101</option>
                                <option>VisiJetSL</option>
                                <option>Accura60</option>
                                <option>digitalABS</option>
                                <option>RGD-525</option>
                                <option>RGD-720</option>
                                <option>VERO</option>
                                <option>Tango</option>
                                <option>VisiJetPXL(Gypsum)</option>      
                              </select>
                            </div>  
                        </div> 

                        <div class="col-md-offset-2 col-md-4">
                            <div class="form-group">
                              <label for="sel1"><h4><b> Color :</b></h4></label>
                              <select class="form-control" id="sel2">
                                <option>Black</option>
                                <option>White</option>
                                <option>Grey</option>
                                <option>Red</option>
                                <option>Blue</option>
                                <option>Green</option>
                              </select>
                            </div>  
                        </div> 
                    </div>

        <button class="btn btn-primary" onclick="loginfirst()">Place Order</button>

        <div id="demo" class="collapse">
                <div class="col-md-offset-2 col-md-8">
                    <div class="form-group">
                      <label for="pwd"><b>Full Name:</b></label>
                      <input type="text" class="form-control" id="fullname" value="<?php echo $_SESSION['user_fullname'];?>">
                    </div>
                </div> 
                <div class="col-md-offset-2 col-md-4">
                    <div class="form-group">
                      <label for="pwd"><b>Mobile Number:</b></label>
                      <input type="text" class="form-control" id="mobilenumber" value="<?php echo $_SESSION['user_mobilenumber'];?>">
                    </div>
                </div>
                <div class="col-md-offset-0 col-md-4">
                    <div class="form-group">
                      <label for="pwd"><b>Pin Code:</b></label>
                      <input type="text" class="form-control" id="pincode" value="<?php echo $_SESSION['user_pincode'];?>">
                    </div>
                </div>
                <div class="col-md-offset-2 col-md-4">
                    <div class="form-group">
                      <label for="pwd"><b>Landmark:</b></label>
                      <input type="text" class="form-control" id="landmark" value="<?php echo $_SESSION['user_landmark'];?>">
                    </div>
                </div>
                <div class="col-md-offset-0 col-md-4">
                        <div class="form-group">
                      <label for="pwd"><b>Town/City:</b></label>
                      <input type="text" class="form-control" id="towncity" value="<?php echo $_SESSION['user_towncity'];?>">
                    </div>
                </div>
                <div class="col-md-offset-2 col-md-8">
                    <div class="form-group">
                      <label for="comment"><b>Address:</b></label>
                      <textarea class="form-control" rows="5" id="address"><?php echo $_SESSION['user_address'];?></textarea>
                    </div>
                </div>
                
                <div class="col-md-offset-2 col-md-8">
                    <div class="form-group">
                      <label for="pwd"><b>State:</b></label>
                      <input type="text" class="form-control" id="state" value="<?php echo $_SESSION['user_state'];?>">
                    </div>
                </div>
                <div class="col-md-offset-3 col-md-6">
                    <div class="form-group">            
                          <input type="button" class="btn btn-primary" value="Upload File" onclick="uploadFile()">
                          <progress id="progressBar" class="" value="0" max="100" style="width:300px;"></progress>
                          <h3 id="status"></h3>
                    </div>
                </div>
        </div>
                    </div>

                    <div class="row">

                    </div>
                
                </div>
            </div>  
        </div>

    </div><!-- /#page -->

    <?php include ('include/loadjs.php'); ?>
</body>
</html>