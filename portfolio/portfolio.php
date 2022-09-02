<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link media="screen" rel="stylesheet" href="css/bootstrap-grid.css">
  <link media="screen" rel="stylesheet" href="css/style.css">
  <link href="css/hamburgers.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container">
      <div class="nav-bar">
        <h2>Pascal Lévesque</h2>
        <?php 
if(isset($_GET['language']))
  $language = $_GET['language'];
else
  $language = "en";
 ?>

        <?php 
 if ($language == "fr") {
  ?>
        <nav>
          <ul>
            <li><a class="nav-link" href="#about">À propos</a></li>
            <li><a class="nav-link" href="#speciality">Compétences</a></li>
            <li><a class="nav-link" href="#projects">Mes projets</a></li>
            <li><a class="nav-link" href="#contact">Me joindre</a></li>
            <li><a class="nav-link" href="portfolio.php?language=en">English</a></li>
          </ul>
        </nav>


        <?php } else { ?>

        <nav>
          <ul>
            <li><a class="nav-link" href="#about">About</a></li>
            <!--
 -->
            <li><a class="nav-link" href="#speciality">Skills</a></li>
            <!--
 -->
            <li><a class="nav-link" href="#projects">My work</a></li>
            <li><a class="nav-link" href="#contact">Contact</a></li>
            <li><a class="nav-link" href="portfolio.php?language=fr">Français</a></li>
          </ul>
        </nav>
        <?php } 
?>
        <div id="hamburger" class="hamburger hamburger--elastic" onclick="myFunction()">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
          <!--Source: https://jonsuh.com/hamburgers/-->
        </div>
      </div>
      <div class="mobile-container">
        <div class="topnav">
          <div id="myLinks">
            <?php 
 if ($language == "fr") {
  ?>
            <ul>
              <li><a class="nav-link" href="#about">À propos</a></li>
              <li><a class="nav-link" href="#speciality">Compétences</a></li>
              <li><a class="nav-link" href="#projects">Mes réalisations</a></li>
              <li><a class="nav-link" href="#contact">Me joindre</a></li>
              <li><a class="nav-link" href="portfolio.php?language=en">English</a></li>
            </ul>
            <?php } else { ?>
            <ul>
              <li><a class="nav-link" href="#about">About</a></li>
              <!--
 -->
              <li><a class="nav-link" href="#speciality">Skills</a></li>
              <!--
 -->
              <li><a class="nav-link" href="#projects">My work</a></li>
              <li><a class="nav-link" href="#contact">Contact</a></li>
              <li><a class="nav-link" href="portfolio.php?language=fr">Français</a></li>
            </ul>
            <?php } 
?>
          </div>
        </div>
      </div>
      <div class="row" id="about">
        <div class="col-xl-4 col-lg-5">
          <img src="css/img/moi.jpg" alt="Pascal Lévesque">
        </div>
        <div class="col-xl-8 col-lg-7">
          <?php 
 if ($language == "fr") {
  ?>
          <h1>Auteur et développeur Web</h1>

          <p>Bonjour, mon nom est Pascal Lévesque et je suis développeur web en plus de faire de la
            rédaction. J’ai été formé à titre de développeur « Front-End » tout en ayant des notions de développement «
            Back-End », ce qui fait que je suis capable d’effectuer des tâches multiples et variées.
            En plus de maitriser le HTML et le CSS, j’ai une bonne connaissance de JavaScript, MYSQL et PHP ainsi que
            des systèmes de gestion de contenu, notamment WordPress.
          </p>
          <a class="contact" href="#contact">Me joindre<i class="fas fa-arrow-circle-right"></i></a><a
            href="https://www.linkedin.com/in/pascal-l%C3%A9vesque-9745994a/" class="linkdin">Linkdin</a>
          <?php } else { ?>

          <h1>Author and web developer</h1>
          <p>Hello, my name is Pascal Lévesque and I am web developer and writer. I am doing Front-End web development
            but I have also Back-End skills, so I can do multiple and varied tasks.
            In addition to mastering HTML and CSS, I have a good knowledge of JavaScript, MYSQL and PHP as well as
            content management systems, including WordPress.
          </p>
          <a class="contact" href="#contact">Contact me<i class="fas fa-arrow-circle-right"></i></a><a
            href="https://www.linkedin.com/in/pascal-l%C3%A9vesque-9745994a/" class="linkdin">Linkdin</a>

          <?php } 
?>

        </div>
      </div>
      </div>
  </header>

  <div id="speciality">
    <div class="container">
      <?php 
 if ($language == "fr") {
  ?>
      <h1>Compétences</h1>
      <?php } else { ?>
      <h1>Skills</h1>
      <?php } 
?>

      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 center">
          <img src="css/img/coding.png" alt="Front-End">
          <?php 
 if ($language == "fr") {
  ?>
          <h2>Développement Front-End</h2>
          <p>Je peux monter visuellement un site à partir d'un design voulu, me servant de l'étendue de ce que
            peuvent nous offrir le HTML et le CSS.</p>
          <?php } else { ?>
          <h2>Front-End development</h2>
          <p>I can create a website from a desired design, using the breadth of what HTML and CSS can offer us.</p>
          <?php } 
?>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 center">
          <img src="css/img/data.png" alt="Back-End">
          <?php 
 if ($language == "fr") {
  ?>
          <h2>Développement Back-End</h2>
          <p>Je suis habilité à faire du développement Back-End. Cela passe par l'utilisation de bases de données pour
            des
            sites
            à usage notamment commerciaux ou pour gérer la distribution de fichiers ou encore créer des animations
            JavaScript. </p>
          <?php } else { ?>
          <h2>Back-End development</h2>
          <p>I have the skills to program web functionalities. This involves the use of databases for sites
            especially for commercial uses or to manage the distribution of files or to create JavaScript animations.
          </p>
          <?php } 
?>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 center">
          <img src="css/img/document.png" alt="rédaction">
          <?php 
 if ($language == "fr") {
  ?>
          <h2>Rédaction</h2>
          <p>J'ai étudié et travaillé à titre de journaliste et de pigiste en rédaction de publireportages. Je suis
            aussi en mesure
            de faire de la traduction anglais/français et vice versa. </p>
          <?php } else { ?>
          <h2>Writing</h2>
          <p>
            I have a background as a journalist and freelance writer in advertorials. I am also able to translate from
            English to French and vice versa. </p>
          <?php } 
?>
        </div>
      </div>
    </div>
  </div>

  <div id="technologies">
    <div class="container">
      <?php 
 if ($language == "fr") {
  ?>
      <h1>Technologies</h1>
      <?php } else { ?>
      <h1>Tools</h1>
      <?php } 
?>

      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/html.png"alt="HTML">
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/css.png" alt="CSS">
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/laravel.png" alt="Laravel" >
          <h3>Laravel</h3>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/js.png" alt="JavaScript">
          <h3>JavaScript</h3>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/jQuery.png" alt="JQuery">
          <h3>JQuery</h3>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/php.png" alt="JQuery">
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/sass.png" alt="SASS">
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/photoshop.png" alt="Photoshop">
          <h3>Photoshop</h3>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/illustrator.png" alt="Illustrator">
          <h3>Illustrator</h3>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/bootstrap.png" alt="Bootstrap">
          <h3>Bootstrap</h3>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-4 techno">
          <img src="css/img/canvasJS.png" alt="Canvas JS"> 
          <h3>CanvasJS</h3>
        </div>
        <div class="col-xl-2 col-lg-2 col-3 techno">
          <img src="css/img/mysql.png" alt="MYSQL">
        </div>
      </div>
    </div>
  </div>

  <div id="projects">
    <div class="container">
      <?php 
 if ($language == "fr") {
  ?>
      <h1>Mes réalisations</h1>
      <?php } else { ?>
      <h1>My work</h1>
      <?php } 
?>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6">
          <a class="overlay" href="https://unsearched-game.000webhostapp.com/TP4/tp4.html"><img
              src="css/img/capnatstat.jpg" alt="Tendance Électorale Capitale
              Nationale"></a>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <h3><a href="https://unsearched-game.000webhostapp.com/TP4/tp4.html">Tendance Électorale Capitale
              Nationale</a></h3>
          <?php 
 if ($language == "fr") {
  ?>
          <p>Il s'agit d'un site animé présentant les résultats électoraux provinciaux de la grande région de Québec
            depuis 2008.
            Le site est animé grâce à diverses technologies comme JavaScript, JQuery ou les keyframes de CSS. La carte a
            été produite grâce à Illustrator et à partir d'un fichier SVG.</p>
          <?php } else { ?>
          <p>It is an animated web page presenting the provincial electoral results of the Quebec regional area since
            2008. The site is animated thanks to various technologies like JavaScript, JQuery or the CSS keyframes. The
            map was designed using Illustrator and an SVG file.</p>
          <?php } 
?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <a class="overlay" href="http://modulocondos.epizy.com/accueil.php"><img src="css/img/modulosCondos.jpg" alt="Modulos Condos"></a>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <h3><a href="http://modulocondos.epizy.com/accueil.php">Modulo Condos</a></h3>
          <?php 
 if ($language == "fr") {
  ?>
          <p>Créé dans le cadre d'un projet de fin de semestre, c'est le site internet d'une agence immobilière qui
            propose des condos sur mesure. Le site web comprend notamment un calculateur de prix programmé en JavaScript
            ainsi qu'un carrousel d'images.</p>
          <?php } else { ?>
          <p>
            This is the website of a real estate agency that offers custom condos created as part of a project at the
            end of the semester. The website includes a custom price calculator programmed in JavaScript and an image
            slideshow.</p>
          <?php } 
?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <a class="overlay" href="https://unsearched-game.000webhostapp.com/metalgueulard/metalgueulard.html"><img
              src="css/img/metalGueulard.jpg" alt="Métal Gueulard"></a>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <h3><a href="https://unsearched-game.000webhostapp.com/metalgueulard/metalgueulard.html">Métal Gueulard</a>
          </h3>
          <?php 
 if ($language == "fr") {
  ?>
          <p>Site démo faisant la promotion d'un festival et d'une compilation de musique avec une vidéo publicitaire
            que j'ai montée. Il a été conçu presque exclusivement avec Bootstrap. </p>
          <?php } else { ?>
          <p>

            Demo website promoting a festival and a music compilation with an advertising video that I edited. It was
            designed almost exclusively with Bootstrap. </p>
          <?php } 
?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <a class="overlay" href="https://plevesque.devwebgarneau.com/burgershop/" alt="Burger Shop"><img
              src="css/img/bugerShop.jpg"></a>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <h3><a href="https://plevesque.devwebgarneau.com/burgershop/">Burger Shop</a></h3>
          <?php 
 if ($language == "fr") {
  ?>
          <p>Site vitrine d'un casse-croûte fictif, il a été effectué avec diverses composantes Javascript et CSS. Il
            explore les possibilités d'un site "one-pager" et "responsive". </p>
          <?php } else { ?>
          <p>

            Showcase website of a fictional snack, it was done with various Javascript and CSS components. This demo
            website explores the possibilities of a "responsive" "one pager". </p>
          <?php } 
?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <a class="overlay" href="https://amecq.ca/2018/02/09/restauration-rime-reinsertion/ "><img
              src="css/img/prix_amecq.png" alt="Prix AMECQ"></a>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <?php 
 if ($language == "fr") {
  ?>
          <h3><a href="https://amecq.ca/2018/02/09/restauration-rime-reinsertion/ ">Troisième prix catégorie reportage
              de l'Association des médias communautaires du Québec 2019</a></h3>
          <?php } else { ?>
          <h3><a href="https://amecq.ca/2018/02/09/restauration-rime-reinsertion/ ">Third prize of the Community Media
              Association of Quebec, category Report 2019 </a></h3>
          <?php } 
?>
          <?php 
 if ($language == "fr") {
  ?>
          <p>J'ai gagné ce prix pour un article sur un organisme venant en oeuvre aux jeunes en difficulté en leur
            enseignant les métiers de la restauration. J'ai aussi pris les photos de cet article. </p>
          <?php } else { ?>
          <p>
            I won this award for an article about an organization that helps troubled young people by teaching them the
            trades of the catering industry. I also took the pictures of this article.</p>
          <?php } 
?>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div id="contact">
    <div class="container">
      <h1>Me joindre</h1>
      <?php

  if (isset($_REQUEST['email']))  {
  
  $admin_email = "pasc.levesque@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];
  

  mail($admin_email, "$subject", $message, "From:" . $email);

  if ($language == "fr") {

  echo "<h2 class='WhiteCenter'>Merci de m'avoir contacté.</h2>";
  }
  else {

    echo "<h2 class='WhiteCenter'>Thanks for contacting me</h2>";
    }
  }
  
  else  {
?>

      <form aria-label="Me joindre" method="post" id="monForm">
        <ul class="flex-outer">
          <li>
            <?php 
 if ($language == "fr") {
  ?>
            <label for="email">Courriel</label>
            <?php } else { ?>
            <label for="email">Email</label>
            <?php } 
?>
            <input type="email" name="email" id="courriel" <?php 
 if ($language == "fr") {
  ?> placeholder="obligatoire" <?php } else { ?> placeholder="required" <?php } 
  ?> required>
          </li>
          <li>
            <?php 
 if ($language == "fr") {
  ?>
            <label for="subject">Subject</label>
            <?php } else { ?>
            <label for="subject">Subject</label>
            <?php } 
?>
            <input type="text" name="subject" id="subject" <?php 
 if ($language == "fr") {
  ?> placeholder="Entrez le sujet du message" <?php } else { ?> placeholder="Enter the subject of your message" <?php } 
  ?> required>
          </li>
          <li>
            <label for="message">Message</label>
            <textarea rows="6" name="comment" id="texte" <?php 
 if ($language == "fr") {
  ?> placeholder="Entrez votre message" <?php } else { ?> placeholder="Enter your message" <?php } 
  ?> required></textarea>
          </li>
          <li>
            <button type="submit" aria-label="Envoyer le formulaire">Soumettre <i
                class="fas fa-arrow-circle-right"></i></button>
          </li>
        </ul>
      </form>

      <?php
  }
?>

    </div>
  </div>

  <footer>
    <?php 
 if ($language == "fr") {
  ?>
    <p>Pascal Lévesque, tous droits réservés</p>
    <?php } else { ?>
    <p>Pascal Lévesque, all right reserved </p>
    <?php } 
?>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/js.js"></script>
  <script src="js/js2.js"></script>



</body>

</html>