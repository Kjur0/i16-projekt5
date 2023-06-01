<?php
echo <<<END
<header>
	<h1>Kraina figur</h1>
	<h4><i>
END . array('“Matematyka jest królową nauk i arytmetyka jej diademem.” - Carl Friedrich Gauss', '“Programowanie to sztuka, która polega na ukrywaniu szczegółów przed samym sobą i przed innymi.” - Harold Abelson', '“Matematyka jest językiem, w którym Bóg stworzył świat.” - Galileo Galilei', '“Programowanie to jedna z niewielu dziedzin, w której możesz być błędny przez wiele lat i wciąż odnosić sukcesy.” - David Heinemeier Hansson', '“Matematyka jest sztuką dawania odpowiedzi na pytania, o których nie wiemy nic.” - Andre Weil')[rand(0, 4)] . <<<END
</i></h4>
	<hr>
</header>
END;
?>