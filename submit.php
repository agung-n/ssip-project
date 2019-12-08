		<?php
    include 'connection.php';
// menyimpan data kedalam variabel
    $studentID = $_POST['studentID'];
    $studentName = $_POST['studentName'];
    $studentGender = $_POST['studentGender'];
// query SQL untuk insert data
    $query="INSERT INTO mst_student SET studentID='$studentID',studentName='$studentName',studentGender='$studentGender'";
    mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
    header("location:form-input.php");
?>