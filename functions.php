<?php

function printArr($numbers)
{
    foreach ($numbers as $value) {
        echo "$value<br>";
    }
}

//Print the array
printArr($numbers);

echo "<h2>Step 4:</h2>";
echo "<b>In your functions file, define a function called largest() that takes an array as a parameter
and returns the largest value in the array.</b><br>";

function largest($numbers)
{

    //Initialize size/number of elements in the array
    $count = count($numbers);
    //Alternative : $count = sizeof($numbers);

    //Initialize maximum element
    $max = $numbers[0];

    //Traverse array elements from second and compare every element with current max
    for ($i = 1; $i < $count; $i++)
        if ($numbers[$i] > $max) {
            $max = $numbers[$i];
        }
    return $max;
}

echo "<br>The largest number in the array is " . largest($numbers);
?>