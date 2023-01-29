<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $name = $_POST['name'];
    $password = $_POST['password'];
    $censored = str_replace($password, '***', $password);
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
        <h1>Ciao <?php echo $name ?></h1>
        <p>
            La lunghezza del tuo nome è di <?php echo strlen($name) ?> caratteri.
        </p>
        <p>
            Hai impostato la password: '<?php echo $censored ?> ' 
        </p>
        <p>
            La sua lunghezza è di <?php echo strlen($password) ?> caratteri
        </p>
    </body>
</html>