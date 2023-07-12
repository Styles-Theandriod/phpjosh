<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
        


        
    ?>
</body>
</html>