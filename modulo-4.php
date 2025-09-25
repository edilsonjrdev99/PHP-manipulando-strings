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