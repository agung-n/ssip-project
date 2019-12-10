<!DOCTYPE html>
<html>
    <head>
        <title>STUDENT DATABASE</title>
    </head>
    <body>
        <form method="post" action="submit.php">
            <table>
                <tr><td>Student Name</td><td><input type="text" name="studentName"></td></tr>
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