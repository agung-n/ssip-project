<html>
  <body>
<?php
    include 'connection.php';

  $sqlmale = "SELECT COUNT(*) FROM mst_student where studentGender = 'Male'";
  $resultmale = mysql_query($sqlmale);
  $sqlfemale = "SELECT COUNT(*) FROM mst_student where studentGender = 'Female'";
  $resultfemale = mysql_query($sqlfemale);

     // output data of each row
        echo "<table>";
        echo "<tr>";
      echo "<td>Gender</td>";
      echo "<td>Number of student</td>";
      echo "<tr>";
      echo "<td>Male</td>";
      echo "<td>";
      while ($result = mysql_fetch_array($resultmale)) {
    echo $result[0];
}
      echo "</td>";
      echo "</tr>";
 /*
      echo "<tr>";
      echo "<td>Female</td>";
      while ($result = mysql_fetch_array($resultfemale)) {
    echo $result[0];
}     echo "</tr>";
      */
      echo "</table>";


/*
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
      }*/
  
?>
    <button><a href="index.php">Back</a></button>
  </body>
</html>