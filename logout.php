<?php 
session_start();

//distruggiamo la sessione
session_destroy();
header("Location: ./index.php");