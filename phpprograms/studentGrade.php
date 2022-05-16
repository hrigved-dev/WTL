<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Grades</title>
</head>
        <body>
            <form method="POST">
                <input type="number" name="marks" placeholder="Enter your marks" />
                <input type="submit" name="submit" value="Submit" />
</form>
        </body>
        </html>

<?php
    if(isset($_POST['submit'])) {
        $marks = $_POST['marks'];

        if($marks >= 60) {
            echo "First Division";
        }
        elseif($marks >= 45) {
            echo "Second Division";
        }
        elseif($marks >= 33) {
            echo "Third Division";
        }
        else {
            echo "Fail";
        }
    }
    ?>