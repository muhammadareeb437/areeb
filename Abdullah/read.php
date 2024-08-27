<?php
include('conn.php');
$read = "SELECT * FROM `emp_tbl`";
$result = mysqli_query($conn, $read);
$num_row = mysqli_num_rows($result);
echo $num_row;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="conatiner">
        <div class="row">
            <div class="col-6 offset-md-3 mt-3"  style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
               <h2 class="text-center">Employee data</h2>
                  <table class="table table-stripted">
                    <tr>
                        <th>Name </th>
                        <th>Age</th>
                        <th>Designation</th>
                        <th>Salary</th>
</tr>
                    <?php
                    for ($i = 0; $i < $num_row; $i++) {
                        $emp_data = mysqli_fetch_array($result);
                    
                    ?>
                       <tr>
                        <td><img src="images/<?= $emp_data[5]?>" height="50" widht= "100" alt="profile"/></td>
                        <td><?php echo $emp_data[1]?></td>
                        <td><?php echo $emp_data[2]?></td>
                        <td><?php echo $emp_data[3]?></td>
                        <td><?php echo $emp_data[4]?></td>
                        <td><a href="updatedata.php?id=<?= $emp_data['id']?>" class="btn btn-success btn-sm">Update</a></td>
                        <td><a href="delete.php?id=<?= $emp_data[0]?>" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                <?php
                    }
                    ?>
                  </table>
        </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>