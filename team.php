<?php
$pageFr = 'equipe';
$pageTitle = 'Team';
$active = 3;
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
            <a class="tab-btn" data-target="1">Programming</a>
          </li>
          <li>
            <a class="tab-btn" data-target="2">Kiosk</a>
          </li>
          <li>
            <a class="tab-btn" data-target="3">Web</a>
          </li>
          <li>
            <a class="tab-btn" data-target="4">Video</a>
          </li>
          <li>
            <a class="tab-btn" data-target="5">Mentors</a>
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
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/chris.jpg";
      $name = "Chris";
      $years = "First year";
      $content = "I'm a hard worker and a bundle of laughs!";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/aline.jpg";
      $name = "Aline";
      $years = "First year";
      $content = "Hi! My name is Aline. My nickname is Bob and some people call me Bob the builder. I've been participating in robotics competitions since sec 4 with my tiny little highschool team, SLI. I ABSOLUTELY LOVED the memories and experiences I had then so I've continued into cegep. This is my last year competing and I'm going to miss this so much. It has been rough the last two years with the pandemic and all. I think I take robotics a little too seriously. I consider it my baby. I'll fight tooth and nail for it's survival to get administrations to recognize the work the club does. Do I procrastinate on my homework too much for this club? Maybe but I still survive and have a pretty good R-score. I still had so much fun these last two years but I wish the new members I've pursuaded to join would've experience what I experienced. That's my biggest motivation to continue robotics and keep it alive, so other people can obtain this love for building things, challenging themselves, meeting new people, everything that comes with robotics and the CRC. 
      Since this is my last year doing this with the CRC, I will share the defining feature all past team mates mock me by. I have a HUGE love for duct tape. Ask anyone, it is my first suggestion to all problems. The most ubsurd use for duct tape that I've done is attaching a banebot motor to the frame using duct tape and attaching aluminum extrusion at a 45 degree angle with duct tape. All of this was done in one comp, our robot looked incredible. My last advice to all. Duct tape is your best friend. It can do anything.";
      require 'layouts/card.php';
      ?>
    </div>
  </div>
</main>
<main class="content-area fadeInUp">
  <div class="columns">
    <div class="column is-full">
      <div class="content">
        <h1>Programming</h1>
        <hr>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/anon.png";
      $name = "Elie";
      $years = "First year";
      $content = "I'm a computer science and maths student with some experience in programming. I've been part of my secondary school's robotics team for two years and I liked it, so I decided to join Champlain's team.
      ";
      require 'layouts/card.php';
      ?>
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
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/arisha.png";
      $name = "Ari";
      $years = "First year";
      $content = "Hey lovelies! My name is Arisha Ali and I'm a part of the robotics team. I'm a soon to be executive member looking to take over the new role of communications officer. While part of my job will be to handle advertisement and keeping our members up to date on announcements and decisions, communication is very much a two-way street so feel free to reach out to me for anything! If I can't offer a solution on the spot, I'll certainly be able to get the other execs to step in. 
      ";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/cece.jpeg";
      $name = "Cece";
      $years = "First year";
      $content = ":$";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/anon.png";
      $name = "Sami";
      $years = "First year";
      $content = "I am a hardworking and artistic person. I love to make small things that add up to a beautiful and interesting picture.";
      require 'layouts/card.php';
      ?>
    </div>
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/anon.png";
      $name = "Breanna";
      $years = "First year";
      $content = "...";
      require 'layouts/card.php';
      ?>
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
    <div class="column is-one-quarter">
      <?php
      $imgPath = "assets/member/jess.jpg";
      $name = "Jess Al Fahad";
      $years = "Second year";
      $content = "&amp;#115; &amp;#117; &amp;#115;";
      require 'layouts/card.php';
      ?>
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
