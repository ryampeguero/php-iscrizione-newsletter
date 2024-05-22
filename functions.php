<?php 
function email_control($email, $array_to_check){
    return in_array($email, $array_to_check);
}