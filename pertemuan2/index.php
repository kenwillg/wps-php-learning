<?php
$nama = "John Doe";

// Concatenation

$nama_belakang = "Smith";
echo "Hello " . $nama . " " . $nama_belakang . "!";

// Arithmetic Operation
$x = 10;
$y = 5;
$z = $x + $y;

echo "<br>Hasil penjumlahan: " . $z;

$z += 5; // Incrementing $z by 5
echo "<br>Hasil penjumlahan setelah increment: " . $z . "<br>";

// Comparison Operator
// >, <, >=, <=, ==, !=
var_dump($x > $y); // true
var_dump($x < $y); // false

// Identity Operator
var_dump($x === 10); // true

// Logical Operator
// &&, ||, !

echo "<br>Logical Operations:<br>";
echo "x = " . $x . "<br>";
echo "y = " . $y . "<br>";
var_dump($x > $y && $y < 10); // true


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to Pertemuan 2, <?php echo $nama; ?> </h1>

</body>

</html>