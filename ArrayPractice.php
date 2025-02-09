<?php
// Topic 1: Introducing Arrays
echo "<br>============ Topic 1: Introducing Arrays ===========<br>";
$array1 = array(1, 2, 3, 4, 5);
$array2 = ["apple", "banana", "cherry"];
print_r($array1);
echo "<br>";
print_r($array2);

// Topic 2: Indexed Arrays
echo "<br>============ Topic 2: Indexed Arrays ===========<br>";
$colors = ["Red", "Green", "Blue"];
echo $colors[0] . "<br>";
echo $colors[1] . "<br>";
echo $colors[2] . "<br>";

// Topic 3: Associative Arrays
echo "<br>============ Topic 3: Associative Arrays ===========<br>";
$person = ["Name" => "Umair", "Age" => 22, "City" => "Karachi"];
print_r($person);
echo "<br>Age: " . $person["Age"];

// Topic 4: Use of extract() function
echo "<br>============ Topic 4: Use of extract() function ===========<br>";
$student = ["name" => "Ali", "grade" => "A"];
extract($student);
echo "Student Name: $name, Grade: $grade";

// Topic 5: Calculating Array Length
echo "<br>============ Topic 5: Calculating Array Length ===========<br>";
$numbers = [10, 20, 30, 40, 50];
echo "Length: " . count($numbers);

// Topic 6: Traversing Arrays with For Loop
echo "<br>============ Topic 6: Traversing Arrays with For Loop ===========<br>";
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

// Topic 7: Traversing Arrays with Foreach Loop
echo "<br>============ Topic 7: Traversing Arrays with Foreach Loop ===========<br>";
foreach ($numbers as $num) {
    echo $num . " ";
}

// Topic 8: Multidimensional Arrays
echo "<br>============ Topic 8: Multidimensional Arrays ===========<br>";
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
print_r($matrix);
echo "<br>Element at (2,2): " . $matrix[1][1];

// Topic 9: Built-in Array Functions
echo "<br>============ Topic 9: Built-in Array Functions ===========<br>";
sort($numbers);
print_r($numbers);
echo "<br>Max: " . max($numbers) . " Min: " . min($numbers);

// Topic 10: Sorting Arrays
echo "<br>============ Topic 10: Sorting Arrays ===========<br>";
$fruits = ["Mango", "Apple", "Banana", "Cherry"];
sort($fruits);
print_r($fruits);

?>
