<?php

// Comparando tamanho de string
echo '--- Comparando tamanho de string ---' . PHP_EOL;

$password = 'áúá1234';

// Apesar a senha do exemplo não ter 8 ou mais caracteres ela retorna true, porque strlen retorna quantidade em bytes
// Esse exemplo vai retornar 9, porque cara acento vale como 1 então a letra e o acento são 2 bytes
$isStrongPassword = strlen($password) >= 8 ? 'Sim' : 'Nao';
$realIsStrongPassword = mb_strlen($password) >= 8 ? 'Sim' : 'Nao';
$bytes = strlen($password);
$mbBytes = mb_strlen($password);

echo "STRLEN: A senha é segura? $isStrongPassword" . PHP_EOL;
echo "MB_STRLEN: A senha é segura? $realIsStrongPassword" . PHP_EOL;
echo "Quantidade de Bytes retornado pelo strlen - $bytes e pelo mb_strlen - $mbBytes" . PHP_EOL;
