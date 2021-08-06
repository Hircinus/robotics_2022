var navbarToggle = document.getElementById('navbar-toggle');
var navbarMenu = document.getElementById('navbar-menu');
var navbarDropdownToggle = document.getElementsByClassName('has-dropdown');
// convert previous HTMLCollection to array
var navbarToggles = Array.from(navbarDropdownToggle);
var navbarDropdowns = document.getElementsByClassName('navbar-dropdown');
var navbarLinks = document.getElementsByClassName('navbar-link');
// For hamburger menu button on smaller screens (width < 1024px)
navbarToggle.addEventListener('click', function() {
  navbarToggle.classList.toggle("is-active");
  navbarMenu.classList.toggle("is-active");
});
// For dropdown menus within the navbar, any screen size
navbarToggles.forEach(el => {
  el.addEventListener('click', () => {
    const target = parseInt(el.dataset.target);
    for (i=0; i<navbarLinks.length; i++) {
      if (i == target) {
        continue;
      }
      if (navbarLinks[i].classList.contains('open') && navbarDropdowns[i].classList.contains('show')) {
        navbarLinks[i].classList.remove('open');
        navbarDropdowns[i].classList.remove("show");
      }
    }
    navbarLinks[target].classList.toggle('open');
    navbarDropdowns[target].classList.toggle("show");
  })
});
// Cookie functions
function getCookie(cname) {
  var cookies = document.cookie;
  indCookies = cookies.split(";");
  for(i=0;i<indCookies.length;i++) {
    parts = indCookies[i].split("=");
    name = parts[0];
    if(cname==name) {
        cvalue = parts[1];
      return cvalue;
      break;
    }
    else {
      continue;
    }
  }
  return false;
}

// Dark mode handling - DEPRECATED
/*
var darkModeBtn = document.getElementById('darkMode');
var mainStyle = document.getElementById('main-style');
darkModeBtn.addEventListener('click', function() {
  if (!getCookie('darkMode') || getCookie('darkMode') == 0) {
    document.cookie = "darkMode=1";
    mainStyle.href = "assets/bulma-dark.css";
  }
  else {
    document.cookie = "darkMode=0";
    mainStyle.href = "assets/bulma.css";
  }
});
// check cookie onload()
function checkCookie(cname) {
  if (getCookie('darkMode') == 1) {
    mainStyle.href = "assets/bulma-dark.css";
  }
  else {}
}
*/
