<?php
session_name("parkour");
session_start();
$title = " - Figure";
require_once "core/header.php";
require_once "core/config.php";

$sql2 = "SELECT * FROM figures";
$result = $lienDB->query($sql2);
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
  <div class="list-figure">
    <?php
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) :
    ?>
      <div>
        <h2><?= htmlspecialchars($row['label']); ?></h2>
        <div class="img">
          <?php
          if(strlen(htmlspecialchars($row['video'])) >= 1){
            ?><iframe width="560" height="315" src="<?= htmlspecialchars($row['video']); ?>" title="<?= htmlspecialchars($row['label']); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><?php
          }
          ?>
        </div>
        <div class="explication">
          <h3><?= htmlspecialchars($row['explication']); ?></h3>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <footer style="bottom: 0;position:absolute;">
    <p id="credit">&copy; - 2023 - Team Xenatil - Tous droits réservés</p>
  </footer>
</body>