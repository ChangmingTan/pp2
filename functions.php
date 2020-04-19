<?php

function printArr($numbers)
{
    foreach ($numbers as $value) {
        echo "$value<br>";
    }
}

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

echo "<br>The largest number in the array is " . largest($numbers) . "<br>";

echo "<h2>Step 5:</h2>";
echo "<b>In your functions file, define a function called removeDups() that takes an array as a
parameter and returns an array with duplicates removed. So, given the \$numbers array,
removeDups() would return [7, 9, 8, 6]. </b><br>";

function removeDups($numbers)
{
    //The array_unique() is used to remove duplicate values from an array
    $result = array_unique($numbers);
    foreach ($result as $item) {
        echo "<br>$item";
    }
}

removeDups($numbers);

?>