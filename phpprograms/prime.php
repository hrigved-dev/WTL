<html>
    <head>
        <title>
            Prime
</title>
    </head>
<body>
<form method="POST">
            <input type="number" name="number" placeholder="Enter the number" />
            <input type="submit" name="submit" value="Submit" />
</form>
</body>
    </html>

<?php
    if(isset($_POST['submit'])) {
        $number = $_POST['number'];
        
        function isPrime($num) {
            $isPrime = false;

            $divisors = 0;

            for($i=1; $i<$num; $i++) {
                if($num % $i == 0) {
                    $divisors++;
                }
            }

            if($divisors>=2) {
                $isPrime = false;
            }
            else {
                $isPrime = true;
            }

            if($isPrime == true) {
                echo "Prime";
            }
            else {
                echo "Not Prime";
            }
        }

        isPrime($number);
        
    }
?>