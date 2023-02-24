<?php
session_name("parkour");
session_start();
$title = " - Figure";
require_once "core/header.php";
?>

<body style="overflow: auto;">
  <header>
    <div class="nav">
      <h1 id="title">Jump Outdoor</h1>
      <div class="nav-sub">
        <a href="index.php">Home</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Panel Admin</a>
      </div>
    </div>
  </header>
  <footer style="bottom: 0;position:absolute;">
    <p id="credit">&copy; - 2023 - Team Xenatil - Tous droits réservés</p>
  </footer>
</body>