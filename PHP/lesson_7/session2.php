<?php
    // Инициируем сессию
    session_start();
    // Выводим сохраненное имя пользоватлея
    echo 'Здравствуйте, '.$_SESSION['newElement']."!<br>";
    // Выводим ссылку на следующую страницу
    echo "<a href='session3.php'>Следующая страница</a>";
?> 