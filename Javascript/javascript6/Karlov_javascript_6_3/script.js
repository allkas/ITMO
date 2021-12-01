function getForm() {
    let result = {};

    result['name'] = document.getElementById('name').value;
    result['surname'] = document.getElementById('surname').value;
    result['age'] = document.getElementById('age').value;

    let polInputs = document.getElementsByName('sex');
    let itemSex = {};
    let index = 0;

    for (let item of polInputs) {
        if (item.checked === true) {
            itemSex[index] = {};
            itemSex[index]['value'] = item.value;
            itemSex[index++]['status'] = 'checked';

        } else {
            itemSex[index] = {};
            itemSex[index]['value'] = item.value;
            itemSex[index++]['status'] = 'false';
        }
    }
    result['sex'] = itemSex;
    return result;
};


// то же самое что и в предыдущем примере. не отрабатывает как надо
console.log(getForm())