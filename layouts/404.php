<?php
$pageFr = 'Erreur 404';
$pageTitle = 'Error 404';
$active = 69;
include 'header.php'; ?>

<main class="content-area fadeInUp show">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Whoops!</h1>
        <hr>
        <h2>Seems like the link you entered or followed doesn't exist.</h2>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-three-quarters">
      <div class="content">
        <h3>
          Check out some links that <em>do</em> work ;)
        </h3>
        <a href="#">Random Link</a>
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
include 'footer.php';
?>
