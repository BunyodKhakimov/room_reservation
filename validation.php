<?php

function validate($var)
{
    $var_name = get_var_name($var);
    $func_name = 'is_valid_'. $var_name;

    while(!call_user_func($func_name, $var)) {
        fwrite(STDOUT, "Please enter VALID $var_name: ");
        $var = htmlspecialchars(trim(fgets(STDIN)));
    }
    return $var;
}

function get_var_name($var) {
    foreach($GLOBALS as $var_name => $value) {
        if ($value === $var) {
            return $var_name;
        }
    }

    return false;
}

function is_valid_room ($room)
{
    return $room >= 1 && $room <=5;
}

function is_valid_date($date)
{
    $d = DateTime::createFromFormat("Y-m-d", $date);
    return $d && $d->format("Y-m-d") == $date;
}


function is_valid_slot($slot)
{
    return $slot >= 1 && $slot <=9;
}

function is_valid_email($email)
{
    return ! filter_var($email, FILTER_VALIDATE_EMAIL) === false;
}

function is_valid_phone($phone)
{
    return preg_match('/^[+]998[379][012345789][0-9]{7}$/', $phone);
}