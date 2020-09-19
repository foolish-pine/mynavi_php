<?php require('dbconnect.php'); ?>
<h2>Practice</h2>
<pre>
  <?php
  $statement = $db->prepare('INSERT INTO memos SET memo=?, created_at=NOW()');
  $statement->execute(array($_POST['memo']));
  echo 'メモが追加されました。';
  ?>
</pre>