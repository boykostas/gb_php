<?php

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            echo $arg1 + $arg2;
            break;
        case '-':
            echo $arg1 - $arg2;
            break;
        case '*':
            echo $arg1 * $arg2;
            break;
        case '/':
            echo $arg1 / $arg2;
            break;
    }
}

mathOperation(14, 15, operation: '*');