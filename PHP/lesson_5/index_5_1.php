<?php
// ошибка
function foo(){
    function bar(){
        echo "Hello world";
    }
} bar();

function foo(){
    function bar(){
        echo "Hello world";
    }
}
foo();
bar(); 