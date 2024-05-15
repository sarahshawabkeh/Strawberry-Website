<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $zip  = $_POST['zip'];
    $country  = $_POST['country'];
    $email  = $_POST['email'];

    echo 'Your Name is: ' . $name . '<br>';
    echo 'Your Address is: ' . $address . '<br>';
    echo 'Your ZIP Code is: ' . $zip . '<br>';
    echo 'Your Country is: ' . $country . '<br>';
    echo 'Your Email is: ' . $email . '<br>';
}

?>