<html>
    <head>
        <title>
            Reverse Integer
        </title>
    </head>
    <body>
        <form method="POST">
            <input type="number" name="number" placeholder="Enter a number to reverse" />
            <input type="submit" name="submit" value="Reverse" />
</form>
    </body>
    </html>

<?php
    if(isset($_POST['submit'])) {
        $number = $_POST['number'];

        function reverseInteger($num) {
            $numInString = (string)$num;
            $revStr = strrev($numInString);
            $reverse = (int)$revStr;

            return $reverse;
        }

        echo reverseInteger($number);

    }
?>