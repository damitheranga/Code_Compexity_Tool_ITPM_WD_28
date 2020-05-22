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
    <a href="size.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>SIZE</a> 
    <a href="variable.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>VARIABLE</a> 
    <a href="viewfile.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>METHODS</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>INHERITANCE</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>COUPLING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>CONTROL STRUCTURES</a>
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


    


     $keywords = array("abstarct","assert","break",
    "byte","case", "catch", "char",
    "class", "const", "continue"  ,"default",
    "do","double","else","implements",
    "extends","final","finally","float",
     "goto","if",
    "import","instanceof","interface",
    "long","native","new","package",
    "private","protected","public","return",
    "short","static","strictfp","super",
    "switch","synchronized","this","throw",
    "throws","transient","void",
    "volatile","while");


     $ideintifiers = array("main", "float", "char", "boolean", "for","while", "do-while","if", "switch", "case","java","applet", "implements", "MouseListener","MouseMotionListener","ComponentListener","args","System","out","println","print");

     $operators = array("+","-","*"," %","==","!=", ">", ">=", "<=","&&","||","!","|","^","~", "<<", ">>", ">>>", "<<<",",", "->",".", "::","+=","-=", "*=","-", "/=","=", ">>>=", "|=", "&=", "%=", "<<=", ">>=",".","^=",".", "/");


     $str_words = array('Hi','" "','""','Hello World');

     $pr_data_types = array("long", "double","float", "boolean", "char","int","String");

     $v_data_type = array("void");

     $co_data_types = array("arrays", "objects", "records", "interfaces", "lists","Graphics","MouseEvent","ComponentEvent","Dimension");

     $acc_modi = array("default","private", "protected","public");
     $un_d = "System";

     $key_pr = "print";

     $semi = array(";");
     $brack = array("}");
    

     $cs = 0;


    $w_keyword = 1;
    $w_idi = 1;
    $w_ope = 1;
    $w_str = 1; 
    $w_num =1;

   


     /*$g = array_values($word);
     $idi_val = array_values($ide);
     $op = array_values($ope);
     $str_val = array_values($str_words);
     $pr_val = array_values($pr_data_types);
     //print_r($g);
     //print_r($str_val);

     $len = count($g);
     $len_i = count($idi_val);
     $len_o = count($op);
     $len_str = count($str_val);
     $len_pr = count($pr_val);*/




     //print_r($len_str);


 



    

   



    
      


    // Loop through our array, show HTML source as HTML source; and line numbers too.

      echo "<table width='1000'>";
      echo "<tr>
    <th>Line Number</th>
    <th>Program Statment</th>
    <th>Nkw</th>
    <th>Nid</th>
    <th>Nop</th>
    <th>Nnv</th>
    <th>Nsl</th>
    <th>Cs</th>
  </tr>";





     
        foreach ($l as $line_num => $line) {
             if ( strpos( $line, "//" ) === FALSE  ){ 


          $k_count = 0;



         
          foreach ( $keywords as $keyword ) 
          {

            if ( strpos( $line, $keyword ) !== FALSE && strpos( $line, "import" ) === FALSE  ){ 
              $k_count++;
            }
          }




            $i_count = 0;

         if(strpos( $line, "import" ) === FALSE ){
          foreach ( $ideintifiers as $ide ) {
            if ( strpos( $line, $ide ) !== FALSE  ){ 
                      $i_count++;
            }
            else{
                foreach ( $pr_data_types  as $pr_data_t) {
                 foreach ( $v_data_type  as $v_data_t ) {
                  foreach ( $acc_modi  as $ac_m) {
                  if ( strpos( $line, $ac_m ) !== FALSE  ){ 
                      $met4 = get_string_between($line, $v_data_t , "{");
                      $i_count = count($met4) ;
                   }
                   else if(strpos( $line, $pr_data_t )=== FALSE && strpos( $line, $ac_m )=== FALSE  ) {
                      
                      $i_count = 0 ;
                   }
                  else if( strpos( $line, $pr_data_t )!== FALSE){
                       $met3 = get_string_between($line, "=" , " ");
                  }
                 }
                }
              }
          }
        }
      }
      $e_count=0;
      $e_count1=0;
      $e_count2=0;
      $e_count3=0;
      $e_count4=0;
      $e_count5=0;
      $e_count6=0;
      $fullstring = $line;

      
   
      foreach ( $pr_data_types  as $pr_data_t) 
      {
        foreach ( $ideintifiers  as $ide) {
      foreach ($semi  as $sem) {
        if ( strpos( $line, $pr_data_t ) !== FALSE && strpos( $line, $sem )!== FALSE && strpos( $line,$key_pr )=== FALSE && strpos( $line,"." )=== FALSE ){ 
          
          $met10 = get_string_between($fullstring, $pr_data_t , $sem);//calRe
          $e_count1 = count($met10);
       
         // echo $met10;
       
       }
       else if( strpos( $line, "class" ) !== FALSE){
        $parsed = get_string_between($fullstring,"class" , "{");
          $e_count2 = count($parsed);
       


       }

       else if( strpos( $line, $ide ) !== FALSE){
        $parsed1 = get_string_between($fullstring,$ide , $sem);
          $e_count3 = count($parsed1);
       


       }

       else if( strpos( $line, "println" ) !== FALSE){
        $parsed2 = get_string_between($fullstring,$ide , $sem);
          $e_count4 = count($parsed2);
       


       }

       else if( strpos( $line, "print" ) !== FALSE){
        $parsed3 = get_string_between($fullstring,$ide , $sem);
          $e_count5 = count($parsed3);
       


       }

       else if( strpos( $line,"out") !== FALSE){
        $parsed4 = get_string_between($fullstring,$ide , $sem);
          $e_count6 = count($parsed4);
       


       }
      }
    }
  }



  $e_count = $e_count1+$e_count2+$e_count3+$e_count4+$e_count5+$e_count6;

    

      $parsed1 = get_string_between($fullstring,"class" , "extends");
    

   

  



  



     

   



        



          $op_count = 0;

         
          foreach ( $operators as $ope  ) 
          {
            if ( strpos( $line, $ope ) !== FALSE && strpos( $line, "import" ) === FALSE  ){ 
             $op_count++;
            }
          }


        $str_count = 0;
         
        foreach ( $str_words as $str ) 
          {
            if ( strpos( $line, $str ) !== FALSE){ 
             $str_count++;
            }
          }




         



          
          



           

          

            



            $n_count = 0;
            for ($i = 0; $i <= strlen($line)-1; $i++) {
            if(is_numeric($line[$i]))  {
              $n_count++;
              //echo $line;

              break;
            }




            
          }
}


            
            //echo "Line #<b>{$line_num}</b> : " . $line . "&nbsp&nbsp&nbsp&nbsp" .$k_count."&nbsp" .$op_count."&nbsp" .$n_count."&nbsp" .$str_count."<br />\n";

          $cs = $k_count*$w_keyword + $i_count * $w_idi + $op_count * $w_ope+ $str_count * $w_str + $n_count * $w_num;
            echo "<tr><td width='100' bgcolor=' #ffffe6' > $line_num</td><td width='1200' bgcolor=' #ffffe6'>";
      echo $line."<br />  <td width='400' bgcolor=' #ffffe6'>"; echo $k_count."</td>
    <td width='400' bgcolor=' #ffffe6'>"; echo $e_count."</td> <td width='400' bgcolor=' #ffffe6'>"; echo $op_count."</td><td width='400' bgcolor=' #ffffe6'>"; echo $n_count."</td><td width='400' bgcolor=' #ffffe6'>"; echo $str_count."</td><td width='400' bgcolor=' #ffffe6'>"; echo $cs."</td>";
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
