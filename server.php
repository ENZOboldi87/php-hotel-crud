<?php
include __DIR__ . '/database.php';

$sql = "SELECT * FROM `stanze`";
$results = $conn->query($sql);


if ($results && $results->num_rows > 0) {
  $rooms = [];

  while ($row = $results->fetch_assoc()) {
    $rooms[] = $row;
  }

}
elseif ($results) {
  $rooms = [];

}
else {
  die("Query error");
}

$conn->close(); ?>
