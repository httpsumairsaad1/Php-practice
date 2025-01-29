<?php
    $test = "23";
    echo "Hello World<br>";
    echo $test . "<br>";
    echo 10 . "<br>";
    $test .= 10;
    echo $test;
    echo "<br>============ with Array Push ===========<br>";
    echo "Even<br>";

    $even = array();
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0){
            echo "$i<br>";
            array_push($even, $i);
        }
    }
    print_r($even);
    
    echo "<br>============ without Array Push ===========<br>";
    echo "Even<br>";

    $even = []; // Initialize an empty array
    
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "$i<br>";
            $even[] = $i; // Directly append to the array
        }
    }
    
    print_r($even);

    echo "<br>=======================<br>";
    echo "Odd<br>";
    for ($i = 1; $i <= 20; $i++) 
        if ($i % 2 == 1) echo "$i<br>";

    echo "<br>========== ARRAY =============<br>";
    $person = ["name" => "Umair", "age" => 23];
    echo $person["name"];

    echo "<br>========== ARRAY Numbers =============<br>";
    $numbers = [1, 2, 3, 4, 5];  // Short array syntax
    echo implode(", ", $numbers);

    echo "<br>========== ARRAY =============<br>";
    $a = ['age' => 19];
    $a = ['age' => 18];
    $a[] = 1;
    $a[] = 1;
    echo $a['age']; 
    echo "<br>";
    print_r($a);
    
    echo "<br>========== ARRAY - SIR =============<br>";
    $array1 = ["name" => "Umair", "age" => 23];
    $array2 = ["city" => "Karachi", "country" => "Pakistan"];

    $hierarchy = ["person" => $array1, "location" => $array2];

    echo "<pre>";
    print_r($hierarchy);
    echo "</pre>";

    echo "<br>========== HTML FORM GET =============<br>";
    echo '<form method="GET" action="">
                Name: <input type="text" name="name" required><br>
                Age: <input type="number" name="age" required><br>
                <input type="submit" value="Submit">
              </form>';
            
    echo "<br>========== HTML FORM GET AND POST =============<br>";

    // HTML Form (GET and POST)
    echo '<form method="POST" action="">
        Name: <input type="text" name="name" required><br>
        Age: <input type="number" name="age" required><br>
        <input type="submit" value="Submit">
        </form>';
              
              // Handling POST request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['name']) && isset($_POST['age'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            echo "<br>Received POST Data:<br>";
            echo "Name: " . $name . "<br>";
            echo "Age: " . $age . "<br>";
            }
        }
?>
