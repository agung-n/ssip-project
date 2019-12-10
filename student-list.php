<?php
    include 'connection.php';

$sql = "SELECT studentID, studentName FROM mst_student";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["studentID"]. " - Name: " . $row["studentName"]."<br>";
    }
} else {
    echo "0 results";
}

?>
