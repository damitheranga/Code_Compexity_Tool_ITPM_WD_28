<?php
include_once 'dbconnect.php';

function get_string_between_method($string, $start, $end){
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
    <a href="method_change.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>METHODS</a>
    <a href="inheritance_change.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>INHERITANCE</a>
    <a href="CouplinUpateWeight.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>COUPLING</a>
    <a href="cs_change.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>CONTROL STRUCTURES</a>
    <a href="" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>TOTAL FACTORS</a>

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
            <input class="btn btn-success" type="button" value="Edit Weights" onclick="window.location.href='CSweight_edit.php'" />
          </form>


   

      
      

      <!--<button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>-->
    </div>
    </div>
  </header>
  

    <?php
 include_once 'db.php';
 
// Attempt select query execution
$sql = "SELECT * FROM csweight ORDER BY cd_id DESC LIMIT 1";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<th scope='col'>Program Component</th>";
                echo "<th scope='col'>Conditional Control Structure</th>";
                echo "<th scope='col'>Iterative Control Structure</th>";
                echo "<th scope='col'>Switch Statement</th>";
                echo "<th scope='col'>Case Statement</th>";
            
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<th scope='col'>Weight</th>";
                echo "<td>" . $row['conditionalCS'] . "</td>";
                echo "<td>" . $row['iterativeCS'] . "</td>";
                echo "<td>" . $row['switchCS'] . "</td>";
                echo "<td>" . $row['caseCS'] . "</td>";

                $conditionalCS =  $row['conditionalCS'];
                $iterativeCS = $row['iterativeCS'];
                $switchCS = $row['switchCS'];
                $caseCS = $row['caseCS'];
            

                
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection

?>
  <!-- First Photo Grid-->
 

  <!-- Pagination -->


  <!-- Footer -->
  <body class="w3-container w3-padding-8 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h4>Complexity of a program due to Control Structures</h4>
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
        
     

        <td><a href="upload/<?php echo $row['filename'] ?>" target="formresponse" class="btn btn-primary">View Code</a></td>
        <td><?php echo $row["filename"]; ?></td>

        <?php

        $filename =$row['filename'];
        $file_tem_loc = $row["location"];
        $file_store =  $row["store"];

        $file_s = $file_store . '' . $filename;
 
        $l = file($file_s);
   
    $ope = array("+","-","*", "/"," %","--","==","!=", ">", ">=", "<=","&&","||","!","|","^","~", "<<", ">>", ">>>", "<<<",",", "->",".", "::","+=","-=", "*=", "/=","=", ">>>=", "|=", "&=", "%=", "<<=", ">>=",".","^=");


            $str_words = array('Hi', '" "', '""', 'Hello World');

            $pr_data_types = array("long", "double", "float", "boolean", "char", "void", "int");

            $co_data_types = array("arrays", "objects", "records", "interfaces", "lists");
            $conditional_words = array('if', 'for', 'while', 'switch', 'case');
            $conditional_words3 = array('for', 'while', 'do while');
            $conditional_words2 = array('if', 'else if');
            $conditional_words1 = array('case');
            $conditional_switch = array('switch');

            $conditional_keys1 = array( 'case', 'switch');
            $conditional_keys2 = array('<', '>');

            $pavan_if = "if";
            $pavan_switch = "switch";
            $pavan_case = "case";
            $pavan_else="else";
            $pavan_for="for";
            $pavan_end_curlyBrace = "}";
            $pavan_conditional_keys1 = array('if', 'case', 'switch','elseif','else if','for');

            $cs = 0;


   
   
      $Wtcs = 0;
      $NC = 0;
      $Ccspps = 0;
      $Ccs = 0;

  $weight_if_elseif = 2 ;
   $weight_for_while_dowhile = 3 ;
    $weight_switch = 2 ;
   $weight_case = 1 ;

           
            $op = array_values($ope);
            $str_val = array_values($str_words);


            $cs_val = array_values($conditional_words);
            $cs_val3 = array_values($conditional_words3);
            $cs_val2 = array_values($conditional_words2);
            $cs_val1 = array_values($conditional_words1);

            $cs_key1 = array_values($conditional_keys1);
            $cs_key2 = array_values($conditional_keys2);

            $cs_switch = array_values($conditional_switch);

            //print_r($g);
            //print_r($str_val);

           
            $len_o = count($op);
            $len_str = count($str_val);
            $len_cs = count($conditional_words);
            $len_cs3 = count($conditional_words3);
            $len_cs2 = count($conditional_words2);
            $len_cs1 = count($conditional_words1);

            $len_csk1 = count($conditional_keys1);
            $len_csk2 = count($conditional_keys2);

            $len_switch = count($conditional_switch);

     //print_r($len_str);



   /* $c = 0;

   for($x = 0; $x < count($pr_data_types); $x++){
    // escape special characters in the query
    $pattern = preg_quote($pr_data_types[$x], '/');
    // finalise the regular expression, matching the whole line
    $pattern = "/^.*$pattern.*\$/m";
    // search, and store all matching occurences in $matches
    if(preg_match_all($pattern, $contents, $matches)){
       echo "Found matches:"."<br>"."<br>";
       echo implode($matches[0]);
       $c++;
    }
    else{
       
    }

   


  }
  echo "<br>";
 echo $c;*/

   /*$b = 0;

 for($x = 0; $x < count($v_data_type); $x++){
    // escape special characters in the query
    $pattern = preg_quote($v_data_type[$x], '/');
    // finalise the regular expression, matching the whole line
    $pattern = "/^.*$pattern.*\$/m";
    // search, and store all matching occurences in $matches
    if(preg_match_all($pattern, $contents, $matches)){
       echo "Found matches:"."<br>"."<br>";
       echo implode($matches[0]);
       $b++;
    }
    else{
       
    }

   


  }
  echo "<br>";
 echo $b;*/



     /*function getInnerSubstring($string, $boundstring, $trimit=false) {
              $res = false;
              $bstart = strpos($string, $boundstring);
              if ($bstart >= 0) {
                  $bend = strrpos($string, $boundstring);
                  if ($bend >= 0 && $bend > $bstart)
                      $res = substr($string, $bstart+strlen($boundstring), $bend-$bstart-strlen($boundstring));
              }
              return $trimit ? trim($res) : $res;
            }*/


    

   



    
      


    // Loop through our array, show HTML source as HTML source; and line numbers too.

      echo " <table id='pdfx' class = 'datatable' ><table width='1000'>";
      echo "<tr>
    <th>Line Number</th>
    <th>Program Statment</th>
    <th>Wtcs</th>
    <th>NC</th>
    <th>Ccspps</th>
    <th>Ccs</th>
  </tr>";



            $arrCCS = [];
            $ifPop=[];
            $elseArr=[];
            $inElse=false;
            $insideElse=false;
            $csArray=[];

   foreach ($l as $line_num => $line) {
              $k_count = 0;
              $previousCCS = 0;
              $currentCCS = 0;

            $k_count = 0;
           
           

            
            //wtcs----------------------------
            for ($i = 0; $i <= $len_cs2-1; $i++) {
              if(stripos($line, $conditional_words2[$i]) !== false){  
                  $k_count=$conditionalCS; 
              } else{
                  echo "";

              }
            }
             for ($i = 0; $i <= $len_cs1-1; $i++) {
              if(stripos($line, $conditional_words1[$i]) !== false){  
                  $k_count=$caseCS; 
              } else{
                  echo "";
              }
            }
             for ($i = 0; $i <= $len_cs3-1; $i++) {
              if(stripos($line, $conditional_words3[$i]) !== false){  
                  $k_count=$iterativeCS; 
              } else{
                  echo "";
              }
            }
            for ($i = 0; $i <= $len_switch-1; $i++) {
              if(stripos($line, $conditional_switch[$i]) !== false){  
                  $k_count=$switchCS; 
              } else{
                  echo "";
              }
            }
             
//-----------------------------

            //keys------------
            $i_count = 0;
            //print_r($line);
            for ($i = 0;  $i <= $len_csk1-1 ; $i++){
              if(stripos($line, $conditional_keys1[$i]) !== false){
                  $i_count ++;
                  //echo "<br>".$line;
              } else{  
                  
              }
            }
             for ($i = 0;  $i <= $len_csk2-1 ; $i++){
              if(stripos($line, $conditional_keys2[$i]) !== false){
                  $i_count=+2;
                  //echo "<br>".$line;
              } else{  
                  
              }
            }
      //--------------------


            $op_count = 0;
            for ($i=0; $i < $len_o-1; $i++){
              if(stripos($line, $ope[$i]) !== false){
                  $op_count;
  
              } else{
                  echo "";
              }
            }

           



            
            //echo "Line #<b>{$line_num}</b> : " . $line . "&nbsp&nbsp&nbsp&nbsp" .$k_count."&nbsp" .$op_count."&nbsp" .$n_count."&nbsp" .$str_count."<br />\n";

            $cs = $k_count * $i_count + $op_count;

               //Push all control Structures to an array
              for ($i = 0; $i < sizeof($pavan_conditional_keys1); $i++) {
                if (stripos($line, $pavan_conditional_keys1[$i]) !== false) {
                    array_push($csArray,$pavan_conditional_keys1[$i]);
                }
                
              }
              //Find if the line inside an else part
              if(stripos($line, $pavan_else) !== false && $inElse){
                $elseArr=[];
              }else if ( stripos($line, $pavan_else) !== false) {
                
                $inElse=true;
              }

               //Find the CCS and put into an array outside else part
              if(!$inElse){
                if (stripos($line, $pavan_if) !== false || stripos($line, $pavan_switch) !== false|| stripos($line, $pavan_for) !== false ) {
                    if(sizeof($arrCCS)>=1){
                      $var = $cs + $arrCCS[sizeof($arrCCS) - 1];
                    }else{
                      $var=$cs;
                    }
                    array_push($arrCCS, $var);
                    $currentCCS = $arrCCS[sizeof($arrCCS) - 1];
    
                    if(sizeof($arrCCS)>=2){
                      $previousCCS = $arrCCS[sizeof($arrCCS) - 2];
                    }
                    
                  }
                  echo "<script>console.log('Hello1');</script>";
    
                  if (sizeof($arrCCS) >= 2 && (stripos($line, $pavan_case) !== false)) {
                    $previousCCS = $arrCCS[sizeof($arrCCS) - 1];
                    
                    $currentCCS = $cs + $arrCCS[sizeof($arrCCS) - 1];
                  }
              //Find the CCS and put into an elseArray inside else part and a case
              }else{
                if ((stripos($line, $pavan_if) !== false || stripos($line, $pavan_switch) !== false||stripos($line, $pavan_for) !== false)&& $inElse && $csArray[sizeof($csArray)-2]== "case") {
                    if(sizeof($elseArr)>=1){
                      $var = $cs + $elseArr[sizeof($elseArr) - 1]+1;
                      $previousCCS=$elseArr[sizeof($elseArr) - 1]+1;
                    }else{
                      $var=$cs +$ifPop[sizeof($ifPop) - 1] + 1;
                      $previousCCS=$ifPop[sizeof($ifPop) - 1] + 1;
                    }
                    array_push($elseArr,$var);
                    $currentCCS = $elseArr[sizeof($elseArr) - 1];
    
                    if(sizeof($elseArr)>=2){
                     // $previousCCS = $elseArr[sizeof($elseArr) - 2];
                    }
                    echo "<script>console.log('Hello2');</script>";
                  
                     //Find the CCS and put into an elseArray inside else part 
                  }elseif((stripos($line, $pavan_if) !== false || stripos($line, $pavan_switch) !== false|| stripos($line, $pavan_for) !== false)&& $inElse ){
                    
                    if(sizeof($elseArr)>1){
                        $var = $cs + $elseArr[sizeof($elseArr) - 1];
                    }elseif(sizeof($elseArr)==1){
                      $var = $cs + $ifPop[sizeof($ifPop) - 1];
                    }else{
                        $var=$cs +$ifPop[sizeof($ifPop) - 1];
                    }
                    $previousCCS=$ifPop[sizeof($ifPop) - 1];
                      array_push($elseArr,$var);
                      $currentCCS = $elseArr[sizeof($elseArr) - 1];
      
                      if(sizeof($elseArr)>2){
                        $previousCCS = $elseArr[sizeof($elseArr) - 2];
                      }
                      echo "<script>console.log('Hello3');</script>";
                  }
                  if (sizeof($elseArr) >=1 && (stripos($line, $pavan_case) !== false)) {
                    $previousCCS = $elseArr[sizeof($elseArr) - 1];
                    
                    $currentCCS = $cs + $elseArr[sizeof($elseArr) - 1];
                  }
                  

              }


              //Printing array inside the console
              echo "<script>console.log('" . json_encode($elseArr) . "');</script>";

              echo "<tr><td width='100' bgcolor=' #ffffe6' > $line_num</td><td width='1200' bgcolor=' #ffffe6'>";
              echo $line . "<br />  <td width='400' bgcolor=' #ffffe6'>";
              echo $k_count . "</td>
    <td width='400' bgcolor=' #ffffe6'>";
              echo $i_count . "</td> <td width='400' bgcolor=' #ffffe6'>";
              echo $previousCCS . "</td>
              <td width='400' bgcolor=' #ffffe6'>";
              echo $currentCCS . "</td>";
              echo "</td></tr>";

              if (stripos($line, $pavan_end_curlyBrace) !== false && $inElse ) {
                $inElse=false;
                if(sizeof($elseArr) >= 1){
                    $poped=array_pop($elseArr);
                  array_push($ifPop,$poped);
                  if(sizeof($elseArr)==0){
                    $inElse=false;
                    $insideElse=false;
                  }
                }
                
                
              }else if (stripos($line, $pavan_end_curlyBrace) !== false) {

                if (!is_null($arrCCS)&& sizeof($arrCCS)>=1) {
                    $poped=array_pop($arrCCS);
                  array_push($ifPop,$poped);
                }
              }
            }

    

    ?>

      
        
    

        </tr>
       <?php
$i++;
}
?> 
    </table>
    
</div>
</body>
</html> 