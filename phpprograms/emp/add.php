<html>
    <head>
        <title>Add to Database</title>
    </head>
    <body>
        <?php
            include_once("config.php");
            if(isset($_POST['submit'])) {
                $empno = mysqli_real_escape_string($mysqli, $_POST['empno']);
                $name = mysqli_real_escape_string($mysqli, $_POST['name']);
                $department = mysqli_real_escape_string($mysqli, $_POST['department']);
                $salary = mysqli_real_escape_string($mysqli, $_POST['salary']);

                if(empty($empno) || empty($name) || empty($department) || empty($salary)) {
                    echo "<font color='red'> One or more fields are empty </font><br>";
                    echo "<a href='add.html'>Go Back to Add Some Data</a>";
                } 
                else {
                    $result = mysqli_query($mysqli, "INSERT into emp(empno, name, department, salary) VALUES('$empno', '$name', '$department', '$salary')");
                    echo "<font color='green'>Data Added Successfully</font></br>";
                    echo "<a href='index.php'>Home</a>";
                }

            }
        ?>
</body>
    </html>