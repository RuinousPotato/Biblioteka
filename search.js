function validateForm(){
  let searchTitle = document.forms["searchForm"]["search_title"].value;
  let searchAuthor = document.forms["searchForm"]["search_author"].value;
  if (searchTitle=="" && searchAuthor==""){
    alert("Podaj tytuł lub autora");
    return false;
  } else {
    //alert('Code has accepted : you can try another');
    return true;
  }
}
