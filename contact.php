<?php
session_name("parkour");
session_start();

$title = " - Contact Us";
require_once "core/header.php";
?>

<body style="overflow: auto;">
  <header>
    <div class="nav">
      <h1 id="title">Jump Outdoor</h1>
      <div class="nav-sub">
        <a href="index.php">Home</a>
        <a href="debuter.php">Figure</a>
        <a href="login.php">Panel Admin</a>
      </div>
    </div>
  </header>
  <div class="contact-section">
    <h1>Contactez Nous</h1>
    <div class="borderanim">
      <div class="border"></div>
      <p>Bonjour / Bonsoir<br>Cette page sert a envoyer les coordonnées d'un spot pour qu'il puisse être ajouter au site </p>
      <div class="border"></div>
    </div>
    <form class="contact-form" action="" method="post">
      <input type="email" class="contact-form-text" placeholder="Ton email" name="email">
      <textarea class="contact-form-text" placeholder="Ton message" name="message"></textarea>
      <button class="contact-form-btn">Envoyer</button>
    </form>
  </div>
</body>
<?php
$title = " - Accueil";
require_once "core/footer.php";
?>