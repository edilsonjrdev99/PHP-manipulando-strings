<?php

// Exemplo de string dentro da outra
echo '--- Vendo se exite string dentro de outra ---' . PHP_EOL;

$name = 'João de Barro';

$hasBarroInTheName = str_contains($name, 'Barro') ? 'Sim' : 'Não';

echo "$name tem Barro no nome? $hasBarroInTheName" . PHP_EOL;

// Exemplo se string começa ou termina com tal string
echo '--- Vendo se string começa com tal string ---' . PHP_EOL;

$url = 'https://alura.com.br';

$isSecurityUrl = str_starts_with($url, 'https://') ? 'Sim' : 'Não' ;
$isBrUrl = str_ends_with($url, '.br') ? 'Sim' : 'Não';

echo "$url é uma url segura? $isSecurityUrl. Ela é um domínio do Brasil? $isBrUrl" . PHP_EOL;

// Exemplo de recuperação de substring
echo '--- Recuperando substring ---' . PHP_EOL;

$email = 'junín@email.com';
$positionArroba = strpos($email, '@');

$userEmail = $positionArroba ? mb_strtoupper(substr($email, 0, $positionArroba)) : 'E-mail inválido!';
$domain = $positionArroba ? substr($email, $positionArroba + 1) : 'E-mail inválido!';

echo "O usuário é $userEmail e o domínio é $domain" . PHP_EOL;
