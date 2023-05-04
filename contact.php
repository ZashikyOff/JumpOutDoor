<?php
session_name("parkour");
session_start();

$title = " - Contact Us";
require_once "core/header.php";
?>

<body style="overflow: auto;" class="contact">
<img src="img/bgtest.jpg" alt="" class="backgroundcontact">
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
  <?php

if(isset($_POST["auteur"]) && isset($_POST["message"])){
    $webhook = 'https://discord.com/api/webhooks/1096475417394810911/NwY5wPMqXH0itmRP2f30fMVpKKqQKiPnoJVhxLNRKRHYv79sHliaa3Mm759XP4KW2A-3';

    $data = [
        'content' => $_POST["message"],
        'username' => $_POST["auteur"],
        'avatar_url' => ''
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($webhook, false, $context);
}

?>
  <div class="contact-section">
    <h1>Contactez Nous</h1>
    <div class="borderanim">
      <div class="border"></div>
      <p>Bonjour / Bonsoir<br>Cette page sert a envoyer les coordonnées d'un spot pour qu'il puisse être ajouter au site </p>
      <div class="border"></div>
    </div>
    <form class="contact-form" action="" method="post">
      <input type="email" class="contact-form-text" placeholder="Ton email" name="auteur">
      <textarea class="contact-form-text" placeholder="Ton message" name="message"></textarea>
      <button class="contact-form-btn">Envoyer</button>
    </form>
  </div>
</body>
<?php
$title = " - Accueil";
require_once "core/footer.php";
?>