//Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.

<?php
// Function to print even numbers from start to end with a step
function printEvenNumbers($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo "\n";
}

// Using a for loop
echo "Using a for loop: ";
printEvenNumbers(2, 20, 2);

// Using a while loop
echo "Using a while loop: ";
$start = 2;
$end = 20;
$step = 2;
while ($start <= $end) {
    echo $start . " ";
    $start += $step;
}
echo "\n";

// Using a do-while loop
echo "Using a do-while loop: ";
$start = 2;
$end = 20;
$step = 2;
do {
    echo $start . " ";
    $start += $step;
} while ($start <= $end);
?>