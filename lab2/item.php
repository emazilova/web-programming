<!DOCTYPE html>
<html lang="en-us">

<head> 
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="styles.css"> 
</head>

<body>
	<ul class="menu">
		<li>
			<a href="index.php">Главная</a>
		</li>
		<li>
			<a href="gallery.html">Галерея</a>
		</li>
	</ul>

	<div>
		<?php
				$mysqli = new mysqli("localhost", "ekaterina73", "", "basketball");
				$query = "select * from players where id=".$_GET['item'];
				$mysqli->query("set names utf8;");
				$result = $mysqli->query($query);
				$row = $result->fetch_array(MYSQLI_ASSOC);
				  echo "<table><tbody>".
							"<tr><td>Имя</td><td>".$row["fio"]."</td></tr>".
							"<tr><td>Возраст</td><td>".$row["age"]."</td></tr>".
							"<tr><td>Команда</td><td>".$row["team"]."</td></tr>".
							"<tr><td>Описание</td><td>".$row["comment"]."</td></tr>".
						"</tbody></table>";
		?>		
	</div>
</body>
</html>
