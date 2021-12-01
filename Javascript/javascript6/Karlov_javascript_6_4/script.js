const setStyle = (fontColor, fontSize) => {
    let nodes = document.getElementsByClassName('listNumbers')[0].childNodes;
    console.log(nodes);

    for (let item of nodes) {
        if (item.nodeType === "1") {
            item.style.color = fontColor;
            item.style.fontSize = fontSize;
        }
    }
}

setStyle('blue', '42px')