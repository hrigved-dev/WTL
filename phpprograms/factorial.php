<html>
    <head>
        <title>Factorial</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="number" placeholder="Enter the Number" />
        <input type="submit" name="submit" value="Submit" />
</form>
</body>
    </html>

<?php
    function factorial($number) {
        if($number == 0) {
            $fact = 1;
            return $fact;
        }
        else {
            $fact = $number;
            $fact = factorial($number - 1) * $fact;
            return $fact;
        }

    }
    if(isset($_POST['submit'])) {
        $number = $_POST['number'];
        echo factorial($number);

    }
?>