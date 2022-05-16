<html>
    <head>
        <title>
            Power of Four
        </title>
    </head>
    <body>
        <form method="POST">
            <input type="number" name="number" placeholder="Enter a number" />
            <input type="submit" name="submit" value="Find" />
</form>
    </body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $number = $_POST['number'];

        $isPower = false;
        
        while ($number > 1 ) {
            if($number % 4 == 0) {
                $number = $number /4;
            }
            echo $number + '<br>';
        }
        
    }
?>