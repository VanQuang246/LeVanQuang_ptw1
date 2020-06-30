<?php
require_once 'lib/scss.inc.php';

use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();
$str = file_get_contents('sass/22.scss');
$str = $scss->compile($str);
file_put_contents('css/22.css', $str);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/22.css">
    <link rel="stylesheet" href="fonts/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>22 sreenshort</title>
</head>

<body>
    <?php include '22-test.php' ?>
</body>

</html>