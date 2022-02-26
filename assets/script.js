let navbarToggle = document.getElementById('navbar-toggle');
let navbarMenu = document.getElementById('navbar-menu');
let navbarDropdownToggle = document.getElementsByClassName('has-dropdown');
// convert previous HTMLCollection to array
let navbarToggles = Array.from(navbarDropdownToggle);
let navbarDropdowns = document.getElementsByClassName('navbar-dropdown');
let navbarLinks = document.getElementsByClassName('navbar-link');
let cardContents = document.getElementsByClassName("card-content");
// For hamburger menu button on smaller screens (width < 1024px)
navbarToggle.addEventListener('click', function() {
  navbarToggle.classList.toggle("is-active");
  navbarMenu.classList.toggle("is-active");
});
// For dropdown menus within the navbar, any screen size
navbarToggles.forEach(el => {
  el.addEventListener('click', () => {
    for (i=0; i<navbarDropdowns.length; i++) {
      if (navbarToggles[i] == el) {
        navbarLinks[i].classList.toggle('open');
        navbarDropdowns[i].classList.toggle("show");
      }
      else {
        navbarLinks[i].classList.remove('open');
        navbarDropdowns[i].classList.remove("show");
      }
    }
  })
});
window.addEventListener('click', function(e){
  let dropdownBoxes = document.getElementsByClassName("has-dropdown");
  var counter = 0;
  for(i=0;i<dropdownBoxes.length;i++) {
    if (dropdownBoxes[i].contains(e.target)){
      // Clicked in box
      counter++;
    }
  }
  if (counter==0) {
    for (i=0; i<navbarLinks.length; i++) {
      navbarLinks[i].classList.remove('open');
      navbarDropdowns[i].classList.remove("show");
    }
  }
});
// For tabs in main pages
var tabBtns = document.getElementsByClassName('tab-btn');
// convert previous HTMLCollection to array
var tabBtns = Array.from(tabBtns);
var contentAreas = document.getElementsByClassName('content-area');
checkWindowHash();
tabBtns.forEach(el => {
  el.addEventListener('click', () => {
    const x = parseInt(el.dataset.target);
    parseTabs(x);
  })
});
function parseTabs(target) {
  for (i=0; i<tabBtns.length; i++) {
    if (i == target) {
      continue;
    }
    if (tabBtns[i].parentElement.classList.contains('is-active') && contentAreas[i].classList.contains('show')) {
      tabBtns[i].parentElement.classList.remove('is-active');
      contentAreas[i].classList.remove("show");
    }
  }
  tabBtns[target].parentElement.classList.add('is-active');
  contentAreas[target].classList.add("show");
}
window.addEventListener('hashchange', function() {
  checkWindowHash();
}, false);
function checkWindowHash() {
  let dropdownItems = document.getElementsByClassName("checkHash");
  let clearDropdownActive = function() {
    for(i = 0; i < dropdownItems.length; i++) {
      dropdownItems[i].classList.remove("active");
    }
  };
  if(window.location.hash) {
    // Fragment exists
    if(window.location.hash == "#robot" || window.location.hash == "#") {
      parseTabs(0);
      clearDropdownActive();
      dropdownItems[0].classList.add("active");
    }
    else if(window.location.hash == "#programming") {
      parseTabs(1);
      clearDropdownActive();
      dropdownItems[1].classList.add("active");
    }
    else if(window.location.hash == "#kiosk") {
      parseTabs(2);
      clearDropdownActive();
      dropdownItems[2].classList.add("active");
    }
    else if(window.location.hash == "#web") {
      parseTabs(3);
      clearDropdownActive();
      dropdownItems[3].classList.add("active");
    }
    else if(window.location.hash == "#video") {
      parseTabs(4);
      clearDropdownActive();
      dropdownItems[4].classList.add("active");
    }
    else if(window.location.hash == "#mentor") {
      parseTabs(5);
      clearDropdownActive();
      dropdownItems[5].classList.add("active");
    }
  } else {
    // Fragment doesn't exist
  }
}
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

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("backTop").classList.add("show");
  } else {
    document.getElementById("backTop").classList.remove("show");
  }
}
