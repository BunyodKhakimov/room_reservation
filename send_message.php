<?php

use Twilio\Rest\Client;

function send_message($room, $date, $slot, $name, $to)
{
    $from = '+13859935236';
    $sid = $_ENV["TWILIO_ACCOUNT_SID"];
    $token = $_ENV["TWILIO_AUTH_TOKEN"];

    $body = "\nReservation Details:\n" . "Name - $name\n" . "Room - $room\n" . "Date - $date\n" . "Time slot - $slot";

    try {
        $twilio = new Client($sid, $token);
        $twilio->messages->create($to, ["body" => $body, "from" => $from]);
        fwrite(STDOUT, "Message sent successfully" . "\n");
    } catch(Exception $e) {
        fwrite(STDOUT, "Exception: " . $e->getMessage() . "\n");
    }
}