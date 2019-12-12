<?php
    $studentID = $_GET['id']; //ini untuk ambil nilai yang dipost pada tombol edit
?>
<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT DATABASE</title>
    </head>
    <body>
        <form method="post" action="edit.php">
            <table>
                <tr><td>Student ID</td><td><input type="text" name="studentID" value="<?php echo $studentID ?>" disabled></td></tr> <!-- ada 2 field untuk studentID, 1 untuk display disabled value, 1 lagi hidden value untuk input-->
                <input type="text" name="studentID" value="<?php echo $studentID ?>" hidden><!-- hidden value digunakan karena disabled value tidak memiliki nilai saat dipost-->               
                <tr><td>Student Name</td><td><input type="text" name="studentName" value ="<?php echo $studentName ?>"></td></tr>
                <tr><td>Gender</td><td>
                        <input type="radio" name="studentGender" value="M">Male
                        <input type="radio" name="studentGender" value="F">Female
                    </td></tr>
                <tr><td>Birthday</td><td><input type="date" data-date="" data-date-format="YYYY-MM-DD" name="studentBirthdate"></td></tr>
                <tr><td colspan="2"><button type="submit" value="submit">Submit</button></td></tr>
            </table>
        </form>
    </body>
</html>
