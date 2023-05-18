<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>Kraina figur</title>
	<meta name="author" content="Krzysztof Jurkowski">
	<link rel="stylesheet" href="./styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="./script.js" defer></script>
</head>

<body>
	<header>
		<h1>Kraina figur</h1>
		<h4><i><?php echo array('“Matematyka jest królową nauk i arytmetyką jej diademem.” - Carl Friedrich Gauss', '“Programowanie to sztuka, która polega na ukrywaniu szczegółów przed samym sobą i przed innymi.” - Harold Abelson', '“Matematyka jest językiem, w którym Bóg stworzył świat.” - Galileo Galilei', '“Programowanie to jedna z niewielu dziedzin, w której możesz być błędny przez wiele lat i wciąż odnosić sukcesy.” - David Heinemeier Hansson', '“Matematyka jest sztuką dawania odpowiedzi na pytania, o których nie wiemy nic.” - Andre Weil')[rand(0, 4)]; ?></i></h4>
		<hr>
	</header>
	<form method="post" action="calc.php">
		Wybierz figury do obliczenia pola: <br>
		<input type="checkbox" name="trojkat_p" id="trojkat_p" onclick="reloadform()"><label for="trojkat_p">Trójkąt</label><br>
		<input type="checkbox" name="prostokat_p" id="prostokat_p" onclick="reloadform()"><label for="prostokat_p">Prostokąt</label><br>
		<input type="checkbox" name="trapez_p" id="trapez_p" onclick="reloadform()"><label for="trapez_p">Trapez</label><br>
		<input type="checkbox" name="kolo_p" id="kolo_p" onclick="reloadform()"><label for="kolo_p">Koło</label><br>
		Wybierz figury do obliczenia obwodu: <br>
		<input type="checkbox" name="trojkat_o" id="trojkat_o" onclick="reloadform()"><label for="trojkat_o">Trójkąt</label><br>
		<input type="checkbox" name="prostokat_o" id="prostokat_o" onclick="reloadform()"><label for="prostokat_o">Prostokąt</label><br>
		<input type="checkbox" name="trapez_o" id="trapez_o" onclick="reloadform()"><label for="trapez_o">Trapez</label><br>
		<input type="checkbox" name="kolo_o" id="kolo_o" onclick="reloadform()"><label for="kolo_o">Koło</label><br>

		<label for="trojkat_a" class="trojkat">Podaj długość podstawy trójkąta: </label><input type="number" name="trojkat_a" id="trojkat_a" class="trojkat"><br class="trojkat">
		<label for="trojkat_b" class="trojkat_o">Podaj długość 2. boku: </label><input type="number" name="trojkat_b" id="trojkat_b" class="trojkat_o"><br class="trojkat_o">
		<label for="trojkat_c" class="trojkat_o">Podaj długość 3. boku: </label><input type="number" name="trojkat_c" id="trojkat_c" class="trojkat_o"><br class="trojkat_o">
		<label for="trojkat_h" class="trojkat_p">Podaj wysokość trójkąta: </label><input type="number" name="trojkat_h" id="trojkat_h" class="trojkat_p"><br class="trojkat_p">

		<label for="prostokat_a" class="prostokat">Podaj długość 1. boku prostokąta: </label><input type="number" name="prostokat_a" id="prostokat_a" class="prostokat"><br class="prostokat">
		<label for="prostokat_b" class="prostokat">Podaj długość 2. boku prostokąta: </label><input type="number" name="prostokat_b" id="prostokat_b" class="prostokat"><br class="prostokat">

		<label for="trapez_a" class="trapez">Podaj długość 1. podstawy trapeza: </label><input type="number" name="trapez_a" id="trapez_a" class="trapez"><br class="trapez">
		<label for="trapez_b" class="trapez">Podaj długość 2. podstawy tapeza: </label><input type="number" name="trapez_b" id="trapez_b" class="trapez"><br class="trapez">
		<label for="trapez_c" class="trapez_o">Podaj długość 1. boku tapeza: </label><input type="number" name="trapez_c" id="trapez_c" class="trapez_o"><br class="trapez_o">
		<label for="trapez_d" class="trapez_o">Podaj długość 2. boku tapeza: </label><input type="number" name="trapez_d" id="trapez_d" class="trapez_o"><br class="trapez_o">
		<label for="trapez_h" class="trapez_p">Podaj wysokość trapeza: </label><input type="number" name="trapez_h" id="trapez_h" class="trapez_p"><br class="trapez_p">

		<label for="kolo_r" class="kolo">Podaj promień koła: </label><input type="number" name="kolo_r" id="kolo_r" class="kolo"><br class="kolo">

		<input type="submit" value="Oblicz">
	</form>
	<footer>
		<h3>Krzysztof Jurkowski, 19.05.2023</h3>
	</footer>
</body>

</html>