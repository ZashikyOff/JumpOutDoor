<?php
session_name("parkour");
session_start();
$title = " - Panel Admin";
require_once "core/header.php";
require "core/config.php";
if (!isset($_SESSION["email"])) {
  header('Location: index.php');
}

$sql = "SELECT * FROM lieux";

// Préparer la requête
$query = $lienDB->prepare($sql);

// Exécution de la requête
if ($query->execute()) {
  // traitement des résultats
  $results = $query->fetchAll();
}

if (isset($_GET["delete"])) {
  $sql = "DELETE FROM lieux WHERE id = :id";


  // Préparer la requête
  $query = $lienDB->prepare($sql);

  $query->bindParam(':id', $_GET["delete"], PDO::PARAM_INT);

  // Exécution de la requête
  if ($query->execute()) {
    // traitement des résultats
    header('Location: panel.php');
  }
}

if (isset($_POST["label"]) && !empty($_POST["label"])) {
  $sql = "UPDATE lieux SET label = :label WHERE id = :id";


  // Préparer la requête
  $query = $lienDB->prepare($sql);

  $query->bindParam(':id', $_POST["id"], PDO::PARAM_INT);
  $query->bindParam(':label', $_POST["label"], PDO::PARAM_STR);

  // Exécution de la requête
  if ($query->execute()) {
    // traitement des résultats
    header('Location: panel.php');
  }
}

?>

<body style="overflow: auto;">
<!-- <img src="img/bgadmin.jpg" alt="" class="bgadminpanel"> -->
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
  <main class="admin">
    <h3>Vous etes bien connecté avec l'email : <?= $_SESSION["email"] ?></h3>
    <div class="resultmodify">
    </div>
    <div class="allspots">
      <?php $x = 0;
      while ($x <= (count($results)) - 1) {
      ?><div class="article"><?php
                              if (isset($results[$x]["img_lieu"])) {
                              ?><img src="<?= $results[$x]["img_lieu"] ?>" alt=""><?php
                                                                                }
                                                                                  ?>
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $results[$x]["id"] ?>">
            <input type="text" name="label" id="" placeholder="<?= $results[$x]["label"] ?>">
          
          <div class="grub">
            <a href="?delete=<?= $results[$x]["id"] ?>"><i class="fa-solid fa-trash fa-2xl"></i></a>
            <button type="submit"><i class="fa-solid fa-arrows-rotate fa-2xl"></i></button>
          </div>
          </form>
          <?php

          $x++;
          ?>
        </div><?php
            }
              ?>
    </div>
  </main>
  <footer>
    <p id="credit">&copy; - 2023 - Team Xenatil - Tous droits réservés</p>
  </footer>
</body>


</html>