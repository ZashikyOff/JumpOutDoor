<?php
session_name("parkour");
session_start();
if (isset($_POST["email"]) && isset($_POST["password"])) {
  // requête SQL
  $sql = "SELECT * FROM admin WHERE email=:email";
  $password = $_POST["password"];
  $email = $_POST["email"];

  require "core/config.php";

  // Préparer la requête
  $query = $lienDB->prepare($sql);

  // Liaison des paramètres de la requête préparée
  $query->bindParam(":email", $email, PDO::PARAM_STR);

  // Exécution de la requête
  if ($query->execute()) {
    // traitement des résultats
    $results = $query->fetch();

    // débogage des résultats
    if ($results) {
      if (password_verify($password, $results['hash_mdp'])) {
        // Connexion réussie
        header('Location: panel.php');
        echo 'Connexion réussie <br/>';
        echo 'Votre email :  ';
        echo  $_POST["email"];

        $_SESSION["email"] = $_POST["email"];
      } else {
        echo 'Mot de passe incorrect';
      }
    } else {
      echo 'Email non trouvé';
    }
  }
} else {
}

$title = " - Figure";
require_once "core/header.php";
?>

<body style="overflow: auto;">
  <header>
    <div class="nav">
      <h1 id="title">Panel Login</h1>
      <div class="nav-sub">
        <a href="debuter.php">Figure</a>
        <a href="contact.php">Contacts</a>
        <a href="login.php">Panel Admin</a>
      </div>
    </div>
  </header>
  <form action="" method="post" class="loginform">
    <div class="email">
      <div class="form-control">
        <input type="email" required name="email">
        <label>
          <span style="transition-delay:0ms">U</span><span style="transition-delay:50ms">s</span><span style="transition-delay:100ms">e</span><span style="transition-delay:150ms">r</span><span style="transition-delay:200ms">n</span><span style="transition-delay:250ms">a</span><span style="transition-delay:300ms">m</span><span style="transition-delay:350ms">e</span>
        </label>
      </div>
    </div>
    <div class="password">
    <div class="form-control">
    <input type="password" required name="password">
    <label>
        <span style="transition-delay:0ms">P</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">s</span><span style="transition-delay:150ms">s</span><span style="transition-delay:200ms">w</span><span style="transition-delay:250ms">o</span><span style="transition-delay:300ms">r</span><span style="transition-delay:350ms">d</span>
    </label>
</div>
    </div>
    <button>Se Connecter</button>
  </form>
</body>
<?php
$title = " - Accueil";
require_once "core/footer.php";
?>