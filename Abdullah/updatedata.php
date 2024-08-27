<?php
include('conn.php');
$id = $_GET ['id'];
$sql_read = "Select * FROM emp_tbl WHERE id='$id'";
$result = mysqli_query($conn,$sql_read);
$empdata= mysqli_fetch_array($result);
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
<form method="post" class="row g-3">
        <div class="col-md-4 offset-md-4 mt-5 p-3" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
            <h2 class="text-center">Employee Form</h2>
            <input type="hidden" name="id" value="<?= $empdata[0] ?>">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $empdata[1] ?>" required><br>
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age" value="<?= $empdata[2] ?>" required><br>
            <label for="desig" class="form-label">Designation</label>
            <input type="text" class="form-control" id="desig" name="desig" value="<?= $empdata[3] ?>" required><br>
            <label for="salary" class="form-label">Salary</label>
            <input type="text" class="form-control" id="salary" name="salary" value="<?= $empdata[4]  ?>" required><br>
            <input type="submit" class="btn btn-primary w-100" value="Update" name="Update">
        </div>
    </form>

    <?php
    if(isset($_REQUEST['Update'])){
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $age = $_REQUEST['age'];
        $designation = $_REQUEST['desig'];
        $salary = $_REQUEST['salary'];

        $update = "UPDATE `emp_tbl` SET `name`='$name',`age`='$age',`designation`='$designation',`salary`='$salary' Where id='$id'";
        $result = mysqli_query($conn,$update);
        if($result){
           header('Location:read.php');
        }

    }


    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>