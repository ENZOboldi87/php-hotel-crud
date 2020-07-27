<?php include __DIR__ . '/server.php' ?>
<?php include __DIR__ . '/../partials/header.php' ?>



<main>
  <h2>stai vedendo la stanza numero: <?php echo $selectedRoom['room_number'] ?>
    <ul>
      <li>ID: <?php echo $selectedRoom['id']; ?></li>
      <li>Piano: <?php echo $selectedRoom['floor']; ?></li>
      <li>Letti: <?php echo $selectedRoom['beds'] ?></li>
      <li>Data di creazione: <?php echo $selectedRoom['created_at']; ?></li>

    </ul>

  </h2>
  <a href="<?php echo $basepath . 'index.php' ?>"><button type="button" name="button">Torna indietro</button>
</a>
</main>
<?php include __DIR__ . '/../partials/footer.php' ?>
