<?php
include_once 'dbconnect.php';

// fetch files
$sql = "select filename from tbl_files";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload View & Download file in PHP and MySQL | Demo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<br/>
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2 well">
        <form action="uploads.php" method="post" enctype="multipart/form-data">
            <legend>Select File to Upload:</legend>
            <div class="form-group">
                <input type="file" name="file1" />
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
            </div>

            
            <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-success">
                <?php if ($_GET['st'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>
        </form>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                        <th>Calculate</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><a href="upload/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                    <td><a href="upload/<?php echo $row['filename']; ?>" download>Download</td>

                    <td><a href="method_m.php">Calculate</a>


                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>