<?php 

$name = 'Andrea';
$lastName = 'Iglio';
$second_name = $argv[1];
$second_lastName = $argv[2];
$testo = 'Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, mollitia!';
$var_get = $_GET['badwords'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
</head>
<body>
    
    <h1>Ciao mi chiamo <?php echo $var_get . " " . $lastName ?></h1>

    <h1>Ciao mi chiamo <?php echo $second_name . " " . $second_lastName  ?></h1>
    <h5><?php  echo strlen($testo)   ?></h5>
    <h6><?php echo strpos($testo, 'sit') ?></h6>
    <h6><?php echo str_replace($_GET, "***" ,$testo)?></h6>

    <p> <?php echo $testo ?> </p>
    <p> <?php echo str_replace($var_get, "***" ,$testo)?></p> 

</body>
</html>