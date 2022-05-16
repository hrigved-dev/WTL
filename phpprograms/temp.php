<html>
    <head>
        <title>Temperature Conversion</title>
    </head>
    <body>
        <form method="POST">
            <input type="number" name="fahrenheit" placeholder="Enter temp in F" />
            <input type="number" name="celcius" placeholder="Enter temp in C" />
            <input type="submit" name="submit" value="Convert" />
</form>
    </body>
</html>

<?php
    if(isset($_POST['submit'])) {
        $fahrenheit = $_POST['fahrenheit'];
        $celcius = $_POST['celcius'];

        function fahToCel($fahrenheit) {
            $cel = 0;
            $cel = ($fahrenheit - 32)*5/9;
            return $cel;
        }

        function celToFah($celcius) {
            $fah = 0;
            $fah = ($celcius * 9/5) + 32;
            return $fah;
        }

        $celResult = fahToCel($fahrenheit);
        $fahResult = celToFah($celcius);

        echo "$fahrenheit is $celResult Celcius <br>";
        echo "$celcius is $fahResult Fahrenheit";
    }
?>