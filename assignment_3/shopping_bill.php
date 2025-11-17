<!-- 11. Create a shopping bill that:
Calculates subtotal
Applies 13% VAT
Rounds all prices to 2 decimal places
Formats numbers with commas
Given:
$items = [
    ["name" => "Laptop", "price" => 75000],
    ["name" => "Mouse", "price" => 500],
    ["name" => "Keyboard", "price" => 1200]
];
Expected Output:
SHOPPING BILL
Laptop:    Rs. 75,000.00
Mouse:     Rs. 500.00
Keyboard:  Rs. 1,200.0
---------------------------------
Subtotal:  Rs. 76,700.00
VAT (13%): Rs. 9,971.00
---------------------------------
TOTAL:     Rs. 86,671.00
======================== -->

<?php 
$items = [
    ["name" => "Laptop", "price" => 75000],
    ["name" => "Mouse", "price" => 500],
    ["name" => "Keyboard", "price" => 1200]
];
$subtotal = 0;
echo"SHOPPING BILL<br>";
foreach($items as $item){
    echo $item['name']  . "   Rs.".  number_format($item['price'],2)  . "<br>";
    $subtotal=$subtotal + $item['price'];

}

echo"--------------------------------- <br>";
echo"Subtotal:  Rs. " .number_format($subtotal,2) ."<br>";

$vat_amt = $subtotal * (13/100); 
echo"VAT (13%):  Rs. " .number_format($vat_amt,2) ."<br>";

echo"--------------------------------- <br>";
echo"Total :  Rs. " .number_format($vat_amt+$subtotal,2) ."<br>";
echo"========================<br>";


?>