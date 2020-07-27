<?php
include __DIR__ . '/../partials/header.php';
include __DIR__ . '/../database.php';


$room_id = $_POST['formid'];

$sql = "DELETE FROM `stanze` WHERE `id` = $room_id";
$result = $conn->query($sql);

if (!$result) {
  // code...
  die('eliminazione non effettuata');
}

?>

 <main>
   <h3>eliminazione fatta</h3>
 </main>

<?php include __DIR__ . '/../partials/footer.php' ?>
