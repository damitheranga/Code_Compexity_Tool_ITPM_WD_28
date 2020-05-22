<?php
include_once 'dbconnect.php';

            function getBetween($codeLine, $start, $end)
            {
              $codeLine = " " . $codeLine;
              $ini = strpos($codeLine, $start);
              /* print_r($codeLine);
               print_r($ini);
               print_r($start);
               print_r($end);*/
              if ($ini == 0)
                return " ";
              $ini += strlen($start);
              /* echo "<br>";
               print_r($ini);*/
              $len = strpos($codeLine, $end, $ini) - $ini;
              /* echo "<br>";

               print_r($len);
               echo "<br>";
               print_r($codeLine);*/

              return substr($codeLine, $ini, $len); //6 ,-6
            }

            //Pabs Code
            class inheri
            {
              public $name;
              public $indirect;
              public $superClass;
              function __construct()
              {
                $this->name = "";
                $this->indirect = 0;
                $this->superClass = null;
              }
              function set_name($name)
              {
                $this->name = $name;
              }
              function set_indirect($indirect)
              {
                $this->indirect = $indirect;
              }
              function set_extends($var)
              {
                $this->superClass = $var;
              }
              function get_extends()
              {
                return $this->superClass;
              }
              function get_name()
              {
                return $this->name;
              }
              function get_direct()
              {
                if (is_string($this->superClass)) {
                  $i = 1;
                } else {
                  $i = 0;
                }
                return $i;
              }
              function get_indirect()
              {
                return $this->indirect;
              }
            }
            //Pabs Code end


            //Function to find NIDI
            function findNidi($extend)
            {
              global $classes;
              global $cnt;

              foreach ($classes as $key) {
                if ($key->get_name() == $extend) {
                  $name1 = $key->get_extends();
                  if (!empty($name1)) {
                    $cnt++;
                    findNidi($name1);
                  }
                }
              }
            }
            

// fetch files

?>


<!DOCTYPE html>
<html>
 
<title>INHERITANCE</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
  <a href="size.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>SIZE</a> 
    <a href="variable.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>VARIABLE</a> 
    <a href="viewfile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>METHODS</a>
    <a href="viewfile_INHERITANCE.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>INHERITANCE</a>
    <a href="Couplingdefult.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>COUPLING</a>
    <a href="avi.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>CONTROL STRUCTURES</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>TOTAL FACTORS</a>


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
            <input class="btn btn-success" type="button" value="Edit Weights" onclick="window.location.href='weight_inheritance.php'" />
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
      <h4>Complexity of a program due to INHERITANCE</h4>
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

      /*navigation bar*/
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      li {
        display: inline;
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
            $sql = "select * from tbl_files";
            $result = mysqli_query($con, $sql);
              ?>
              <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            if($i%2==0)
            $classname="evenRow";
            else
            $classname="oddRow";
            ?>
  
        <tr>
        
       
        <!--<td><?php echo $row["id"]; ?></td>-->
        <td><a href="upload/<?php echo $row['filename'] ?>" target="formresponse" class="button">view file</a></td>
        <td><?php echo $row["filename"]; ?></td>
   
        <?php

        $filename =$row['filename'];
        $file_tem_loc = $row["location"];
        $file_store =  $row["store"];

        $file_s = $file_store . '' . $filename;
 
        $l = file($file_s);
   




    
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   



    
      


    // Loop through our array, show HTML source as HTML source; and line numbers too.

            echo "<table width='1000'>";
            echo "<tr>
            <th>Count</th>
            <th>Class_Name</th>
            <th>NDI</th>
            <th>NIDI</th>
            <th>TI</th>
            <th>CI</th>

                 </tr>";


            $count = 0;
            $classes = [];
            $inClasses = false;
            $parsed1 = null;
            $parsed1=null;
            $parsed2=null;
            $pos=null;
            $pos1=null;
            $indirect = 0;
            $tot_inheritance = 0;


            $i = 0;
            $cnt = 0;



   foreach ($l as $line_num => $line) {


          $line;
              $arr = $line;
              $parsed = getBetween($arr, "class", "{");
              $parsed1 = getBetween($arr, "class", "extends");
              $parsed2 = getBetween($arr, "extends", "{");



              $word = 'extends';
              $pos = strpos($line, $word);
              $w = 'class';
              $pos1 = strpos($line, $w);


              $direct = 0;
              $indirect = 0;
            
            //pabs Code
              if (is_integer($pos1)){

             
               
              if (is_integer($pos)&& is_string($parsed1)) {
               $p = $parsed1 ;
                
              }
              elseif(is_integer($pos) && is_string($parsed)){
                $p = $parsed;
              }
   
              else if(is_integer($pos1)&& is_string($parsed)){
                  $p = $parsed ;
                 
             }

                $className = $p;

                foreach ($classes as $key) {
                  if ($key->get_name() == $className) {
                    $inClasses = true;
                  }
                }

                if (!$inClasses) {

                  $classObj = new inheri;
                  $classObj->set_name($className);

                  array_push($classes, $classObj);
                }


                if ($pos == true && is_string($parsed1)) {
                  foreach ($classes as $key) {
                    if ($key->get_name() == $parsed1) {
                      $key->set_extends($parsed2);
                    }
                  }
                }
                //Pabss Code ends
                
                $ci = $tot_inheritance;

              }
            }
            //Pabs Code


            //Call NIDI function recursively and set NIDI of the class object
            foreach ($classes as $key) {
              $firstName = $key->get_name();

              $name = $key->get_extends();
              if (!empty($name)) {
                $cnt++;
                findNidi($name);
                $key->set_indirect($cnt-1);
              }
              
            }

            //Printing the table with class objects in array
            foreach ($classes as $key) {
              $tot_inheritance = $key->get_direct() + $key->get_indirect();
              $i++;


            //Ci > 3 equals 4 
            if($tot_inheritance > 3){
                $ci = 4;
            }
            else{
              $ci = $tot_inheritance;
            }


              echo "<tr>
  <td width='100' bgcolor=' #ffffee' >";
              
              echo $i . "</td>

  <td width='1200' bgcolor=' #ffffe6'>";
              echo $key->get_name() . "</td> 
  

  <td width='400' bgcolor=' #ffffe6'>";
              echo $key->get_direct() . "</td>
  <td width='400' bgcolor=' #ffffe6'>";
              echo $key->get_indirect() . "</td>
  <td width='400' bgcolor=' #ffffe6'>";
              echo $tot_inheritance . "</td>
  <td width='400' bgcolor=' #ffffe6'>";
              echo $ci . "</td>";
              echo "</td>   </tr>";
            }
            //Pabs Code ends


    }

    

    ?>

      
        
    

        </tr>
       <?php
$i++;

?> 
    </table>
    
</div>
</body>
</html> 