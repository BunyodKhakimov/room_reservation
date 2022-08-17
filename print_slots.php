<?php

function print_slots()
{
    $time_slots = [
        '1. 09:00 AM - 10:00 AM',
        '2. 10:00 AM - 11:00 AM',
        '3. 11:00 AM - 12:00 PM',
        '4. 12:00 PM - 13:00 PM',
        '5. 13:00 PM - 14:00 PM',
        '6. 14:00 PM - 15:00 PM',
        '7. 15:00 PM - 16:00 PM',
        '8. 16:00 PM - 17:00 PM',
        '9. 17:00 PM - 18:00 PM',
    ];

    foreach($time_slots as $key => $value) {
        fwrite(STDOUT, $value . "\n");
    }
}