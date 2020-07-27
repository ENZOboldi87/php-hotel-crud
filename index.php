<?php include __DIR__ . '/database.php' ?>
<?php include __DIR__ . '/partials/header.php' ?>
<?php include __DIR__ . '/server.php' ?>

    <main>
      <table class="prova">
        <thead>
          <tr>
            <th>ID</th>
            <th>Room number</th>
            <th>Floor</th>
            <th>Beds</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rooms as $room ) { ?>
          <tr>
            <td><?php echo $room['id']?></td>
            <td><?php echo $room['room_number']?></td>
            <td><?php echo $room['floor']?></td>
            <td><?php echo $room['beds'] ?></td>
            <td> <a href="<?php echo $basepath . 'show/show.php?id=' . $room['id']; ?>">View</a>
                  <a href="<?php echo $basepath . 'update/edit.php?id=' . $room['room_number']; ?>">Update</a>
                <form action="<?php echo $basepath . 'delete/delete.php'; ?>" method="post">
                  <input type="hidden" name="formid" value="<?php echo $room['id']; ?>">
                  <input type="submit" name="" value="cancella">
                </form> </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </main>
    <?php include __DIR__ . '/partials/footer.php' ?>
  </body>
</html>
