let closeDropdown = function() {

}
function myFunction(num) {
  closeDropdown();
  let someClick = document.getElementById("myDropdown" + num);
  if(someClick) {
    someClick.classList.toggle("show");
    closeDropdown = function() {
      someClick.classList.remove("show");
    }
  } else {
    closeDropdown = function() {      
    }
  }
}

// Closes the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementsByClassName("dropdown-content");
  var i;
  for (i = 0; i < myDropdown.length; i++) {
    var openDropdown = myDropdown[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
}
}