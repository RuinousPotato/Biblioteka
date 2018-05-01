function showElem(elem) {
    var x = document.getElementById(elem);
    if (x.style.visibility === "visible") {
        x.style.visibility = "hidden";
    } else {
        x.style.visibility = "visible";
    }
}

function validateForm(){
  let searchTitle = document.forms["searchForm"]["search_title"].value;
  let searchAuthor = document.forms["searchForm"]["search_author"].value;
  if (searchTitle=="" && searchAuthor==""){
    alert("Podaj tytuł lub autora");
    return false;
  } else {
    return true;
  }
}
