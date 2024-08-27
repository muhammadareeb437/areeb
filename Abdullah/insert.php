<?php
include ('conn.php');
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $designation = $_REQUEST['desig'];
    $salary = $_REQUEST['salary'];
    $image_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']["tmp_name"];
    $folder = "images/";

    $insert = "INSERT INTO emp_tbl (`name`,`age`,`designation`,`salary`,`image`) VALUES ('$name','$age','$designation','$salary','$image_name')";
    $result = mysqli_query($conn,$insert);
    if($result){     
        move_uploaded_file($tmp_name,$folder.$image_name);
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="post" enctype="multipart/form-data" class="row g-3">
        <div class="col-md-4 offset-md-4 mt-5 p-3" box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
         rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;>
            <h2 class="text-center">Employee Form</h2>
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name"><br>
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age"><br>
            <label for="desig" class="form-label">Designation</label>
            <input type="text" class="form-control" id="desig" name="desig" /><br>
            <label for="salary" class="form-label">Salary</label>
            <input type="text" class="form-control" id="salary" name="salary" /><br>
            <input type="file" class="form-control" name="file" id="file"><br><br>
            <input type="submit" class="btn btn-primary w-100" value="Submit" name="submit">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>