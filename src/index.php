<?php

function saudar(string $name): never 
{
    echo "Ola, $name";
    exit(); // Se comentar essa linha, teremos um fatal error
}

saudar("Tilson"); // result: "Ola, Tilson"
echo "Outra linha";