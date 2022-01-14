<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" id="main-style" type="text/css" href="assets/bulma.css">
  <link rel="stylesheet" type="text/css" href="assets/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/custom.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title><?php echo $pageTitle, " - CRC Robotics 2022"; ?></title>
</head>
<body>
  <?php // echo $_SERVER['REQUEST_URI']; ?>
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand bounceIn">
    <a class="navbar-item" href="home">
      <img src="assets/logo.png">
    </a>

    <a role="button" class="navbar-burger" id='navbar-toggle' aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbar-menu" class="navbar-menu">
    <div class="navbar-start">
      <a href="home" class="navbar-item <?php if ($active == 0) { echo "active"; } ?>">
        Home
      </a>
      <a href="about" class="navbar-item <?php if ($active == 1) { echo "active"; } ?>">
        About
      </a>
      <a href="crc" class="navbar-item" <?php if ($active == 2) { echo "active"; } ?>>
        The CRC
      </a>
      <a href="robot" class="navbar-item <?php if ($active == 3) { echo "active"; } ?>">
        Our Robot
      </a>
      <a href="game" class="navbar-item" <?php if ($active == 4) { echo "active"; } ?>>
        The game
      </a>
      <div id="dropdownBox" class="navbar-item has-dropdown <?php if ($active == 5) { echo "active"; } ?>" data-target="0">
        <a class="navbar-link">
          Team
        </a>

        <div class="navbar-dropdown">
          <a href="team#robot" class="navbar-item checkHash">
            Robot team
          </a>
          <a href="team#kiosk" class="navbar-item checkHash">
            Kiosk Team
          </a>
          <a href="team#web" class="navbar-item checkHash">
            Webjournalism team
          </a>
          <a href="team#video" class="navbar-item checkHash">
            Video team
          </a>
          <hr class="navbar-divider">
          <a href="team#mentor" class="navbar-item checkHash">
            Mentors & mentions
          </a>
        </div>
      </div>
      <a href="media" class="navbar-item <?php if ($active == 6) { echo "active"; } ?>">
        Media
      </a>
    </div>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a href="<?php echo 'fr/', $pageFr; ?>" class="button is-light">
            Fran&ccedil;ais
          </a>
          <!--
          <a id="darkMode" class="button is-dark">
            <i class="far fa-moon"></i>
          </a>
          -->
        </div>
      </div>
    </div>
    </div>
  </nav>
