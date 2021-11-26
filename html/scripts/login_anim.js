function show_login_box() {
  document.getElementById("loginDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.login_button')) {
    var dropdowns = document.getElementsByClassName("login_dropdown");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}