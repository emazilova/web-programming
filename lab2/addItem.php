<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <pre><?php print_r($_POST) ?></pre>
    <?php
      global $mysqli;
      $mysqli = new mysqli("localhost", "ekaterina73", "", "basketball");
      $query = "insert into players (fio, age, team, comment, image) 
      values ('".$_POST['fio']."', ".$_POST['age'].", '".$_POST['team']."', '".$_POST['comment']."', '".$_POST['image']."');";
      echo $query;
      $mysqli->query("set names utf8;");
			$result = $mysqli->query($query);
      header('Location: ' . $_SERVER['HTTP_REFERER']);
    ?>
  </body>
</html>