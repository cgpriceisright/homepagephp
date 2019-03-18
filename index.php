<?php
echo "Welcome to Chris' Music Reviews!";
?>

<?php
$name = "instruments";
echo "This is your premiere source for musicians' gear. We give you the complete guide to $name professional musicians use so you can imitate their sound!";


?>

$serial_number = [
  "Dave Matthews" => "Martin D-41",
  "Jack Johnson" => "Taylor 210",
  "John Mayer" => "Martin D-45",
];

if (array_key_exists("Dave Matthews", $serial_number)) {
    echo "Dave Matthews' guitar of choice is " . $serial_number["Dave Matthews"] . "\n";
} else {
    echo "Dave Matthews' guitar is not listed!";
}

if (array_key_exists("Jack Johnson", $serial_number)) {
    echo "Jack Johnson's guitar of choice is " . $serial_number["Jack Johnson"] . "\n";
} else {
    echo "Jack Johnson's guitar is not listed!";
}

if (array_key_exists("John Mayer", $serial_number)) {
    echo "John Mayer's guitar of choice is " . $serial_number["Jack Johnson"] . "\n";
} else {
    echo "John Mayer's guitar is not listed!";
}

<?php
$first_name = "Chris";
$last_name = "Price";
$name = $first_name . " " . $last_name;
echo $name;


?>
