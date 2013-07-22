<form method="post">
    <label>Idade em anos:</label>
    <input name="anos">
    <label>meses:</label>
    <input name="meses">
    <label>dias:</label>
    <input name="dias">
    <button type="submit">Enviar</button>
</form>

<?php

$anos = isset($_POST['anos']) ? $_POST['anos'] : 0;
$meses = isset($_POST['meses']) ? $_POST['meses'] :0;
$dias = isset($_POST['dias']) ? $_POST['meses'] :0;

$total = ($anos*365) + ($meses*30) + $dias;

echo 'Idade em dias: '.$total;

