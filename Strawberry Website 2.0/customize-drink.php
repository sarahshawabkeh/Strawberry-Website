<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $drinkName = $_POST['drink-name'];
    $type = $_POST['type'];
    $size = $_POST['size2'];
    $cupColor  = $_POST['cup-color'];
    $addOn  = $_POST['add-on'];
    $sweetness  = $_POST['sweetness'];
    $dateRestriction  = $_POST['date-restriction'];

    echo 'Your Name is: ' . $name . '<br>';
    echo 'Your Drink Name is: ' . $drinkName . '<br>';
    echo 'Type is: ' . $type . '<br>';
    echo 'Size is: ' . $size . '<br>';
    echo 'Cup Color is: ' . $cupColor . '<br>';
    echo 'The Add on is: ' . $addOn . '<br>';
    echo 'Sweetness: ' . $sweetness . '<br>';
    echo 'Date Restriction: ' . $dateRestriction . '<br>';
}

?>