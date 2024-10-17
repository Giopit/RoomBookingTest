<?php
// booking-handler.php

// Get JSON input
$data = json_decode(file_get_contents('php://input'), true);

$room = $data['room'];
$start = $data['start'];
$end = $data['end'];
$user_email = $data['email'];

// Send email notification to admin
$to = 'admin@example.com';
$subject = "Room Booking Request";
$message = "Booking Request:\nRoom: $room\nStart: $start\nEnd: $end\nUser Email: $user_email";

$headers = "From: no-reply@yourwebsite.com";
if (mail($to, $subject, $message, $headers)) {
  echo "Booking request sent!";
} else {
  echo "Failed to send booking request.";
}
?>
