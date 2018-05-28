<!DOCTYPE html>
<html lang="en-us">

<head> 
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="styles.css"> 
</head>

<body>
	<ul class="menu">
		<li class="selected-item">
			<a href="index.php">Главная</a>
		</li>
		<li>
			<a href="gallery.html">Галерея</a>
		</li>
	</ul>

	<div>
		<?php
				$mysqli = new mysqli("localhost", "ekaterina73", "", "basketball");
				$query = "select id, image, comment from players";
				$mysqli->query("set names utf8;");
				$result = $mysqli->query($query);
				while($row = $result->fetch_array(MYSQLI_ASSOC)) {
				  echo "<div class='col'><div>".
							"<img src='".$row["image"]."'>".
							"<div class='col-text'>".
								"<div>".$row["comment"]."</div>".
								"<a href='item.php?item=".$row["id"]."'>Подробнее...</a>".
							"</div>".
						"</div></div>";
				}
		?>		
		<div class="col">
			<div>
			<h3>Добавить баскетболиста:</h3>
			<form class="add-item" method="post" action="addItem.php">
				<label>Имя: <input required name="fio" type="text" placeholder="Иванов Иван Иванович" /></label>
				<label>Возраст: <input required name="age" type="number" placeholder="24" min="1" max="999"/></label>
				<label>Команда: <input required name="team" type="text" placeholder="Атланта"/></label>
				<label>Фото: <input required name="image" type="text" placeholder="http://image.jpg"/></label>
				<label><textarea required name="comment" placeholder="Введите текст..."></textarea></label>
				<input type="submit" value="Готово"/>
			</form>
			</div>
		</div>
	</div>
	
</body>
</html>
