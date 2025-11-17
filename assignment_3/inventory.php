<!-- 6. Create a product inventory array:
$inventory = [
    ["id" => 101, "name" => "Laptop", "price" => 75000, "stock" => 10],
    ["id" => 102, "name" => "Mouse", "price" => 500, "stock" => 50],
    ["id" => 103, "name" => "Keyboard", "price" => 1200, "stock" => 0],
    ["id" => 104, "name" => "Monitor", "price" => 25000, "stock" => 5]
];
Display:
All products in a formatted table
Products that are out of stock (stock = 0)
Products that need reorder (stock < 10)
Total value of inventory (sum of price × stock for all products)
Expected Output:
PRODUCT INVENTORY
ID   | Name      | Price    | Stock
-----|-----------|----------|------
101  | Laptop    | 75000    | 10
102  | Mouse     | 500      | 50
103  | Keyboard  | 1200     | 0
104  | Monitor   | 25000    | 5
OUT OF STOCK:
- Keyboard (ID: 103)
LOW STOCK (Need Reorder):
- Monitor (ID: 104) - Only 5 units left
Total Inventory Value: Rs. 900000 -->

<?php
$inventory = [
    ["id" => 101, "name" => "Laptop", "price" => 75000, "stock" => 10],
    ["id" => 102, "name" => "Mouse", "price" => 500, "stock" => 50],
    ["id" => 103, "name" => "Keyboard", "price" => 1200, "stock" => 0],
    ["id" => 104, "name" => "Monitor", "price" => 25000, "stock" => 5]
];

$total = 0;

echo "ID   | Name      | Price    | Stock <br>";
echo "-----|-----------|----------|------ <br>";

foreach ($inventory as $goods) {
    echo  $goods['id'] . "  | " . $goods['name'] . "    | " . $goods['price'] . "    | " . $goods['stock'], "<br>";
    $total = $total + $goods['price'];
}

// for out of stock
echo "OUT OF STOCK:<br><br>";
foreach ($inventory as $goods) {
    if ($goods['stock'] == 0) {
        echo "-" . $goods['name'] . "( ID : " . $goods['id'] . ")<br><br>";
    }
}

// for low stock
echo "LOW STOCK (Need Reorder):<br>";

foreach ($inventory as $goods) {
    if ($goods['stock'] < 5) {
        echo "-" . $goods['name'] . "( ID : " . $goods['id'] . ") - Only " . $goods['stock'] . "Units lefts<br>";
    }
}

echo "<br>Total Inventory Value: Rs. " . $total . " <br>"

?>