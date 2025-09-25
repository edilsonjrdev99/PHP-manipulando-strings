<?php

// Exemplo de heredoc
echo '--- Exemplo de heredoc e nowdoc ---' . PHP_EOL;

function sendEmailHeredoc(string $name) :void
{
    $email = <<<DELIMITADOR
        Olá, $name
        Seja bem-vindo(a)
        Atenciosamente,
        
        --------
    DELIMITADOR;

    echo $email . PHP_EOL;
}

function sendEmailNowdoc(string $name): void
{
    $email = <<<'DELIMITADOR'
        Olá, $name
        Seja bem-vindo(a)
        Atenciosamente,
        
        --------
    DELIMITADOR;

    echo $email . PHP_EOL;
}

echo 'heredoc é como se fosse áspas duplas' . PHP_EOL;
sendEmailHeredoc('João de Barro');

echo 'nowdoc é como se fosse áspas simples' . PHP_EOL;
sendEmailNowdoc('João de barro');

// Substituição de string
echo '--- Substituição de string ---' . PHP_EOL;

$message = 'Estou muito bravo com você maldito, foda em!';

$badWords = ['miserável', 'foda', 'maldito'];
$replaceWords = ['m***', 'f***', 'm***'];

echo 'Exemplo de str_replace: ' . str_replace($badWords, $replaceWords, $message) . PHP_EOL;
echo 'Exemplo de strtr: ' . strtr($message, 'foda', '***@') . PHP_EOL;
echo 'Exemplo de strtr com array no parâmetro: ' . strtr($message, ['foda' => 'f***']) . PHP_EOL;

// Comportamento de substituições igual
echo '--- Comportamento de substituições iguais ---' . PHP_EOL;

$text = 'hi all, I said hello';
$translate = ['hello' => 'hi', 'hi' => 'hello'];

echo "Texto - $text" . PHP_EOL;
echo 'substituições iguais com strtr: ' . strtr($text, $translate) . PHP_EOL;
echo 'substituições iguais com str_replace: ' . str_replace(['hello', 'hi'], ['hi', 'hello'], $text) . PHP_EOL;