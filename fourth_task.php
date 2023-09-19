//Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.

<?php
// print the first n Fibonacci numbers
function printFibonacci($n)
{
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $n; $i++) {
        // Print the current Fibonacci number
        echo $first . " ";

        // Calculate the next Fibonacci number
        $next = $first + $second;

        // Update variables for the next iteration
        $first = $second;
        $second = $next;
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
?>