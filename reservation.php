<?php

include "is_empty.php";
include "create_reservation.php";
include "send_mail.php";

$room = null;
$date = null;
$slot = null;
$name = null;
$email = null;
$phone = null;

if ($argc < 2) {
    fwrite(STDOUT, "Welcome to Room Reservation App!" . "\n");
    write_available_commands();
} else {
    switch ($argv[1]) {
        case 'checkRoom':
            input_room_data();
            if (is_empty($room, $date, $slot)) {
                fwrite(STDOUT, "Room $room for $date and $slot time slot is free" . "\n");
            } else {
                fwrite(STDOUT, "Room $room for $date and $slot time slot is reserved" . "\n");
            }
            break;
        case 'makeReservation':
            input_room_data();
            if (is_empty($room, $date, $slot)) {
                input_user_data();
                create_reservation($room, $date, $slot, $name, $email, $phone);
                send_mail($room, $date, $slot, $name, $email);
                // send message
            } else {
                fwrite(STDOUT, "Room $room for $date and $slot time slot is reserved" . "\n");
            }
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

function input_room_data()
{
    global $room, $date, $slot;
    fwrite(STDOUT, "Enter room number (1-5): ");
    $room = htmlspecialchars(trim(fgets(STDIN)));
    fwrite(STDOUT, "Please enter date (e.g. 2022-12-31): ");
    $date = htmlspecialchars(trim(fgets(STDIN)));
    // print slots
    fwrite(STDOUT, "Choose time slot from above (e.g. 5): ");
    $slot = htmlspecialchars(trim(fgets(STDIN)));
}

function input_user_data()
{
    global $name, $email, $phone;
    fwrite(STDOUT, "Please enter your name: ");
    $name = htmlspecialchars(trim(fgets(STDIN)));
    fwrite(STDOUT, "Please enter your email: ");
    $email = htmlspecialchars(trim(fgets(STDIN)));
    fwrite(STDOUT, "Please enter your phone: ");
    $phone = htmlspecialchars(trim(fgets(STDIN)));
}