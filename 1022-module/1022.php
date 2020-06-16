<?php 

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

require_once 'scssphp/scss.inc.php';
use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();

$result = $scss->compile('@import"sass/1022.scss"');

file_put_contents("css/1022.css",$result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $url_path ?>/fonts/NunitoSans-Black.ttf">
    <link rel="stylesheet" href="<?php echo $url_path ?>/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/1022.css">
    <script src="<?php echo $url_path ?>/js/jquery-3.2.0.min.js"></script>
    <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
    <title>1022</title>
</head>
<body>
    <?php include '1022-content.php' ?>
</body>
</html>