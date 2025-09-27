<?php

// Verificações com Regex
echo '--- Verificações com Regex ---' . PHP_EOL;

$phones = [
    '(35) 99999 - 9999',
    '(81) 88888 - 8888 a',
    '(00) 91234 - 5678',
    '(35) 1111 - 1111'
];

foreach ($phones as $phone) {
    $isValidPhone = preg_match('/^(\([0-9]{2}\)) (9?)([0-9]{4} - [0-9]{4}$)/', $phone, $valid) ? 'Sim' : 'Nao';

    echo "O telefone $phone é válido? $isValidPhone" . PHP_EOL;
    print_r($valid);
}
