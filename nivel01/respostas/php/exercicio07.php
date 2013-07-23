<form method="post">
    <label>Custo de fabrica:</label>
    <input name="custo_fabrica">
    <button type="submit">Enviar</button>
</form>

<?php

$percentual_distribuidor = 28;
$percentual_impostos = 45;
$custo_fabrica = isset($_POST['custo_fabrica']) ? $_POST['custo_fabrica'] : 0;

$valor_distribuidor = ($custo_fabrica * $percentual_distribuidor) / 100;
$valor_impostos     = ($custo_fabrica * $percentual_impostos) / 100;

$custo_final = $custo_fabrica + ($valor_distribuidor + $valor_impostos);

echo 'Custo de fabrica: R$ ' . $custo_fabrica . '<br/>';
echo 'Custo final: ' . $custo_final;


