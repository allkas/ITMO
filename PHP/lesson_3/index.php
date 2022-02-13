<?php

// include_once() может использоваться в случаях, когда один и тот же файл может быть 
// включен более одного раза во время выполнения скрипта, поэтому в этом случае он может помочь 
// избежать таких проблем, как переопределение функций, переназначение значений переменных

require_once('variable.php');

$foo = 3;


echo $foo + $bar;