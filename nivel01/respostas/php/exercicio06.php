<form method="post">
    <label>Salario atual:</label>
    <input name="salario_atual">
    <label>Percentual de reajuste:</label>
    <input name="percentual_reajuste">
    <button type="submit">Enviar</button>
</form>

<?php

$salario_atual       = isset($_POST['salario_atual']) ? $_POST['salario_atual'] : 0;
$percentual_reajuste = isset($_POST['percentual_reajuste']) ? $_POST['percentual_reajuste'] : 0;

$novo_salario = (($salario_atual * $percentual_reajuste) / 100) + $salario_atual;

echo 'Salario atual: R$ ' . $salario_atual . '<br/>';
echo 'Percentual de reajuste: ' . $percentual_reajuste . '%<br/>';
echo 'Novo salario: R$ ' . $novo_salario;

