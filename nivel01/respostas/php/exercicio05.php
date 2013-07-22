<form method="post">
    <label>Total de eleitores:</label>
    <input name="eleitores">
    <label>Votos nulos:</label>
    <input name="nulos">
    <label>Votos validos:</label>
    <input name="validos">
    <button type="submit">Enviar</button>
</form>

<?php

$eleitores = isset($_POST['eleitores']) ? $_POST['eleitores'] : 0;
$nulos = isset($_POST['nulos']) ? $_POST['nulos'] : 0;
$validos = isset($_POST['validos']) ? $_POST['validos'] : 0;

$percentual_nulos = ($nulos * 100) / $eleitores;
$percentual_validos = ($validos * 100) / $eleitores;

echo 'Total de eleitores: ' . $eleitores . '<br/>';
echo 'Percentual de votos nulos: ' . $percentual_nulos . '%<br/>';
echo 'Percentual de votos validos: ' . $percentual_validos . '%';

