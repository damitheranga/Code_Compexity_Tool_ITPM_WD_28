<?php
//check if form is submitted
$host = "localhost";
$user = "root";
$pass = "";
$db = "demo";
$con = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];
    $file_store = "upload/" .$file_name;

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif','java','c','cpp'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from tbl_files';
            $result = mysqli_query($con, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';
                   

                     $file_tem_loc =  $_FILES['file1']['tmp_name'];


                     
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($file_store . $filename));


          

           
            echo $file_store;
            // insert file details into database
            $sql = "INSERT INTO tbl_files(filename, created,location,store) VALUES('$filename', '$created','$file_tem_loc','$file_store')";
            mysqli_query($con, $sql);
            header("Location: index.php?st=success");
        }
        else
        {
            header("Location: index.php?st=error");
        }
    }
    else
        header("Location: index.php");
}
?>

 