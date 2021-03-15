<?php
    include_once('./src/connexionheader.inc.php');
?>

<?php
        include_once('./src/inscriptionbdd.inc.php');
?>

<body>
    <header>
      <nav>
        <section id="logo">
          <img src="./image/mail.png" alt="Gmail" />
          <p>Gmail</p>
        </section>
        <section id="menu">
          <ul>
            <li><a href="./index.php">POUR LES PROS</a></li>
            <li><a href="./connexion.php">CONNEXION</a></li>
            <li><a href="./index.php">CRÉER UN COMPTE</a></li>
          </ul>
        </section>
      </nav>
    </header>

    <main>
      <section id="connexionForm">
        <h1>Bienvenue dans votre espace</h1>
        <br />
        <br />
        <p id="warning"></p>
        <br />
        <br />
       
        <fieldset>
          <legend>Connectez-vous à votre compte</legend>
          <form action="connexion.php" method="get">
            <label for="mail">Mail ou login *</label>
            <input
              type="email"
              id="mail"
              name="mail"
              placeholder="Votre mail"
              aria-required="true"
            />

            <label for="password">Mot de passe *</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Votre mot de passe"
              aria-required="true"
            />

            <input
              id="connexion"
              type="submit"
              value="Connexion à votre compte"
            />
          </form>
        </fieldset>
      </section>
      
    </main>

    <script src="./js/connexion.js"></script>
    </body>

  <?php
    include_once('./src/footer.inc.php');
  ?>