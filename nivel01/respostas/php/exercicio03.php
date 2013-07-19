<form method="post">
    <label>Altura:</label>
    <input name="altura">
    <label>Base:</label>
    <input name="base">
    <button type="submit">Enviar</button>
</form>

<?php

$altura = isset($_POST['altura']) ? $_POST['altura'] : "sem valor";
$base = isset($_POST['base']) ? $_POST['base'] : "sem valor";

echo 'Valor: '.$base*$altura ;

