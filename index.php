<!DOCTYPE html>
<html>
    <head>
        <title>This is my php website</title>
    </head>
</html>
    
    <body>
        <center>
            
            <h1>
<?php

//This is a comment (for short one line comments)


/*

This is for multi-line comments
Anything typed here is commented

*/

    echo "This is my first PHP file </br>";

    $variable_one = "This is my first variable ";
    $variable_two = 41;
    $variable_third = 4;
    
    $variable_three = $variable_third;
    
    $variable_four = $variable_three + $variable_two;
    
    echo $variable_four . "</br>";
    
    /* Strings cannon be addded but they can be concatenated 
    to concatenate two string you add a . between them
    */
    
    $first_string = "This is my first string";
    $second_string = "... and this is my second string";
    
    echo "Hellow World!</br>" . $first_string . $second_string . "</br>";

?> 
            </h1>
   
        </center>

    </body>


