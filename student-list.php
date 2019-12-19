
<html>
	<body>
<?php
    include 'connection.php';

	$sql = "SELECT studentID, studentName, studentGender FROM mst_student";
	$result = $connection->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    	echo "<table>";
	    	echo "<tr>";
			echo "<td>Student ID</td>";
			echo "<td>Name</td>";
			echo "<td>Gender</td>";
			echo "<td>Delete/Edit</td>";
			echo "</tr>";
			
	    while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row['studentID']."</td>";
			echo "<td>".$row['studentName']."</td>";
			echo "<td>".$row['studentGender']."</td>";
			echo "<td><a href='delete.php?id=".$row['studentID']."'>Delete   </a>"; //pindah ke delete.php dengan membawa value studentID
			echo "<a href='form-edit.php?id=".$row['studentID']."'>Edit</a>"; //pindah ke edit.php dengan membawa studentID
			echo "</tr>";
			}
			echo "</table>";
	    }
	 else {
	    echo "0 results";
	}
?>
		<button><a href="index.php">Back</a></button>
	</body>
</html>
