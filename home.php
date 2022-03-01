<?php
$pageFr = 'accueil';
$pageTitle = 'Home';
$active = 0;
require 'layouts/header.php'; ?>
<style>
  .hero.has-carousel {
    height: 450px!important;
  }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
<!--
<section class="hero is-info is-medium has-text-left">
  <div class="hero-body">
    <div class="content">
      <h1 class="title">
        CRC Robotics 2022
      </h1>
    </div>
  </div>
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="is-active">
            <a class="tab-btn" data-target="0">Our goals</a>
          </li>
          <li>
            <a class="tab-btn" data-target="1">What we accomplished</a>
          </li>
          <li>
            <a class="tab-btn" data-target="2">Our future</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>
-->

<!-- Start Hero Carousel -->
<section class="hero is-medium has-carousel">
			<div id="carousel-demo" data-loop="true" height="1000px" class="hero-carousel">
				<div class="item-1">
					<!-- Slide Content -->
          <img class="cover-img" width="auto" height="auto" alt="an image" src="assets/champlain.jpeg">
				</div>
				<div class="item-2">
					<!-- Slide Content -->
          <img class="cover-img" width="auto" height="auto" alt="an image" src="assets/robot_programming_1.jpg">
				</div>
				<div class="item-3">
					<!-- Slide Content -->
          <img class="cover-img" width="auto" height="auto" alt="an image" src="assets/robot_planning_1.jpg">
				</div>
			</div>
			<div class="hero-head"></div>
			<div class="hero-body"></div>
			<div class="hero-foot"></div>
		</section>
		<!-- End Hero Carousel -->

		<script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
		<script>
			bulmaCarousel.attach('#carousel-demo', {
				slidesToScroll: 1,
				slidesToShow: 1
			});
		</script>

<main class="content-area fadeInUp show">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Our goals</h1>
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
        <h1>What we accomplished</h1>
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
        <h1>Our future</h1>
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
require 'layouts/footer.php';
?>
