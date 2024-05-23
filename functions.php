<?php



function email_control($email, $array_to_check)
{
    if (str_contains($email, ".")) {
        session_start();
        $_SESSION["email"] = $email;
        header("Location: ./thankyou.php");
        $answer = "<div class='alert alert-danger'><h4>Non sei registrato</h4></div>";
        return $answer;
    } else {
        $answer = "<div class='alert alert-danger'><h4>Manca il punto!!</h4></div>";
        return $answer;
    }
}
