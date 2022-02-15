<?
    session_start();
    // Разрегистрировали переменную
    unset($_SESSION['newElement']);
    // Разрушаем сессию
    session_destroy();
?>