<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM sizeweigths ORDER BY s_id DESC LIMIT 1";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>keyword</th>";
                echo "<th>identifier</th>";
                echo "<th>operator</th>";
                echo "<th>num_value</th>";
                echo "<th>string_value</th>";
            
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['s_id'] . "</td>";
                echo "<td>" . $row['keyword'] . "</td>";
                echo "<td>" . $row['identifier'] . "</td>";
                echo "<td>" . $row['operator'] . "</td>";
                echo "<td>" . $row['num_value'] . "</td>";
                echo "<td>" . $row['string_value'] . "</td>";

                
                
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
mysqli_close($link);
?>