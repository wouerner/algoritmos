<form method="post">
    <label>Carros vendidos:</label>
    <input name="carros_vendidos">
    <label>Salario fixo:</label>
    <input name="salario_fixo">
    <label>Valor das vendas:</label>
    <input name="valor_vendas">
    <label>Comissão por carro:</label>
    <input name="comissao_carro">
    <button type="submit">Enviar</button>
</form>

<?php

$carros_vendidos = isset($_POST['carros_vendidos']) ? $_POST['carros_vendidos'] : 0;
$salario_fixo    = isset($_POST['salario_fixo']) ? $_POST['salario_fixo'] : 0;
$valor_vendas    = isset($_POST['valor_vendas']) ? $_POST['valor_vendas'] : 0;
$comissao_carro  = isset($_POST['comissao_carro']) ? $_POST['comissao_carro'] : 0;

$salario_final = $salario_fixo + ($carros_vendidos * $comissao_carro);
$salario_final += ($valor_vendas * 5) / 100;

echo 'Salário final: R$ ' . $salario_final . '<br/>';


