<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$keyword = mysqli_real_escape_string($link, $_REQUEST['keyword']);
$identifier = mysqli_real_escape_string($link, $_REQUEST['identifier']);
$opereator = mysqli_real_escape_string($link, $_REQUEST['operator']);
$num_value = mysqli_real_escape_string($link, $_REQUEST['num_value']);
$string_value = mysqli_real_escape_string($link, $_REQUEST['string_value']);
 
// Attempt insert query execution
$sql = "INSERT INTO sizeweigths(keyword, identifier, operator,num_value,string_value) VALUES ('$keyword', '$identifier', '$opereator', '$num_value', '$string_value')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("Location: weight_edit.php"); 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>