<?php

function secret($n){
    if($n > 0)
    {
        return $n * secret($n-1);
    }
    
    return 1;
} 


// функция рекурсивно вызывает самусебя пока условие истинно. В остальных случаях возвращает еденицу
secret(5);