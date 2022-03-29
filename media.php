<?php
$pageFr = 'media';
$pageTitle = 'Media';
$active = 5;
require 'layouts/header.php'; ?>

<section class="hero is-link has-text-left">
  <div class="hero-body">
    <div class="">
      <p class="title">
        Media
      </p>
      <!--
      <p class="subtitle">
        Who are we?
      </p>
-->
    </div>
  </div>
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="is-active">
            <a class="tab-btn" href="#presentation" data-target="0">Main video</a>
          </li>
          <li>
            <a class="tab-btn" href="#tutorials" data-target="1">Tutorials</a>
          </li>
          <li>
            <a class="tab-btn" href="#gallery" data-target="2">Gallery</a>
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
        <h1>Champlain College Saint-Lambert</h1>
        <h3 class="subtitle">A campus of Champlain Regional College</h3>
        <hr>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-three-quarters">
      <div class="content">
        <p>Champlain College Saint-Lambert is a public English language cégep located on the South Shore of Montreal within a short 10-minute walk from the Longueuil-Université de Sherbrooke Métro station. We offer both two-year pre-university and three-year career programs.
<br>
There are approximately 3,000 students attending Champlain College Saint-Lambert. Our students come from diverse cultures and speak a variety of languages, giving the college a friendly and multicultural environment where you will meet new people and live new experiences.
<br>
At Champlain College Saint-Lambert our size is our strength. Our small classes and labs mean that our teachers can take the time to get to know you and give you personal attention and feedback. Also, students have easy access to a variety of academic support services, such as computers, counseling, academic advising and library services to name a few.
<br>
Discover what Champlain College Saint-Lambert has to offer you and what we are doing to ensure your success!
<br>
Champlain College operates under a set of unchanging core ideals that form the college’s vision and are expressed in the College’s mission statement. Our values form the foundation of the way we, as a learning institution, function. Our vision, our mission, and our statement of purpose help to articulate how those values guide our institution. To learn more about Champlain College Saint-Lambert’s Values, Vision and Mission,</p>
      </div>
    </div>
    <div class="column is-one-quarter">
      <div class="content">
        <img width="auto" height="auto" alt="an image" src="assets/champlain.jpeg">
      </div>
    </div>
  </div>
</main>
<main class="content-area fadeInUp">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Our team</h1>
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
        <h1>Gallery</h1>
        <hr>
      </div>
    </div>
  </div>
  <div class="tile is-ancestor">
    <div class="tile is-vertical is-8">
      <div class="tile">
        <div class="tile is-parent is-vertical">
          <article class="tile is-child notification">
            <p class="subtitle">Top tile</p>
            <figure class="image is-4by3">
              <img src="assets/robot_programming_1.jpg">
            </figure>
          </article>
          <article class="tile is-child notification">
            <p class="subtitle">Bottom tile</p>
            <figure class="image is-4by3">
              <img src="assets/robot_programming_1.jpg">
            </figure>
          </article>
        </div>
        <div class="tile is-parent">
          <article class="tile is-child notification">
            <p class="subtitle">With an image</p>
            <figure class="image is-4by3">
              <img src="assets/robot_programming_1.jpg">
            </figure>
          </article>
        </div>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification">
          <p class="subtitle">Aligned with the right tile</p>
          <div class="content">
            <!-- Content -->
          </div>
        </article>
      </div>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification">
        <div class="content">
          <p class="subtitle">With even more content</p>
          <div class="content">
            <!-- Content -->
          </div>
        </div>
      </article>
    </div>
  </div>
  </div>
</main>


<?php
require 'layouts/footer.php';
?>
