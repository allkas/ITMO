
function getForm() {
    const result = {};
    let polInputs = document.getElementsByName('pol');
    console.log(polInputs[0]); 
    polInputs.forEach((item) => {
        if (item.checked === true) {
            result[item.value] = {status: 'checked'};
        } else {
            result[item.value] = {status: 'false'};
        }
    });

    // for (label of labels) {
    //     console.log(label)
    // }
    // console.log(labels)
    // либо задание некоректно либо я чего то непонимаю 
    // нельзя ни пройти по массиву нод циклом, ни просто взять по индексу. 
    // пишет что undefined соотвественно не читает innerText
    return result;
}
getForm()