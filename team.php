<?php
$pageFr = 'equipe';
$pageTitle = 'Team';
$active = 5;
require 'layouts/header.php'; ?>

<section class="hero is-link has-text-left">
  <div class="hero-body">
    <div class="">
      <p class="title">
        Our team
      </p>
      <p class="subtitle">
        Another subtitle?
      </p>
    </div>
  </div>
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="">
            <a class="tab-btn" data-target="0">Robot</a>
          </li>
          <li>
            <a class="tab-btn" data-target="1">Kiosk</a>
          </li>
          <li>
            <a class="tab-btn" data-target="2">Web</a>
          </li>
          <li>
            <a class="tab-btn" data-target="3">Video</a>
          </li>
          <li>
            <a class="tab-btn" data-target="4">Mentors</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>

<main class="content-area fadeInUp">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Robot</h1>
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
        <h1>Kiosk</h1>
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
        <h1>Web</h1>
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
        <h1>Video</h1>
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
        <h1>Mentors</h1>
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
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
/*
$sql = "INSERT INTO MyGuests(firstname,lastname,email)
VALUES('Duncan', 'B-H', 'j.alfahad@gmail.com');";

$sql = "SELECT email FROM MyGuests";
if ($result = $conn -> query($sql)) {
  while ($row = $result -> fetch_row()) {
    echo $row[0], ", ";
  }
  $result -> free_result();
}
/*

if ($conn->query($sql) === TRUE) {
 echo "Table MyGuests created successfully";
} else {
 echo "Error creating table: " . $conn->error;
}

$conn->close();*/
require 'layouts/footer.php';
?>
