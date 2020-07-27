<?php
include __DIR__ . '/../database.php';

$room_id = $_GET['id'];
$sql = "SELECT * FROM `stanze` WHERE `id` = $room_id";
$results = $conn->query($sql);


if ($results && $results->num_rows > 0) {
  $selectedRoom = $results->fetch_assoc();

}
elseif ($results) {
  $selectedRoom = [];

}
else {
  die("Query error");
}

$conn->close();

?>
