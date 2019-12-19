<?php
    include '../connection.php';
// menyimpan data kedalam variabel
    $majorID = $_POST['majorID'];
    $majorName = $_POST['majorName'];
    
// query SQL untuk update query berdasarkan row yang diedit
    mysqli_query($connection, "UPDATE mst_major SET majorName='$majorName' WHERE majorID='$majorID'");
    header("location:list-major.php");
?>