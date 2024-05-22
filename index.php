<?php
require_once __DIR__ . "/functions.php";

$email_array = ["ryampeguero@gmail.com", "mariorossi@gmail.com", "ilariaverdi@hotmail.it"];

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <?php if (!isset($_GET["email"])) {
        ?>
            <div class="row d-flex justify-content-center">
                <div class="col-8 border">
                    <form>
                        <div class="mb-3">
                            <label for="myEmail" class="form-label">Inserire Email</label>
                            <input type="email" class="form-control" id="myEmail" name="email" placeholder="mariorossi@gmail.com" value="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php
                } else {
                    $user_mail = $_GET["email"];

                    if (email_control($user_mail, $email_array)) {
                        session_start();
                        $_SESSION["email"] = $user_mail;
                        header("Location: ./thankyou.php");
                    } else {
                    ?>
                        <div class="alert alert-danger">
                            <h4><?php echo "Non sei registrato"; ?></h4>
                        </div>
                <?php
                    }
                }
                ?>
                </div>
            </div>
    </div>
</body>

</html>