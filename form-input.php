<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT DATABASE</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>Student ID</td><td><input type="text" onkeyup="isi_otomatis()" name="studentID"></td></tr>
                <tr><td>Student Name</td><td><input type="text" name="studentName"></td></tr>
                <tr><td>Student Gender</td><td>
                        <input type="radio" name="studentGender" value="M">Male
                        <input type="radio" name="studentGender" value="F">Female
                    </td></tr>
                <tr><td colspan="2"><button type="submit" value="submit">Submit</button></td></tr>
            </table>
        </form>
    </body>
</html>