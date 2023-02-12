<?php


	echo "<b>SWAPPING TWO VARIABLES </b> ";
    	echo "<br />";
	echo "<br />";
	// Here I take these values both variables:
	echo "Value of var '\$a' is <b>80 </b>";
    

	echo "<br />";

	echo "Value of var '\$b' is <b>5 </b>";
    	echo "<br/>";
    	echo "<br/>";

    	echo "Solution:";
    	echo "<br/>";


    	//Here is code:

    	//Assigning values to variables
    	$a = 80;
   	$b = 5;


    	//Performing Operation

   	// Sum of both values
    	$a = $a + $b;

    	//Now substracting b from a variable.

    	$b = $a - $b;

   	// Substracting a from b variable.
    	$a = $a - $b;
    

    echo "<strong>The value of var '\$a' is: </strong> ".$a;
    echo "</br>";
    echo "<strong>The value of var '\$b' is: </strong> ".$b;
    echo "<br/>";
    echo "Here values are swapped with each other:"
    


?>