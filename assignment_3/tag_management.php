<?php

$tags = ["PHP", "Web Development", "Programming", "MySQL", "Backend"];

//  Display tags as array
echo "Tags as array: ";
print_r($tags);
echo "<br><br>";

//  Convert array to string
$tagString = implode(", ", $tags);
echo "Tags as string: $tagString<br><br>";

// Convert string back to array
$newArray = explode(", ", $tagString);

// Check if specific tag exists
if (in_array("PHP", $tags)) {
    echo '"PHP" tag exists<br>';
} else {
    echo '"PHP" tag not found<br>';
}

if (in_array("JavaScript", $tags)) {
    echo '"JavaScript" tag exists<br>';
} else {
    echo '"JavaScript" tag not found<br>';
}

echo "<br>";

//Sort tags alphabetically
$sortedTags = $tags;
sort($sortedTags);

echo "Sorted tags: " . implode(", ", $sortedTags) . "<br><br>";

// Total tags
echo "Total tags: " . count($tags);

?>
