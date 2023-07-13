<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form name="evl" method="$_POST">
       <label fo="">Nme</label>
        <input type="text" name="screen">
        <input type="submit" value="submit">
    </form>
    <?php
        $speed = 3.42;
        var_dump($speed);

        $Name = "Emmanuel"; //strings 
        $Age =  25; //number 
        $Array = [2, 2, 3, 4, 5]; //multi-dimensional array three dimentional array
        $boolean = true;
        $bool = false;
        $float = 3.55;
        echo '<br>';
        
        echo strlen('Hello world');
        echo('<br>');
        echo str_word_count('prograaming Language');
        echo('<br>');
        echo strrev('Hello word');
        echo('<br>');
        echo strpos('Hello world', 'world');
        echo('<br>');
        echo str_replace('world', "dolly", "Hello world");

        //object are key value pairs 

        // Numbers in PHP 
        // Rules for Integer in PHP 
        // An integer must have at least one digit 
        // An integer must Not have a decimal point 
        // An integer can be either be positive or negative
        // integer caan be specified in three formats: decimal(0-based), hexadecimal(6-based - prefixed with 0x) or octal (8-based - prefixed with 0)



        // PHP has the following predefined constants for integers 
        // PHP_INT_MAX - The largest integer supported 
        // PHP_INT_MIN The smallest integer supported 
        // PHP_INT_SIZE - The size of an integer in bytes 

        // PHP has the following functions to check if the type of a variable is integer 

        // is_int()
        // is_integer() - another name for this is is_int()
        // is_long() another name for his is is_int()

        $x = 400;
        var_dump(is_int($x));

        $y = 300.97;
        var_dump(is_int($y));

        // Float ny number with decimal point on it
        // example 2.0
        // example 7.64E+5
        echo('<br>');
        $obi = -5.577;
        var_dump(is_float($obi));


        // PHP has the following functions to check if the type of a variable is integer 

        // is_float()
        // is_double() - another name for this is is_float()

        // Php has the following functions to check if a numeric value is finite or infinite 

        // is_finite()
        // is_infinite()

        // PHP NaN
        // NaN stands for Not a Number 

        //  a function to check for NaN 
        // is_nan()

        $value = 2;
        var_dump(is_nan($value));

        var_dump(is_numeric(500));

        // casting float to int 
        $data = 23465.768;
        $int_cast = (int)$data;
        echo $int_cast;

        // Tommorow Math opertors 
        // pi function 
        // min and max function 
        // abs function 
        // sqrt function 
        // round function 
        // rand function 
        

        echo(pi());
        echo(min(0, 2, 3,4, 5, 6, -200));
        echo(max(2, 5, 6, 250));

        echo(abs(-3));
        echo(sqrt(2)); // squre root
        echo(round(0.60));  // returns 1
        echo(round(0.49));

        echo(rand());

        // generte  figure between 20 to 200
        echo(rand(20, 200));

        echo('<br>');
        
        $x = 4;
        $y = 4;
        
        var_dump($x !== $y);
        echo('<br>');
        
        var_dump($x >= $y);
        echo('<br>');
        
        var_dump(8 <=> 2);
        echo('<br>');
        
        $p = 4;
        echo('<br>');
        echo(++$p);
        
        $Name = 'OOgbonn';
        $lstNme = 'chukwu';
        echo('<br>');
        
        echo($Name .= $lstNme);
        echo('<br>');
        
        var_dump(5 !== "5");
        
        echo('<br>');
        $status = 'John';
        echo $status = (empty($status)) ? "anonymous" : "logged in";
        
        echo('<br>');
        
        

        // $t = date("H");

        // if ($t < "20") {
        //    echo "Have a good day!";
        // }else{
        //     echo 'Good night';
        // }
        
        $t = date("H");
        
        if ($t < "10") {
            echo "Have a good morning!";
        } elseif ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
        
        echo('<br>');
        
        $favcolor = "red";

        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }

        echo('<br>');

        $x = 1;

        while($x <= 5) {
         echo "The number is: $x <br>";
         ++$x;
        }


        $x = 1;

      do {
        echo "The number is: $x <br>";
        $x++;
      }while ($x <= 5);
    ?>

    
</body>
</html>