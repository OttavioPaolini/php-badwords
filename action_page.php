<?php
$user_text = $_POST["text"];
$censored_words = $_POST["censored"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Testo originale</h2>
    <?php 
    echo $user_text;
    echo "<hr>";
    echo "contiene " . strlen($user_text) . " parole." 
    ?>


    <?php $censored_word = str_replace($censored_words, "****", $user_text) ?>


    <h2>Testo con correzione</h2>

    <?php 
    echo $censored_word;
    echo "<hr>";
    echo "con la correzione contiene ". strlen($censored_word) . " parole"

    ?>
    



</body>
</html>