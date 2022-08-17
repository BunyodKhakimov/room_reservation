<?php

function create_reservation($room, $date, $slot, $name, $email, $phone)
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=room_reservation_bd", $username, $password);

        $stmt = $conn->prepare("INSERT INTO reservations (name, email, phone, room, date, slot) 
            VALUES (:name, :email, :phone, :room, :date, :slot)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':room', $room);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':slot', $slot);
        $stmt->execute();
        $conn = null;

        fwrite(STDOUT, "New Reservation Created Successfully" . "\n");
    } catch(PDOException $e) {
        fwrite(STDOUT, "Exception: " . $e->getMessage() . "\n");
        $conn = null;
        exit();
    }
}