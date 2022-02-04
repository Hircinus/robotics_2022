<?php
$pageEn = 'home';
$pageTitle = 'Accueil';
$active = 0;
require '../layouts/header.php'; ?>

<section class="hero is-info is-medium has-text-left">
  <div class="hero-body">
    <div class="content">
      <h1 class="title">
        CRC Robotique 2022
      </h1>
    </div>
  </div>
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="is-active">
            <a class="tab-btn" data-target="0">What we're all about</a>
          </li>
          <li>
            <a class="tab-btn" data-target="1">Sponsors</a>
          </li>
          <li>
            <a class="tab-btn" data-target="2">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>

<main class="content-area fadeInUp show">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>What we're all about</h1>
        <hr>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-three-quarters">
      <div class="content">
        <p>At Champlain Robotics, we're more than just an engineering team. In addition to design and building a robot, we and other contestants are judged on:</p>
        <ul>
          <li>Building a kiosk.</li>
          <li>Solving a programming competition.</li>
          <li>Designing and developping a website.</li>
          <li>Producing two videos: one to introduce our team and another to provide a tutorial.</li>
      </div>
    </div>
    <div class="column is-one-quarter">
      <div class="content">
        <img width="auto" height="auto" alt="an image" src="http://www.crhsrobotics.com/2019/assets/team_2014.jpg">
      </div>
    </div>
  </div>
</main>
<main class="content-area fadeInUp">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Sponsors</h1>
        <hr>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-three-quarters">
      <div class="content">
        <h3>
          Our past team (not actually though).
        </h3>
        <p>Hello there</p>
      </div>
    </div>
    <div class="column is-one-quarter">
      <div class="content">
        <img width="auto" height="auto" alt="an image" src="http://www.crhsrobotics.com/2019/assets/team_2014.jpg">
      </div>
    </div>
  </div>
</main>
<main class="content-area fadeInUp">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Contact</h1>
        <hr>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-three-quarters">
      <div class="content">
        <h3>
          Our past team (not actually though).
        </h3>
        <p>Hello there</p>
      </div>
    </div>
    <div class="column is-one-quarter">
      <div class="content">
        <img width="auto" height="auto" alt="an image" src="http://www.crhsrobotics.com/2019/assets/team_2014.jpg">
      </div>
    </div>
  </div>
</main>


<?php
require '../layouts/footer.php';
?>
