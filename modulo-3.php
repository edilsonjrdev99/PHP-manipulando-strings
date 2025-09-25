<?php

// Exemplo de separação de string
echo '--- Exemplo de separação de string ---' . PHP_EOL;

$fullName = 'João de Barro';

print_r(explode(' ', $fullName, 2));

list($name, $surname) = explode(' ', $fullName, 2);

echo "Nome completo: $fullName - Nome: $name - Sobrenome: $surname" . PHP_EOL;

// Exemplo de junção de string
echo '--- Exemplo de junção de string ---' . PHP_EOL;

$phones = ['(35) 91234-5678', '(81) 99999-8888', '(99) 99999-9999'];
$allPhones = implode(', ', $phones);

echo $allPhones . PHP_EOL;

// Aparando pontas e caracteres da string
echo '--- Aparando pontas e caracteres da tring ---' . PHP_EOL;

$csv = ' ,João,de Barro,26,joao-de-barro@email.com,. ';
echo $csv . PHP_EOL;
echo 'trim normal ' . trim($csv) . PHP_EOL;
echo 'trim esquerda left ' . ltrim($csv, ',. ') . PHP_EOL;
echo 'trim direita right ' . rtrim($csv, ',. ') . PHP_EOL;

// String numérica válida
echo '--- String numérica válida ---' . PHP_EOL;

// String numérica
$age = ' 2000 ';
// String numérica inválida por causa do caractere de letra, waning e resultado 25
$invalidAge = '2000  a';
// String numérica inválida, no php 8+ ele não reconhece como válida warning resultado 2023 porque considera o 2
$invalidSpaceAge = '2 0 0 0';

echo "Resultado de 2025 - $age: " . 2025 - $age . PHP_EOL;
echo "Resultado de 2025  a - $age: " . 2025 - $invalidAge . PHP_EOL;
echo "Resultado de 2 0 2 5 - $age: " . 2025 - $invalidSpaceAge . PHP_EOL;

$age == 2000 ? $ifAge = 'Sim' : $ifAge = 'Não';
$invalidAge == 2000 ? $ifInvalidAge = 'Sim' : $ifInvalidAge = 'Não';
$invalidSpaceAge == 2000 ? $ifInvalidSpaceAge = 'Sim' : $ifInvalidSpaceAge = 'Não';
$invalidAge == 0 ? $stringIsZero = 'Sim' : $stringIsZero = 'Não';

echo "$age = 2000? $ifAge, $invalidAge = 2000? $ifInvalidAge e $invalidSpaceAge = 2000? $ifInvalidSpaceAge" . PHP_EOL;
echo "$invalidAge = 0? $stringIsZero - No php 8 ele converte o 0 para string também, antes dava true" . PHP_EOL;