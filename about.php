<?php
$pageFr = 'a_propos';
$pageTitle = 'About';
$active = 1;
require 'layouts/header.php'; ?>

<section class="hero is-link has-text-left">
  <div class="hero-body">
    <div class="">
      <p class="title">
        About Us
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
            <a class="tab-btn" data-target="0">Our school</a>
          </li>
          <li>
            <a class="tab-btn" data-target="1">Our robot</a>
          </li>
          <li>
            <a class="tab-btn" data-target="2">Our team</a>
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
        <p>
        Champlain College Saint-Lambert is a public English language cégep located on the South 
        Shore of Montreal within a short 10-minute walk from the Longueuil-Université de Sherbrooke 
        Métro station. We offer both two-year pre-university and three-year career programs.
        <br>
        There are approximately 3,000 students attending Champlain College Saint-Lambert. Our 
        students come from diverse cultures and speak a variety of languages, giving the college a 
        friendly and multicultural environment where you will meet new people and live new experiences.
        <br>
        At Champlain College Saint-Lambert our size is our strength. Our small classes and labs mean 
        that our teachers can take the time to get to know you and give you personal attention and 
        feedback. Also, students have easy access to a variety of academic support services, such as 
        computers, counseling, academic advising and library services to name a few.
        <br>
        Discover what Champlain College Saint-Lambert has to offer you and what we are doing to 
        ensure your success!
        <br>
        Champlain College operates under a set of unchanging core ideals that form the college’s 
        vision and are expressed in the College’s mission statement. Our values form the foundation 
        of the way we, as a learning institution, function. Our vision, our mission, and our 
        statement of purpose help to articulate how those values guide our institution.
      </p>
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
        <h1>Our robot</h1>
        <hr>
      </div>
    </div>
  </div>
  <div class="columns">
    <div class="column is-two-thirds">
      <div class="content">
        <h3>
          First phase
        
        <!--Première phase. -->
        
        </h3>
        <p>
        With the club coming together to brainstorm some ideas, the vision of our robot begins to take shape. 
        This year, our team struggled to get access to space and resources to begin prototyping due to the 
        COVID-19 pandemic, but after CEGEPs came back into session after the winter break we launched ourselves into it.
        
        <!--
        Première phase. Avec le club qui se réunit pour réfléchir à quelques idées, la vision de notre robot 
        commence à prendre forme. Cette année, notre équipe a eu du mal à avoir accès à l’espace et aux ressources 
        pour commencer le prototypage en raison de la pandémie de COVID-19, mais après le retour des cégeps en session 
        après la pause hivernale, nous nous sommes lancés dans ce domaine.
        -->
        </p>
      </div>
    </div>
    <div class="column is-one-third">
      <div class="content">
        <img width="auto" height="auto" alt="an image" src="assets/robot_planning_1.jpg">
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
