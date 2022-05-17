<html>
    <head><title>Home</title></head>
    <body>
        <a href="add.html">Add Data</a>
        <br><br>
        <form method="POST">
            <input type="submit" name="submit" value="Get Data" />
</form>
    </body>
    </html>

<?php
    if(isset($_POST['submit'])) {
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT * from emp WHERE salary > 50000 ");
        
        while($res = mysqli_fetch_array($result)) {
            echo $res['empno'];
            echo $res['name'];
            echo $res['department'];
            echo $res['salary'];
        }
    }
    
?>