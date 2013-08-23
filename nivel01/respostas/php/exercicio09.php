<form method="post">
    <label>Numero:</label>
    <input name="numero">
    <button type="submit">Enviar</button>
</form>

<?php

$numero = isset($_POST['numero']) ? $_POST['numero'] : 0;

if ($numero > 10){
	echo 'E maior que 10';
}else{
	echo 'Nao e maior que 10';
}


