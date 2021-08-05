<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" id="main-style" type="text/css" href="assets/bulma.css">
  <link rel="stylesheet" type="text/css" href="assets/animate.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body onload="checkCookie('darkMode')">
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand bounceIn">
    <a class="navbar-item" href="">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" id='navbar-toggle' aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbar-menu" class="navbar-menu">
    <div class="navbar-start">
      <a href="index" class="navbar-item">
        Home
      </a>
      <a href="about" class="navbar-item">
        About
      </a>
      <a href="about" class="navbar-item">
        The CRC
      </a>
      <a href="about" class="navbar-item">
        Robot
      </a>
      <a href="about" class="navbar-item">
        The game
      </a>
      <div class="navbar-item has-dropdown" data-target="0">
        <a class="navbar-link">
          Team
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            Robot team
          </a>
          <a class="navbar-item">
            Kiosk Team
          </a>
          <a class="navbar-item">
            Webjournalism team
          </a>
          <a class="navbar-item">
            Video team
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Mentors & mentions
          </a>
        </div>
      </div>
      <a href="about" class="navbar-item">
        Media
      </a>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href="<?php echo 'fr/', $pageFr; ?>" class="button is-light">
            Fran&ccedil;ais
          </a>
          <a id="darkMode" class="button is-dark">
            <i class="far fa-moon"></i>
          </a>
        </div>
      </div>
    </div>
    </div>
  </nav>
