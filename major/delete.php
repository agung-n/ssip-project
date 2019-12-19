<?php    
	include '../connection.php';
	$majorID = $_GET['id'];
	$query = "DELETE FROM mst_major WHERE majorID = '$majorID'"; //delete value di database sesuai dengan row yang dihapus
	
	if (mysqli_query($connection, $query)) {
	    mysqli_close($connection);
	    header('Location:list-major.php'); 
	    exit;
	} 

	else {
	    echo "Error deleting record";
	}

?>