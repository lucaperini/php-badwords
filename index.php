<?php

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eum officiis explicabo minima quo voluptatum rem aperiam incidunt eos distinctio nihil, beatae soluta assumenda velit ipsa praesentium porro ex sit!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eum officiis explicabo minima quo voluptatum rem aperiam incidunt eos distinctio nihil, beatae soluta assumenda velit ipsa praesentium porro ex sit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eum officiis explicabo minima quo voluptatum rem aperiam incidunt eos distinctio nihil, beatae soluta assumenda velit ipsa praesentium porro ex sit! Corrupti consequuntur nihil omnis, nobis odio illum est non obcaecati molestiae. Iste earum reiciendis praesentium, maxime aut delectus saepe distinctio ad optio quisquam natus velit adipisci temporibus totam rerum dolorem!";

$textLength = strlen($text);

$badWord = $_GET['badword'];

$textReplaced = str_replace($badWord,"***", $text);

$textReplacedLength = strlen($textReplaced);



?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BadWords</title>
</head>
<body>
    <h1>Testo:</h1>
    <p><?php echo $text; ?></p>
    <p>Lunghezza testo:<?php echo $textLength; ?></p>
    <h1>Testo censurato:</h1>
    <p><?php echo $textReplaced ?></p>
    <p>Lunghezza testo censurato:<?php echo $textReplacedLength; ?></p>
    
</body>
</html>