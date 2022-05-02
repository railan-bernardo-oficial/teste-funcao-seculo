<?php

require __DIR__ . '/funcoes.php';

$post = explode('=', $_POST['ano']);

echo json_encode(seculoAno($post[1]));

?>