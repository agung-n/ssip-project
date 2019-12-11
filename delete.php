<?php    
	include 'connection.php';
	$studentID = $_GET['id'];
	$query = "DELETE FROM mst_student WHERE studentID = '$studentID'"; //delete value di database sesuai dengan row yang dihapus
	
	if (mysqli_query($connection, $query)) {
	    mysqli_close($connection);
	    header('Location:student-list.php'); 
	    exit;
	} 

	else {
	    echo "Error deleting record";
	}

?>