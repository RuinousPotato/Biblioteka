function showElem(elem) {
    var x = document.getElementById(elem);
    if (x.style.visibility === "visible") {
        x.style.visibility = "hidden";
    } else {
        x.style.visibility = "visible";
    }
}

/*
function showElefant() {
    var x = document.getElementById("elefant");
    if (x.style.visibility === "hidden") {
        x.style.visibility = "visible";
    } else {
        x.style.visibility = "hidden";
    }
}

function showElephant() {
    var x = document.getElementById("elephant");
    if (x.style.visibility === "hidden") {
        x.style.visibility = "visible";
    } else {
        x.style.visibility = "hidden";
    }
}
*/
