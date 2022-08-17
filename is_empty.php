<?php

function is_empty($room, $date, $slot)
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "room_reservation";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $stmt = $conn->prepare("SELECT * FROM reservations
            WHERE room=:room AND date=:date AND slot=:slot");
        $stmt->bindValue(':room', $room,PDO::PARAM_INT);
        $stmt->bindValue(':date', $date, PDO::PARAM_STR);
        $stmt->bindValue(':slot', $slot, PDO::PARAM_INT);
        $stmt->execute();
        $conn = null;

        if($stmt->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    } catch(PDOException $e) {
        fwrite(STDOUT, "Exception: " . $e->getMessage() . "\n");
        $conn = null;
        exit();
    }
}