<?php
session_name("parkour");
session_start();
$title = " - Contact Us";
require_once "core/header.php";
if(!isset($_SESSION["email"])){
  header('Location: index.php');
}
?>

<body style="overflow: auto;">
  <header>
    <div class="nav">
      <h1 id="title">Jump Outdoor</h1>
      <div class="nav-sub">
        <a href="debuter.php">Figure</a>
        <a href="contact.php">Contacts</a>
        <a href="core/logout.php">Deconnexion</a>
      </div>
    </div>
  </header>
  <main style="margin-top: 200px;">
    <h3>Vous etes bien connecté avec l'email : <?= $_SESSION["email"] ?></h3>
    <div class="resultmodify">
    </div>
  </main>
  <footer style="position: absolute;bottom:0;width:100vw">
    <p id="credit">&copy; - 2023 - Team Xenatil - Tous droits réservés</p>
  </footer>
</body>


</html>