<?php
include __DIR__ . '/../database.php';

$room_number = $_POST['room_number'];
$room_floor = $_POST['floorNumber'];
$room_beds = $_POST['roomBeds'];
$roomId = $_POST['roomId'];

$sql = "UPDATE `stanze` SET `room_number` = $room_number, `floor` = $room_floor,
 `beds` = $room_beds, `updated_at` = NOW() WHERE `id` = $roomId";


$result = $conn->query($sql);

if ($result) {
  // code...
  // header('Location:' . $basepath . 'index.php');
  echo 'update avvenuto';
}
else {
  // code...
  // header('Location:' . $basepath . 'index.php');
  die('errore della query');
}
 ?>
