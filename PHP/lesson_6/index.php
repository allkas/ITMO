<?php
    $k=0;
    if (is_array($_GET["answer"])){
    foreach($_GET["answer"] as $value) 
        {
        if ($value=='Верно') { 
        $k=$k+1;
        }
        echo $value, '<br>'; 
        }
    echo "У вас {$k} правильных ответов", '<br>'; 
    }
?>