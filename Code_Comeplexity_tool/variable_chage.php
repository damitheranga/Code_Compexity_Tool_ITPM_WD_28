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
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
            <input class="btn btn-success" type="button" value="Edit Weights" onclick="window.location.href='weight_edit.php'" />
 </form>


      <!--<button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>-->
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
 

  <!-- Pagination -->

  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include_once 'db.php';
 
// Attempt select query execution
$sql = "SELECT * FROM variableweigths ORDER BY v_id DESC LIMIT 1";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-hover'>";
            echo "<tr>";
                echo "<th scope='col'>Program Component</th>";
                echo "<th scope='col'>Global variables</th>";
                echo "<th scope='col'>Local variables</th>";
                echo "<th scope='col'>Primitive data type variables</th>";
                echo "<th scope='col'>Composite data type variables</th>";
         
            
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<th scope='col'>Weight</th>";
                echo "<td>" . $row['g_variables'] . "</td>";
                echo "<td>" . $row['l_variables'] . "</td>";
                echo "<td>" . $row['p_data_types'] . "</td>";
                echo "<td>" . $row['c_data_types'] . "</td>";
        
         
                $w_local = $row['g_variables'];
                $w_global = $row['l_variables'];
                

                $w_pr = $row['p_data_types'];
                $w_co =$row['c_data_types'];
            

                
                
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
  

  <!-- Footer -->
  <body class="w3-container w3-padding-8 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h4>Complexity of a program due to variables</h4>
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

  

    


     $word = array("abstarct","assert","break",
    "byte","case", "catch", "char",
    "class", "const", "continue"  ,"default",
    "do","double","else","class",
    "extends","final","finally","float",
     "goto","if","implements",
    "import","instanceof","interface",
    "long","native","new","package",
    "private","protected","public","return",
    "short","static","strictfp","super",
    "switch","synchronized","this","throw",
    "throws","transient","void",
    "volatile","while");


     $ide = array("main","int", "float", "char", "boolean", "for","while", "do-while","if", "switch", "case");

     $ope = array("+","-","*", "/"," %","--","==","!=", ">", ">=", "<=","&&","||","!","|","^","~", "<<", ">>", ">>>", "<<<",",", "->",".", "::","+=","-=", "*=", "/=","=", ">>>=", "|=", "&=", "%=", "<<=", ">>=",".","^=");


     $str_words = array('Hi','" "','""','Hello World');

     $pr_data_types = array("long", "double","float", "boolean", "char","int","String");

     $v_data_type = array("void");

     $co_data_types = array("arrays", "objects", "records", "interfaces", "lists","Graphics","MouseEvent","ComponentEvent","Dimension");

     $acc_modi = array("default","private", "protected");
     $sta_dat = array("static");
     $un_d = "System";

     $cs = 0;


    $w_pdt = 1;
    $w_cdt = 2;
    $w_vdt = 0;
    $cm;


     $g = array_values($word);
     $idi_val = array_values($ide);
     $op = array_values($ope);
     $str_val = array_values($str_words);
     $pr_val = array_values($pr_data_types);
     $v_val = array_values($v_data_type);
     $acc_val = array_values($acc_modi);
     //print_r($g);
     //print_r($str_val);

     $len = count($g);
     $len_i = count($idi_val);
     $len_o = count($op);
     $len_str = count($str_val);
     $len_pr = count($pr_val);
     $len_v = count($v_val);
     $len_acc = count($acc_val);

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

      echo "<table width='1000'>";
      echo "<tr>
    <th>Line Number</th>
    <th>Program Statment</th>
    <th>Wvs</th>
    <th>Npdtv</th>
    <th>Ncdtv</th>
    <th>Cv</th>

       

      
  </tr>";







   foreach ($l as $line_num => $line) {



            $w_method;

            
            $cv = 0;

            $w_pr_method = 1;
            $w_co_method  = 2;
             
           

            $w_pr = 1;
            $w_co =2;
            $v_weight = 0;


        

              $m_count =0;
              $pr_count =0;
              $mc_count =0;
              $co_count = 0;
              $s_count =0;
              $g_count = 0;
              $pr_count_local = 0;
              $pr_count_scope = 0;


              $line ;
              $fullstring = $line;
          
              

     





               foreach ( $pr_data_types  as $pr_data_t) 
                  {
                    if ( strpos( $line, $pr_data_t ) !== FALSE && strpos( $line, ";" )!== FALSE && strpos( $line,"println" )=== FALSE && strpos( $line,"(" )=== FALSE ){ 
                        if(strpos( $line, "," ) !== FALSE){
                         $met1 = get_string_between($fullstring, $pr_data_t , ";");
                         $met3 = get_string_between($fullstring, $pr_data_t , ",");

                         $pr_count = count($met1) + count($met3);
                       }
                       else{
                        $met2 = get_string_between($fullstring, $pr_data_t , ";");
                         $pr_count = count($met2);
                       }
                   
                   }
                  }


                



               foreach ( $co_data_types  as $c_data_t) 
                  {
                    if ( strpos( $line, $c_data_t ) !== FALSE && strpos( $line, ";" )!== FALSE && strpos( $line,"println" )=== FALSE ){ 
                      $met2 = get_string_between($fullstring, $c_data_t , " ;");
                      $co_count = count($met2) ;
                   }
                  }


            

         




           foreach ( $v_data_type  as $v_data_t ) {
                  foreach ( $acc_modi  as $ac_m) {
                  if ( strpos( $line, $v_data_t ) !== FALSE && strpos( $line, $ac_m )!== FALSE  ){ 
                      $met4 = get_string_between($fullstring, $ac_m , "(");
                     //echo $met3;
                     $w_method = 0;
                     $m_count = count($met4) *$w_method;

                    }
                  }
          }


              foreach ( $pr_data_types  as $pr_data_t) 
                  {
                    if ( strpos( $line, $pr_data_t ) !== FALSE && strpos( $line, ";" )!== FALSE && strpos( $line,"println" )=== FALSE && strpos( $line,"(" )=== FALSE ){ 
                        if(strpos( $line, "," ) !== FALSE){
                         $met1 = get_string_between($fullstring, $pr_data_t , ";");
                      

                         $g_count = count($met1) *  $w_local;
                       }
                       else{
                        $met2 = get_string_between($fullstring, $pr_data_t , ";");
                         $g_count = count($met2) *  $w_local;
                       }
                   
                   }
                  }

              foreach ( $co_data_types  as $c_data_t) 
                  {
                    if ( strpos( $line, $c_data_t ) !== FALSE && strpos( $line, ";" )!== FALSE && strpos( $line,"println" )=== FALSE ){ 
                      $met2 = get_string_between($fullstring, $c_data_t , " ;");
                      $g_count = count($met2) *  $w_global ;
                   }
                  }
                  



                foreach ( $sta_dat  as $st_t) 
                  {
                    if ( strpos( $line, $st_t ) !== FALSE && strpos( $line, "=" )!== FALSE && strpos( $line,"println" )=== FALSE ){ 
                      $met2 = get_string_between($fullstring, $st_t , " =");
                      $g_count = count($met2) *  $w_global ;
                   }
                  }


              foreach ( $v_data_type  as $v_data_t ) {
                  foreach ( $acc_modi  as $ac_m) {
                  if ( strpos( $line, $v_data_t ) !== FALSE && strpos( $line, $ac_m )!== FALSE  ){ 
                      $met4 = get_string_between($fullstring, $ac_m , "(");
                     //echo $met3;
                     
                     $g_count = count($met4) *$v_weight;

                    }
                  }
          }


            $cv = $g_count* $w_pr * $pr_count + $g_count* $w_co * $co_count;

            $sql = "INSERT INTO variable (line_num,line,cv) VALUES ('$line_num','$line','$cv')";
            if(mysqli_query($link, $sql)){
                
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }




          $parsed = get_string_between($fullstring,"class" , "{");
          $parsed1 = get_string_between($fullstring,"class" , "extends");
          $parsed2 = get_string_between($fullstring,"extends" , "{");

          $word ="extends";
             $pos = strpos($line,$word);
             $e_count = 0;
             if($pos == true ){
   
                echo "<br>";
                $pr = $parsed1;
             
               $e_count++;
             }
             else{

              $pr = $parsed;
             

             
             }


             $w = 'class';
             $p = strpos($line,$w);



               //$ps = strpos($line,$pr);
             

             if( $p == true || $pos ==true ){
             echo $parsed;

           }


         

           /*if($ps == true){

                foreach ( $pr_data_types  as $pr_data_t) 
                  {
                    if ( strpos( $line, $pr_data_t ) !== FALSE && strpos( $line, ";" )!== FALSE && strpos( $line,"println" )=== FALSE && strpos( $line,"(" )=== FALSE ){ 
                        if(strpos( $line, "," ) !== FALSE){
                         $met1 = get_string_between($fullstring, $pr_data_t , ";");
                         $met3 = get_string_between($fullstring, $pr_data_t , ",");

                         $pr_count_scope = count($met1) + count($met3);
                       }
                       else{
                        $met2 = get_string_between($fullstring, $pr_data_t , ";");
                         $pr_count_scope = count($met2);
                       }
                   
                   }
                  }


           }

           else{

               foreach ( $pr_data_types  as $pr_data_t) 
                  {
                    if ( strpos( $line, $pr_data_t ) !== FALSE && strpos( $line, ";" )!== FALSE && strpos( $line,"println" )=== FALSE && strpos( $line,"(" )=== FALSE ){ 
                        if(strpos( $line, "," ) !== FALSE){
                         $met1 = get_string_between($fullstring, $pr_data_t , ";");
                         $met3 = get_string_between($fullstring, $pr_data_t , ",");

                         $pr_count_scope = (count($met1) + count($met3))* $w_global;
                       }
                       else{
                        $met2 = get_string_between($fullstring, $pr_data_t , ";");
                         $pr_count_scope = count($met2) * $w_global;
                       }
                   
                   }
                  }

           }*/




             /*foreach ( $pr_data_types  as $pr_data_t) 
                  {
                  foreach ( $acc_modi  as $ac_m) {
                    if ( strpos( $line, $pr_data_t ) !== FALSE && strpos( $line, $ac_m )!== FALSE ){ 
                      
                      $met5 = get_string_between_method($fullstring, "(", " )");
                     echo $met5;
                     
                     $pr_count = count($met5);
                   
                   }
                  }
              }*/


            /*foreach ( $co_data_types  as $c_data_t ) {
                foreach ( $acc_modi  as $ac_m) {
                  if ( strpos( $line, $c_data_t ) !== FALSE && strpos( $line, $ac_m )!== FALSE ){ 
                      $met6 = get_string_between_method($fullstring, "(" , ")");
                     //echo $met3;
                   
                     $co_count = count($met6);

                    }
                }
          }*/




        
            

            




          



           



     
       



            
            //echo "Line #<b>{$line_num}</b> : " . $line . "&nbsp&nbsp&nbsp&nbsp" .$k_count."&nbsp" .$op_count."&nbsp" .$n_count."&nbsp" .$str_count."<br />\n";

       
           "<tr><td width='100' bgcolor=' #ffffe6' > $line_num </td><td width='1200' bgcolor=' #ffffe6'>";
          echo "<tr><td width='100' bgcolor=' #ffffe6' > $line_num</td><td width='1200' bgcolor=' #ffffe6'>";
      echo $line."<br />  <td width='400' bgcolor=' #ffffe6'>"; echo $g_count."</td>
    <td width='400' bgcolor=' #ffffe6'>"; echo $pr_count."</td> <td width='400' bgcolor=' #ffffe6'>"; echo $co_count."</td><td width='400' bgcolor=' #ffffe6'>"; echo $cv."</td><td width='400' bgcolor=' #ffffe6'>"; echo /*$str_count.*/"</td><td width='400' bgcolor=' #ffffe6'>"; echo /*$cs.*/"</td>";
      echo "</td></tr>";


    }

        



       




 
// Test if string contains the word 



      



    if(move_uploaded_file($file_tem_loc, $file_store)){
      
      echo "<iframe src='$file_store' width=1200 height = id='inneriframe' frameborder='0' name='frm' allowtransparency='true' style='background-color: Snow;'' src='http://zingaya.com/widget/9d043c064dc241068881f045f9d8c151' />";


    }



 }



?>

      <hr>
      
    
  </body>
  


<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
