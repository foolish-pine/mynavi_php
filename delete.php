<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memo</title>
  <link rel="stylesheet" href="css/style.css">
</head>

</html>
<?php
if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
  $id=$_REQUEST['id'];
  $statement = $db->prepare('DELETE FROM memos WHERE id=?');
  $statement->execute(array($id));
}
?>
<pre>
  <p>メモを削除しました</p>
</pre>
<p><a href="index.php">戻る</a></p>
</main>