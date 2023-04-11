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

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Ice Cream Shoppe</title>
</head>
<body>
<div class="container">
    <h1>Thank you for your order!</h1>
    <?php
        var_dump($_POST);
    ?>
</div>
</body>
