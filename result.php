<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sentence = $_POST['sentence'];
$secret_word = $_POST['password'];
$newSentence = str_replace($secret_word, '***', $sentence);
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
    <h1>La tua frase è: <?php echo $sentence ?></h1>
    <p>
        La lunghezza della frase è di <?php echo strlen($sentence) ?> caratteri.
    </p>
    <p>
        La frase censurata è: '<?php echo $newSentence ?> '
    </p>
    <p>
        La sua lunghezza della parola segreta è di <?php echo strlen($secret_word) ?> caratteri
    </p>
</body>

</html>