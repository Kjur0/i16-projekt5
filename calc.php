<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Kraina figur</title>
	<meta name="author" content="Krzysztof Jurkowski">
	<link rel="stylesheet" href="./styles.css">
	<?php
	include 'funkcje.php';
	?>
</head>

<body>
	<header>
		<h1>Kraina figur</h1>
		<h4><i><?php echo array('“Matematyka jest królową nauk i arytmetyką jej diademem.” - Carl Friedrich Gauss', '“Programowanie to sztuka, która polega na ukrywaniu szczegółów przed samym sobą i przed innymi.” - Harold Abelson', '“Matematyka jest językiem, w którym Bóg stworzył świat.” - Galileo Galilei', '“Programowanie to jedna z niewielu dziedzin, w której możesz być błędny przez wiele lat i wciąż odnosić sukcesy.” - David Heinemeier Hansson', '“Matematyka jest sztuką dawania odpowiedzi na pytania, o których nie wiemy nic.” - Andre Weil')[rand(0, 4)]; ?></i></h4>
		<hr>
	</header>
	<form action="index.php">
		<input type="submit" value="Powrót">
	</form>
	<?php
	if (array_key_exists('trojkat_p', $_POST) || array_key_exists('prostokat_p', $_POST) || array_key_exists('trapez_p', $_POST) || array_key_exists('kolo_p', $_POST)) {
		echo '<h3>Pole</h3><table><tr><th>Nazwa figury</th><th>Rysunek</th><th>Przykładowe pole</th></tr>';
		if (array_key_exists('trojkat_p', $_POST)) {
			$a = $_POST['trojkat_a'];
			$h = $_POST['trojkat_h'];
			echo '<tr><th>TRÓJKĄT</th><td><img src="./assets/img0.png" alt="Trójkąt"></td><td> Pole trójkąta o podstawie ' . $a . ' i wysokości ' . $h . ' wynosi ' . trojkat_pole($a, $h) . '</td></tr>';
		}
		if (array_key_exists('prostokat_p', $_POST)) {
			$a = $_POST['prostokat_a'];
			$b = $_POST['prostokat_b'];
			echo '<tr><th>PROSTOKĄT</th><td><img src="./assets/img1.png" alt="Prostokąt"></td><td> Pole prostokąta o bokach ' . $a . ' i ' . $b . ' wynosi ' . prostokat_pole($a, $b) . '</td></tr>';
		}
		if (array_key_exists('trapez_p', $_POST)) {
			$a = $_POST['trapez_a'];
			$b = $_POST['trapez_b'];
			$h = $_POST['trapez_h'];
			echo '<tr><th>TRAPEZ</th><td><img src="./assets/img2.png" alt="Trapez"></td><td> Pole trapezu o podstawach ' . $a . ' i ' . $b . ' oraz wysokości ' . $h . ' wynosi ' . trapez_pole($a, $b, $h) . '</td></tr>';
		}
		if (array_key_exists('kolo_p', $_POST)) {
			$r = $_POST['kolo_r'];
			echo '<tr><th>KOŁO</th><td><img src="./assets/img3.png" alt="Koło"></td><td> Pole koła o promieniu ' . $r . ' wynosi ' . kolo_pole($r) . '</td></tr>';
		}
		echo '</table>';
	}
	if (array_key_exists('trojkat_o', $_POST) || array_key_exists('prostokat_o', $_POST) || array_key_exists('trapez_o', $_POST) || array_key_exists('kolo_o', $_POST)) {
		echo '<h3>Obwód</h3><table><tr><th>Nazwa figury</th><th>Rysunek</th><th>Przykładowy obwód</th></tr>';
		if (array_key_exists('trojkat_o', $_POST)) {
			$a = $_POST['trojkat_a'];
			$b = $_POST['trojkat_b'];
			$c = $_POST['trojkat_c'];
			echo '<tr><th>TRÓJKĄT</th><td><img src="./assets/img0.png" alt="Trójkąt"></td><td> Obwód trójkąta o bokach ' . $a . ', ' . $b . ' i ' . $c . ' wynosi ' . trojkat_obwod($a, $b, $c) . '</td></tr>';
		}
		if (array_key_exists('prostokat_o', $_POST)) {
			$a = $_POST['prostokat_a'];
			$b = $_POST['prostokat_b'];
			echo '<tr><th>PROSTOKĄT</th><td><img src="./assets/img1.png" alt="Prostokąt"></td><td> Obwód prostokąta o bokach ' . $a . ' i ' . $b . ' wynosi ' . prostokat_obwod($a, $b) . '</td></tr>';
		}
		if (array_key_exists('trapez_o', $_POST)) {
			$a = $_POST['trapez_a'];
			$b = $_POST['trapez_b'];
			$c = $_POST['trapez_c'];
			$d = $_POST['trapez_d'];
			echo '<tr><th>TRAPEZ</th><td><img src="./assets/img2.png" alt="Trapez"></td><td> Obwód trapezu o bokach ' . $a . ', ' . $b . ', ' . $c . ' i ' . $d . ' wynosi ' . trapez_obwod($a, $b, $c, $d) . '</td></tr>';
		}
		if (array_key_exists('kolo_o', $_POST)) {
			$r = $_POST['kolo_r'];
			echo '<tr><th>KOŁO</th><td><img src="./assets/img3.png" alt="Koło"></td><td> Obwód koła o promieniu ' . $r . ' wynosi ' . kolo_obwod($r) . '</td></tr>';
		}
		echo '</table>';
	}
	?>
	<footer>
		<h3>Krzysztof Jurkowski, ${date}</h3>
	</footer>
</body>

</html>