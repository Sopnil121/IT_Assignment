<?php
// Initialize variables
$errors = [];
$name = $_POST['name'] ?? '';
$size = $_POST['size'] ?? '';
$toppings = $_POST['toppings'] ?? [];
$crust = $_POST['crust'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($size == '') {
        $errors[] = "Please select pizza size.";
    }

    if (empty($toppings)) {
        $errors[] = "Please select at least one topping.";
    }

    // If no errors, 
    if (empty($errors)) {
        echo "<h3>Order Summary</h3>";
        echo "Name: $name <br>";
        echo "Size: $size <br>";
        echo "Crust: $crust <br>";
        echo "Toppings: " . implode(", ", $toppings);
        exit; 
    }
}
?>

<!-- FORM -->
<h2>Pizza Order Form</h2>

<?php
// Show errors
if (!empty($errors)) {
    foreach ($errors as $e) {
        echo "<p style='color:red;'>$e</p>";
    }
}
?>

<form method="post">

Name:
<input type="text" name="name" value="<?php echo $name; ?>"><br><br>

<!-- Radio -->
Size:<br>
<input type="radio" name="size" value="Small"   <?php if ($size=="Small") echo "checked"; ?>>Small<br>
<input type="radio" name="size" value="Medium"  <?php if ($size=="Medium") echo "checked"; ?>>Medium<br>
<input type="radio" name="size" value="Large"   <?php if ($size=="Large") echo "checked"; ?>>Large<br><br>

<!-- Checkboxes -->
Toppings:<br>
<input type="checkbox" name="toppings[]" value="Cheese"   <?php if(in_array("Cheese",$toppings)) echo "checked"; ?>>Cheese<br>
<input type="checkbox" name="toppings[]" value="Mushroom" <?php if(in_array("Mushroom",$toppings)) echo "checked"; ?>>Mushroom<br>
<input type="checkbox" name="toppings[]" value="Onion"    <?php if(in_array("Onion",$toppings)) echo "checked"; ?>>Onion<br>
<input type="checkbox" name="toppings[]" value="Olive"    <?php if(in_array("Olive",$toppings)) echo "checked"; ?>>Olive<br><br>

<!-- Dropdown -->
Crust Type:
<select name="crust">
    <option value="">Select</option>
    <option value="Thin"     <?php if($crust=="Thin") echo "selected"; ?>>Thin</option>
    <option value="Regular"  <?php if($crust=="Regular") echo "selected"; ?>>Regular</option>
    <option value="Thick"    <?php if($crust=="Thick") echo "selected"; ?>>Thick</option>
</select><br><br>

<button type="submit">Order</button>
</form>