<?php
$products = [
    ["name" => "Laptop", "price" => 800, "qty" => 2, "category" => "Electronics"],
    ["name" => "Phone", "price" => 500, "qty" => 3, "category" => "Electronics"],
    ["name" => "Chair", "price" => 100, "qty" => 5, "category" => "Furniture"]
];

echo "<table border='1'>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Category</th>
        </tr>";

$sum = 0;
foreach ($products as $p) {
    $total = $p["price"] * $p["qty"];
    $sum += $total;
    echo "<tr>
            <td>{$p['name']}</td>
            <td>{$p['price']}</td>
            <td>{$p['qty']}</td>
            <td>$total</td>
            <td>{$p['category']}</td>
          </tr>";
}

echo "<tr>
        <td colspan='3'>Grand Total</td>
        <td colspan='2'>$sum</td>
      </tr>
      </table>";
?>
