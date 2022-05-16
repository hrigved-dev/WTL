<html>
    <head>
        <title>
            Day Of The Week
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
        $number =$_POST['number'];

        switch ($number) {
            case 1:
                echo "The day is Monday";
                break;
            
            case 2:
                echo "The day is Tuesday";
                break;
            
            case 3:
                echo "The day is Wednesday";
                break;
            
            case 4:
                echo "The day is Thursday";
                break;

            case 5:
                echo "The day is Friday";
                break;

                case 6:
                    echo "The day is Saturday";
                    break;

                case 7:
                    echo "The day is Sunday";
                    break;
            
            default:
                echo "Invalid Number";
                break;
        }
    }
?>
