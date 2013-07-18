<form method="post">
    <input name="valor">
    <button type="submit">Enviar</button>
</form>

<?php

$valor = isset($_POST['valor']) ? $_POST['valor'] : "sem valor";

echo --$valor ;

