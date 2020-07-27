<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/header.php' ?>


<main>
  <h2>Modifica stanza numero <?php echo $room_id ?></h2>

  <form action="<?php echo $basepath . '/update/update.php'; ?>" method="post">
    <input type="hidden" name="roomId" value="">
    <div>
      <label>Numero di stanza</label>
      <input type="text" name="roomNumber" value="">
    </div>

    <div>
    <label>Piano</label>
    <input type="text" name="floorNumber" value="">
    </div>

    <div>
    <label>Beds</label>
    <input type="text" name="roomBeds" value="">
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
