<?php

$logado = isset($_GET['login']) ? (int) $_GET['login'] : 0;

if ($logado) {
	echo 'Estou logado!!';

	echo '<p><a href="/">deslogar</a></p>';
} else {
	echo 'Estou deslogado =(';

	echo '<p><a href="/?login=1">Logar</a></p>';
}
