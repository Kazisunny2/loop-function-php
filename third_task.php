//Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.

<?php
// Function to calculate the nth Fibonacci number
function fibonacci($n)
{
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Initialize variables
$first = 0;
$second = 1;
$count = 0;

// Loop to calculate and print the first 10 Fibonacci numbers
while ($count < 10) {
    // Calculate the next Fibonacci number
    $next = fibonacci($count);

    // Check if the Fibonacci number is greater than 100
    if ($next > 100) {
        break; // Break out of the loop
    }

    // Print the current Fibonacci number
    echo $next . " ";

    // Update variables for the next iteration
    $first = $second;
    $second = $next;
    $count++;
}
?>