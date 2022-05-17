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

        function is_Power_of_four($n)
{
      $x = $n;
      while ($x % 4 == 0) {
      $x /= 4;
     }
       
	if($x == 1)
    {
		return "$n is power of 4";
    }
    else
    {
		return "$n is not power of 4";
    }
  
}

 echo is_Power_of_four($number);
        
    }
?>