<!DOCTYPE html>
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
		echo "<td>"."Student ID"."</td>";
		echo "<td>Name</td>";
		echo "<td>Gender</td>";
		echo "<td>Delete/Edit</td>";
		echo "</tr>";
		
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row['studentID']."</td>";
		echo "<td>".$row['studentName']."</td>";
		echo "<td>".$row['studentGender']."</td>";
		echo "<td><a href='delete.php?id=".$row['studentID']."'>Delete   </a>"; //if you want to delete based on studentID
		echo "<a href='edit.php?id=".$row['studentID']."'>   Edit</a>"; //if you want to edit based on studentID
		echo "</tr>";
		}
		echo "</table>";
    }
 else {
    echo "0 results";
}

?>

</body>
</html>
