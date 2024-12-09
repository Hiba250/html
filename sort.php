<?php
$students = array(
"ammmu",
"anu",
"jhon",
"alice"
);
echo "priginal array:<br>";
print_r($students);
echo "<br><br>";

sort($students);
echo "array after sorting(Ascending):<br>";
print_r($students);
echo "<br><br>";

arsort($students);
echo "array after sorting(Descending):<br>";
print_r($students);
?>

