<?php
include_once 'dbconnect.php';

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
// fetch files

?>


<!DOCTYPE html>
<html>
<title>Code</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="2.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>DASHBOARD</b></h4>
    
  </div>
  <div class="w3-bar-block">
    <a href="size_change.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>SIZE</a> 
    <a href="variable_chage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>VARIABLE</a> 
    <a href="viewfile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>METHODS</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>INHERITANCE</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>COUPLING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>CONTROL STRUCTURES</a>
    <a href="total_factors.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>TOTAL FACTORS</a>


  </div>
  <div class="w3-panel w3-large">
  
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    
    <div class="w3-section w3-bottombar w3-padding-16">
    <form>
            <input class="btn btn-primary" type="button" value="Upload Files" onclick="window.location.href='index.php'" />
            <input class="btn btn-success" type="button" value="Edit Weights" onclick="window.location.href='weight_edit.php'" />
        </form>

      
 

      <!--<button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>-->
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
 

  <!-- Pagination -->
  

  <!-- Footer -->
  <body class="w3-container w3-padding-8 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h4>Complexity of a program due to size</h4>
      <style>
      #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 300%;
      }

      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      .button {
        background-color: #1c87c9;
        border: none;
        color: white;
        padding: 10px 18px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
      }

        #inneriframe
      {
     
     
    
      height: 615px;
      font-family: Calibri;
      }
      </style>

    <script>
        function resizeIFrameToFitContent(iFrame) {

            iFrame.width  = iFrame.contentWindow.document.body.scrollWidth;
            iFrame.height = iFrame.contentWindow.document.body.scrollHeight;
        }

        window.addEventListener('DOMContentLoaded', function(e) {

            var iFrame = document.getElementById('inneriframe');
            resizeIFrameToFitContent( iFrame );

            // or, to resize all iframes:
            var iframes = document.querySelectorAll("inneriframe");
            for( var i = 0; i < iframes.length; i++) {
                resizeIFrameToFitContent( iframes[i] );
            }
        } );


</script>


        <?php

        $lines = array();
        $keyword = array('public','protected', 'private', 'static');
        
        $dir = "uploads";
        
        // Sort in ascending order - this is default
        $fileArray = scandir($dir);
        
        foreach($fileArray as $file){
            $tempLines = array();
            if($file === '.' or $file === '..') continue;
            $handle = fopen("uploads/".$file, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    // process the line read.
                    array_push($tempLines, $line);
                }
        
                fclose($handle);
            } else {
                // error opening the file.
            }
        
            array_push($lines,$tempLines);
        
        }
        
        //Initialize variable related to handle multiple file
        $global_var = array();
        $regularMethods = array();
        $recursiveMethods = array();
        
        foreach($lines as $file){
        
            //Initialize variable related to handle single file
            $method_file = array();
            $global_var_file = array();
            $recursive_file = array();
            $regular_file = array();
        
            foreach($file as $line){
        
                foreach ($method_file as $method){
        
                    if(strpos($line, $method)){
            
                        if ($method_file[0] == $method){
        
                            array_shift($regular_file);
                            array_push($recursive_file, $method);
                            $recursive_file = array_reverse($recursive_file);
                            
                        }
                    }
                }
                
        
                preg_match('/"[^"]*"|((?=_[a-z_0-9]|[a-z])[a-z_0-9]+(?=\s*=))/', $line, $var);
        
                if(isset($var[0]) && empty($method_file)){
            
                    array_push($global_var_file, $var[0]);
                }
        
                preg_match('/(public|protected|private|static|\s) +[\w\<\>\[\]]+\s+(\w+) *\([^\)]*\) *(\{?|[^;])/', $line, $match);
                
                    if (isset($match[1])){
                        if(in_array($match[1], $keyword)){
                            
                            
                            array_push($method_file, $match[2]);
                            array_push($regular_file, $match[2]);
                            array_push($regular_file);
                            $method_file = array_reverse($method_file); 
                        
                        }  
                    }
            }
        
            array_push($regularMethods, $regular_file);
            array_push($recursiveMethods, $recursive_file);
            array_push($global_var, $global_var_file);
        }
        
        for ($i=0; $i < count($lines); $i++) { 
            # code...
            $ccp = 0;
            $regular_methods = array();
            $recursive_methods = array();
            $methods = array();
            $globalVar = array();
        
            echo('<h2>'.$fileArray[$i+2].'</h2>');
            ?>
            <table>
                <tr>
                    <th>Line No.</th>
                    <th>Program Statements</th>
                    <th>Nr</th>
                    <th>Nmcms</th>
                    <th>Nmcmd</th>
                    <th>Nmcrms</th>
                    <th>Nmcrmd</th>
                    <th>Nrmcrms</th>
                    <th>Nrmcrmd</th>
                    <th>Nrmcms</th>
                    <th>Nrmcmd</th>
                    <th>Nmrgvs</th>
                    <th>Nmrgvd</th>
                    <th>Nrmrgvs</th>
                    <th>Nrmrgvd</th>
                </tr> 
            <?php
        
            $nr = 0;
            $nmcms = 0;
            $nmcrms = 0;
            $nrmcrms = 0;
            $nrmcms = 0;
            $nmrgvs = 0;
            $nrmrgvs = 0;
            $nmcmd = 0;
            $nrmcmd = 0;
            $nmcrmd = 0;
            $nrmcrmd = 0;
            $nmrgvd = 0;
            $nrmrgvd = 0;
        
            foreach($lines[$i] as $line){
        
        
            $nr_line = 0;
            $nmcms_line = 0;
            $nmcrms_line = 0;
            $nrmcrms_line = 0;
            $nrmcms_line = 0;
            $nmrgvs_line = 0;
            $nrmrgvs_line = 0;
            $nmcmd_line = 0;
            $nrmcmd_line = 0;
            $nmcrmd_line =0;
            $nrmcrmd_line = 0;
            $nmrgvd_line = 0;
            $nrmrgvd_line =0;
        
            foreach ($methods as $method){
        
                if(strpos($line, $method)){
        
                    if ($methods[0] == $method){
        
                        array_push($recursive_methods, $method);
                        $currentMethodType = 'recursive';
                        $nr = $nr+1;
                        $nr_line = $nr_line +1;
                        
                    }elseif (in_array($method, $recursive_methods) && $currentMethodType == 'regular') {
                        # code...
                        $nmcrms = $nmcrms +1;
                        $nmcrms_line = $nmcrms_line+1;
        
                    }elseif (in_array($method, $recursive_methods) && $currentMethodType == 'recursive') {
                        # code...
                        $nrmcrms_line = $nrmcrms_line +1;
                        $nrmcrms = $nrmcrms+1;
                        
                    }elseif ($currentMethodType == 'recursive') {
                        # code...
                        $nrmcms = $nrmcms +1;
                        $nrmcms_line = $nrmcms_line+1;
        
                    }elseif ($currentMethodType == 'recursive') {
                        # code...
                        $nmcms = $nmcms+1;
                        $nmcms_line = $nmcms_line+1;
                        
                    }
                }
            }
        
            for ($j=0; $j < count($regularMethods) ; $j++) { 
                # code...
                if($i == $j) continue;
                foreach($regularMethods[$j] as $method){
                    if(strpos($line, $method)){
                        if($currentMethodType == 'regular'){
                            
                            $nmcmd_line = $nmcmd_line+1;
                            $nmcmd = $nmcmd+1;
                        }else{
        
                            $nrmcmd = $nrmcmd+1;
                            $nrmcmd_line = $nrmcmd_line+1;
                        }
                    }
                }
            }
        
            for ($j=0; $j < count($recursiveMethods) ; $j++) { 
                # code...
                if($i == $j) continue;
                foreach($recursiveMethods[$j] as $method){
                    if(strpos($line, $method)){
                        if($currentMethodType == 'regular'){
        
                            $nmcrmd = $nmcrmd+1;
                            $nmcrmd_line = $nmcrmd_line+1;
                        }else{
        
                            $nrmcrmd = $nrmcrmd +1;
                            $nrmcrmd_line = $nrmcrmd_line +1;
                        }
                    }
                }
            }
        
            $space_split_array = explode(" ", $line);
            $character_split_array = preg_split('/[^[:alnum:]]/', $line);
        
            for ($j=0; $j < count($global_var) ; $j++) { 
                # code...
                if($i == $j) continue;
        
                foreach($global_var[$j] as $var){
                    if (in_array($var, $space_split_array) || in_array($var, $character_split_array)) {
                        # code...
                        if ($currentMethodType == 'regular') {
                            # code...
                            $nmrgvd = $nmrgvd +1;
                            $nmrgvd_line = $nmrgvd_line+1;
        
                        }else {
                            # code...
                            $nrmrgvd_line = $nrmrgvd_line+1;
                            $nrmrgvd = $nrmrgvd+1;
        
                        }
                    }
                }
            }
        
            if (!empty($methods)) {
                # code...
                $space_split_array = explode(" ", $line);
                $character_split_array = preg_split('/[^[:alnum:]]/', $line);
        
                foreach($globalVar as $var){
        
                    if (in_array($var, $space_split_array) || in_array($var, $character_split_array)) {
                        # code...
                        if ($currentMethodType == 'regular') {
                            # code...
                            $nmrgvs = $nmrgvs +1;
                            $nmrgvs_line = $nmrgvs_line+1;
        
                        }else {
                            # code...
                            $nmrgvs_line = $nmrgvs_line+1;
                            $nmrgvs = $nmrgvs+1;
        
                        }
                    }
                }
        
        
            }
        
            preg_match('/"[^"]*"|((?=_[a-z_0-9]|[a-z])[a-z_0-9]+(?=\s*=))/', $line, $var);
        
            if(isset($var[0]) && empty($methods)){
        
                array_push($globalVar, $var[0]);
        
            }
        
            
            preg_match('/(public|protected|private|static|\s) +[\w\<\>\[\]]+\s+(\w+) *\([^\)]*\) *(\{?|[^;])/', $line, $match);
                
                if (isset($match[1])){
                    if(in_array($match[1], $keyword)){
                        
                        $currentMethodType = 'regular';
                        array_push($methods, $match[2]);
                        $methods = array_reverse($methods);
                    
                    }
                    
                }
                ?>
                <tr>
                    <td><?php echo("") ?></td>
                    <td><?php echo($line) ?></td>
                    <td><?php echo($nr_line) ?></td>
                    <td><?php echo($nmcms_line) ?></td>
                    <td><?php echo($nmcmd_line) ?></td>
                    <td><?php echo($nmcrms_line) ?></td>
                    <td><?php echo($nmcrmd_line) ?></td>
                    <td><?php echo($nrmcrms_line) ?></td>
                    <td><?php echo($nrmcrmd_line) ?></td>
                    <td><?php echo($nrmcms_line) ?></td>
                    <td><?php echo($nrmcmd_line) ?></td>
                    <td><?php echo($nmrgvs_line) ?></td>
                    <td><?php echo($nmrgvd_line) ?></td>
                    <td><?php echo($nrmrgvs_line) ?></td>
                    <td><?php echo($nrmrgvd_line) ?></td>
                </tr>
        
                <?php
                
            }
                $ccp = $nr*2 + $nmcms*2 + $nmcrms*3 + $nrmcrms*4 + $nrmcms*3 + $nmrgvs*1 + $nrmrgvs*2 + $nmcmd*3 + $nrmcmd*4 + $nmcrmd*4 + $nrmcrmd*5 +$nmrgvd*2 + $nrmrgvd*2;
        
                ?>
                </table>
                <?php echo("<h1>CCP -> ".$ccp."<h1>") ?>
        <?php
        }
        ?>
        </body>
        </html>