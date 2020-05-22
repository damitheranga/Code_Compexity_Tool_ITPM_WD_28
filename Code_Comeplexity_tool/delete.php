<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "demo";
$con = mysqli_connect($host, $user, $pass, $db) or die("Error " . mysqli_error($con));
//Define the query
$query = "DELETE FROM tbl_files WHERE filename={$_POST['filename']} LIMIT 1";

//sends the query to delete the entry
mysql_query ($query);

if (mysql_affected_rows() == 1) { 
//if it updated
?>

            <strong>Contact Has Been Deleted</strong><br /><br />

<?php
 } else { 
//if it failed
?>

            <strong>Deletion Failed</strong><br /><br />


<?php
} 
?>