//Метод getCookies. Используется для вывода информации из кук
async function getCookies() {
    //Переменная для построения строчного шаблона вывода
    let tmp = '';
    //Проверяем наличие куки login
    if (typeof Cookies.get('login') !== 'undefined') {
    //Если она существует, то сохраняем в переменную tmp по следующей структуре
    // имя_куки : значение <br>
    //Cookies.get('login') - позволяет получить значение куки.
    //На вход принимает имя куки, на выходе отдает значение.
    tmp = tmp + 'login : '+Cookies.get('login')+'<br>';
    }
    //Проверяем наличие куки login
    if (typeof Cookies.get('password') !== 'undefined') {
    //Если она существует, то сохраняем в переменную tmp по следующеуй структуре
    // имя_куки : значение <br>
    //Cookies.get('password') - позволяет получить значение куки.
    //На вход принимает имя куки, на выходе отдает значение.
    tmp = tmp + 'password : '+Cookies.get('password');
    }
    //Здесь как раз, то для чего создавался весь метод.
    //Присвоение построенной строки параграфу с классом .saveCookie
    document.getElementsByClassName('saveCookie')[0].innerHTML = tmp;
}
   
    //Метод Login. Отвечает за обработку формы
   let login = async () => {
    //получаем с формы с полей ввода логин и пароль
    let username = document.getElementById('login').value;
    let password = document.getElementById('password').value;
   
    //Используя метод Cookies.set() сохраните в куки логин и пароль введенные пользователем
   
    //Выводим на параграф p.saveCookies строку с сохраненными куками
    await getCookies();
} 