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
      <input type="email" placeholder="Entrez votre email" class="pseudologin selectDisable" name="email" required autocomplete="off">
    </div>
    <div class="password">
      <input type="password" placeholder="Entrez votre mot de passe" class="passwordlogin" name="password" required autocomplete="off">
    </div>
    <button>Se Connecter</button>
  </form>
</body>
<?php
$title = " - Accueil";
require_once "core/footer.php";
?>