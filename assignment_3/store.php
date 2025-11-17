<!-- 16. Create a tool that compares prices from different sellers:
Find highest price,Find lowest price
Calculate average price Sort prices in ascending order
Given:
$prices = [
    "Amazon" => 5000,
    "Flipkart" => 4500,
    "eBay" => 4800,
    "Snapdeal" => 5200
];
Expected Output PRICE COMPARISON
Amazon: Rs. 5,000
Flipkart: Rs. 4,500 eBay: Rs. 4,800
Snapdeal: Rs. 5,20
Statistics:
Highest Price: Rs. 5,200 (Snapdeal)
Lowest Price: Rs. 4,500 (Flipkart)
Average Price: Rs. 4,875
Savings: Rs. 700 (if you buy from Flipkart)
Sorted by Price (Low to High):
Flipkart: Rs. 4,500
eBay: Rs. 4,800
Amazon: Rs. 5,000
Snapdeal: Rs. 5,200 -->


<?php

$prices = [
    "Amazon" => 5000,
    "Flipkart" => 4500,
    "eBay" => 4800,
    "Snapdeal" => 5200
];

echo "PRICE COMPARISON<br><br>";

// Display all prices
foreach ($prices as $seller => $price) {
    echo "$seller: Rs. $price<br>";
}

echo "<br>Statistics:<br>";

// Highest price
$highestPrice = max($prices);
$highestSeller = array_search($highestPrice, $prices);
echo "Highest Price: Rs. $highestPrice ($highestSeller)<br>";

// Lowest price
$lowestPrice = min($prices);
$lowestSeller = array_search($lowestPrice, $prices);
echo "Lowest Price: Rs. $lowestPrice ($lowestSeller)<br>";

// Average price
$averagePrice = array_sum($prices) / count($prices);
echo "Average Price: Rs. " . round($averagePrice) . "<br>";

// Savings
$savings = $highestPrice - $lowestPrice;
echo "Savings: Rs. $savings (if you buy from $lowestSeller)<br><br>";

// Sort Low → High
asort($prices);

echo "Sorted by Price (Low to High):<br>";
foreach ($prices as $seller => $price) {
    echo "$seller: Rs. $price<br>";
}

?>
