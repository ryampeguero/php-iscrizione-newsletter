<?php
session_start();

session_destroy();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <div class="alert alert-success">
                    <h4><?php echo "Grazie per esserti scritto utente: " . $_SESSION["email"]; ?></h4>
                    <a class="btn btn-primary" href="./index.php">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>
</body>