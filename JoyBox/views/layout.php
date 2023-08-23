<!DOCTYPE html>
<html lang="es">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="css/styles.css" rel="stylesheet">
    <title>JoyBox</title>
</head>

<body style="background-color: #fafafa">
    <header>
        <?php require_once "views/menu.php"; ?>
    </header>

    <?php
    $view = (isset($view) ? $view : "home");
    require_once $view . ".php";

    ?>

</body>
<script src="js/menu.js"></script>
</html>