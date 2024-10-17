<?php
// fetch-events.php

header('Content-Type: application/json');

// Sample data array representing bookings (In practice, fetch from a database)
$events = [
  [
    'title' => 'Booked',
    'start' => '2024-10-17T10:00:00',
    'end' => '2024-10-17T11:00:00',
    'color' => 'red'
  ],
  [
    'title' => 'Booked',
    'start' => '2024-10-18T12:00:00',
    'end' => '2024-10-18T13:00:00',
    'color' => 'red'
  ]
];

echo json_encode($events);
?>
