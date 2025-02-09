<?php
// Topic 1: Introducing Arrays
echo "<br>============ Topic 1: Introducing Arrays ===========<br>";
$array1 = array(1, 2, 3, 4, 5);
$array2 = ["apple", "banana", "cherry"];
$array3 = range(1, 10);
print_r($array1);
echo "<br>";
print_r($array2);
echo "<br>";
print_r($array3);

// Topic 2: Indexed Arrays
echo "<br>============ Topic 2: Indexed Arrays ===========<br>";
$colors = ["Red", "Green", "Blue"];
$numbers = [5, 10, 15, 20];
$animals = ["Cat", "Dog", "Elephant"];
echo $colors[0] . "<br>";
echo $numbers[2] . "<br>";
echo $animals[1] . "<br>";

// Topic 3: Associative Arrays
echo "<br>============ Topic 3: Associative Arrays ===========<br>";
$person = ["Name" => "Umair", "Age" => 22, "City" => "Karachi"];
$car = ["Brand" => "Toyota", "Model" => "Corolla", "Year" => 2020];
$book = ["Title" => "1984", "Author" => "George Orwell", "Year" => 1949];
print_r($person);
echo "<br>";
print_r($car);
echo "<br>";
print_r($book);

// Topic 4: Use of extract() function
echo "<br>============ Topic 4: Use of extract() function ===========<br>";
$student = ["name" => "Ali", "grade" => "A"];
$teacher = ["name" => "Mr. Khan", "subject" => "Math"];
$employee = ["name" => "Ahmed", "position" => "Manager"];
extract($student);
echo "Student Name: $name, Grade: $grade";
extract($teacher);
echo "<br>Teacher Name: $name, Subject: $subject";
extract($employee);
echo "<br>Employee Name: $name, Position: $position";

// Topic 5: Calculating Array Length
echo "<br>============ Topic 5: Calculating Array Length ===========<br>";
$numbers = [10, 20, 30, 40, 50];
$letters = ["A", "B", "C", "D", "E", "F"];
$items = ["Pen", "Pencil", "Eraser", "Sharpener"];
echo "Length: " . count($numbers);
echo "<br>Length: " . count($letters);
echo "<br>Length: " . count($items);

// Topic 6: Traversing Arrays with For Loop
echo "<br>============ Topic 6: Traversing Arrays with For Loop ===========<br>";
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}
echo "<br>";
for ($i = 0; $i < count($letters); $i++) {
    echo $letters[$i] . " ";
}
echo "<br>";
for ($i = 0; $i < count($items); $i++) {
    echo $items[$i] . " ";
}

// Topic 7: Traversing Arrays with Foreach Loop
echo "<br>============ Topic 7: Traversing Arrays with Foreach Loop ===========<br>";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br>";
foreach ($letters as $letter) {
    echo $letter . " ";
}
echo "<br>";
foreach ($items as $item) {
    echo $item . " ";
}

// Topic 8: Multidimensional Arrays
echo "<br>============ Topic 8: Multidimensional Arrays ===========<br>";
$matrix1 = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
$matrix2 = [["A", "B"], ["C", "D"], ["E", "F"]];
$matrix3 = [["Red", "Green"], ["Blue", "Yellow"], ["Black", "White"]];
print_r($matrix1);
echo "<br>";
print_r($matrix2);
echo "<br>";
print_r($matrix3);

// Topic 9: Built-in Array Functions
echo "<br>============ Topic 9: Built-in Array Functions ===========<br>";
sort($numbers);
rsort($letters);
shuffle($items);
print_r($numbers);
echo "<br>";
print_r($letters);
echo "<br>";
print_r($items);

// Topic 10: Sorting Arrays
echo "<br>============ Topic 10: Sorting Arrays ===========<br>";
$fruits = ["Mango", "Apple", "Banana", "Cherry"];
$vegetables = ["Carrot", "Potato", "Tomato", "Cabbage"];
$animals = ["Zebra", "Lion", "Elephant", "Tiger"];
sort($fruits);
sort($vegetables);
sort($animals);
print_r($fruits);
echo "<br>";
print_r($vegetables);
echo "<br>";
print_r($animals);

?>
