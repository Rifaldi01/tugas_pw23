<?php
echo "<h2>macam-macam perangkat keras komputer</h2>";
$perangkat_keras = array("Monitor", "Keyboard", "Mouse", "Printer", "Scanner", "Speaker");

echo "<ul>";
foreach ($perangkat_keras as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";


$perangkat_keras[] = "CPU";
$perangkat_keras[] = "Laptop";
asort($perangkat_keras);

echo "<h2>macam-macam perangkat keras komputer baru.</h2>";
echo "<ul>";
foreach ($perangkat_keras as $item) {
    if ($item == "CPU" || $item == "Laptop") {
        echo "<li><span style='color:red;text-decoration:underline;'>$item</span></li>";
    } else {
        echo "<li>$item</li>";
        
    }
}
echo "</ul>";
?>
