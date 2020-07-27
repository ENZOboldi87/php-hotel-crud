<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>
<?php var_dump($selectedRoom['id']); ?>


<main>
  <h2>Modifica stanza numero con id <?php echo $selectedRoom['id'] ?></h2>

  <form action="<?php echo $basepath . '/update/update.php'; ?>" method="post">
    <input type="hidden" name="roomId" value="<?php echo $selectedRoom['id'] ?>">
    <div>
      <label>Numero di stanza</label>
      <input type="text" name="room_number" value="<?php echo $selectedRoom['room_number'] ?>">
    </div>

    <div>
    <label>Piano</label>
    <input type="text" name="floorNumber" value="<?php echo $selectedRoom['floor'] ?>">
    </div>

    <div>
    <label>Beds</label>
    <input type="text" name="roomBeds" value="<?php echo $selectedRoom['beds'] ?>">
    </div>

    <div>
    <input type="submit" name="" value="conferma">
    </div>

    <div>
    <a href="<?php echo $basepath . 'index.php' ?>"><button type="button" name="button">Torna indietro</button>

    </div>


  </form>
</main>
  <?php include __DIR__ . '/../partials/footer.php' ?>
