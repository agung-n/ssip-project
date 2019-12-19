<?php
    include '../connection.php';
// menyimpan data kedalam variabel
    $majorName = $_POST['majorName'];
    
// query SQL untuk insert data
    $query="INSERT INTO mst_major SET majorName='$majorName'";
    mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
    header("location:list-major.php");
?>