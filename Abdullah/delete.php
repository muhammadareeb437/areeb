<?php
include('conn.php');
$id = $_GET ['id'];
$sql_delete = "DELETE FROM emp_tbl WHERE id='$id'";
$result = mysqli_query($conn,$sql_delete);
        if($result){
           header('Location: read.php');
        }
           ?>