<?php
session_name("parkour");
session_start();

require "core/config.php";

$sql2 = "SELECT * FROM lieux ";
$result = $lienDB->query($sql2);

$i = 0;

$title = " - Accueil";
require_once "core/header.php";
?>

<body style="overflow-x: hidden;">
  <header>
    <div class="nav">
      <h1 id="title">Jump Outdoor</h1>
      <div class="nav-sub">
        <a href="debuter.php">Figure</a>
        <a href="contact.php">Contacts</a>
        <a href="login.php">Panel Admin</a>
      </div>
    </div>
  </header>
  <section class="toplink">
    <h3>I'ts time for</h3>
    <h2>Parkour</h2>
  </section>
  <a id="ancreSpot" href="#list-lieux">Spots</a>
  <section id="parralax">
    <div class="list-lieux" id="list-lieux"><?php
                                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) :
                                              $i++;
                                            ?>
        <div class="lieux nb-<?= $i ?>">
          <div class="leftarealieux">
            <img src="<?= htmlspecialchars($row['img_lieu']); ?>">
          </div>
          <div class="rightarealieux">
            <h2><?= htmlspecialchars($row['label']); ?></h2>
            <div class="adresse">
              <h3><?= htmlspecialchars($row['ville']); ?> / <?= htmlspecialchars($row['code_postal']); ?></h3>
            </div>
            <a class="btnmaps" href="<?= htmlspecialchars($row['url_map']); ?>" target="_blank">Maps Link</a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
</body>
<?php
require_once "core/footer.php";
?>