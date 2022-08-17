<?php

if ($argc < 2) {
    fwrite(STDOUT, "Welcome to Room Reservation App!" . "\n");
    write_available_commands();
} else {
    switch ($argv[1]) {
        case 'checkRoom':
            // input room data
            // check available
            break;
        case 'makeReservation':
            // input room data
            // check available
            // input user data
            // send mail
            // send message
            break;
        default:
            fwrite(STDOUT, "Command not supported!" . "\n");
            write_available_commands();
    }
}

function write_available_commands()
{
    $text = "php reservation.php";
    fwrite(STDOUT, "Available commands:" . "\n\n");
    fwrite(STDOUT, "$text checkRoom - check room empty". "\n");
    fwrite(STDOUT, "$text makeReservation - make room reservation". "\n");
}