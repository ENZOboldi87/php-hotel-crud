<?php
include __DIR__ . '/database.php';

$sql = "SELECT * FROM `stanze`";
$results = $conn->query($sql);


if ($results && $results->num_rows > 0) {
  $selectedRoom = [];

  while ($row = $results->fetch_assoc()) {
    $selectedRoom[] = $row;
  }

}
elseif ($results) {
  $selectedRoom = [];

}
else {
  die("Query error");
}

$conn->close(); ?>
