<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $name = $_POST['name'];
    $password = $_POST['password'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class=" container">
        <form action="./result.php" method='POST'>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Nome</label>
                <input type="text" name='name' placeholder='name' class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name='password' placeholder='password' class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>