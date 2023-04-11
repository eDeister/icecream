<?php
/*
 * Ethan Deister
 * 4/11/23
 * 328/icecream/process.php
 * Processing the index.php form
 */
//Set error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

define("PRICE_PER_SCOOP", 2.00);
define("SALES_TAX", 0.08);


//Write the header
include 'header.html';
?>

<body>
<div class="container">
    <h1>Thank you for your order!</h1>
    <?php
        var_dump($_POST);

        //Get data from post
        $numScoops = $_POST['scoops'];
        $cone = $_POST['cone'];
        $flavors = $_POST['flavor'];
        $flavorList = implode(", ", $flavors);

        //Calculate price
        $subtotal = $numScoops * PRICE_PER_SCOOP;
        $total = $subtotal + ($subtotal * SALES_TAX);

        //Display data
        echo "<p>Number of scoops: $numScoops</p>";
        echo "<p>Cone selection: $cone</p>";
        echo "<p>Flavors: $flavorList</p>";
        echo "<p>Subtotal: $". number_format($subtotal, 2) ."</p>";
        echo "<p>Total: $". number_format($total, 2) ."</p>";

    ?>
</div>
</body>
