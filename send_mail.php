<?php

use SendGrid\Mail\Mail;

function send_mail($room, $date, $slot, $name, $to)
{
    $from = "b.khakimov@student.inha.uz";
    $subject = "Room Reservation Details";
    $body = "\nReservation Details:\n" . "Name - $name\n" . "Room - $room\n" . "Date - $date\n" . "Time slot - $slot";

    $api_key = $_ENV["SENDGRID_API_KEY"];
    $sendgrid = new SendGrid($api_key);

    try {
        $email = new Mail();
        $email->setFrom($from);
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent("text/plain", $body);
        $response = $sendgrid->send($email);
        if ($response->statusCode() == 202) {
            fwrite(STDOUT, "Mail sent successfully" . "\n");
        } else {
            fwrite(STDOUT, "Error on mail delivery" . "\n");
        }
    } catch (Exception $e) {
        fwrite(STDOUT, "Exception: " . $e->getMessage() . "\n");
    }
}