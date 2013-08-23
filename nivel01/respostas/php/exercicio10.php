<form method="post">
    <label>Numero:</label>
    <input name="numero">
    <button type="submit">Enviar</button>
</form>

<?php

$numero = isset($_POST['numero']) ? $_POST['numero'] : 0;

if ($numero >= 0){
	echo 'Positivo';
}else{
	echo 'Negativo';
}


