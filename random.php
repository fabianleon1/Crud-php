
<?php

// Declare an associative array

include("db.php");


// Display the first shuffle element of array


for ($x = 0; $x < 500000; $x++) {
    $arr = array("Juan Leon", "Pedro Angel", "Luis Esparza", "Pepe Perez");
    $arr2 = array("iducifel@mrajax.ml", "redshadow@dmxs8.com", "scandik@mailpremium.net", "dugger11@email-temp.com");
    $random = rand();

    // Use shuffle function to randomly assign numeric
    // key to all elements of array.
    shuffle($arr);
    shuffle($arr2);
/* 
    echo $arr[0];
    echo $arr2[0];
    echo $random; */
    $query = " INSERT INTO usuarios(nombre,dni,email) VALUES ('$arr[0]', '$random','$arr2[0]' )";

  $result = mysqli_query($conn, $query);
    echo "<br>";
}

?>