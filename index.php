<?php
    include_once('./src/header.inc.php');
?>

<body>
    <header>
      <nav>
        <section id="logo">
          <img src="./image/mail.png" alt="Gmail">
          <p>Gmail</p>
        </section>
        <section id="menu">
          <ul>
            <li><a href="#">POUR LES PROS</a></li>
            <li><a href="./connexion.php">CONNEXION</a></li>
            <li><a href="./index.php">CRÉER UN COMPTE</a></li>
          </ul>
        </section>
      </nav>
    </header>

    <main>
      <section id="home">
        <img src="./image/home-hero.jpg" alt="logo home page">
        <p>
          Retrouvez la fluidité et la <br />
          simplicité de Gmail sur <br />
          tous vos appareil
          <a href="#form">CRÉER UN COMPTE</a>
        </p>
      </section>
      <section id="arrow">
        <a href="#form"><img src="./image/arrow.png" alt="indication vers le bas"></a>
      </section>

      <div id="form" role="region">
        <h1>
          Une boîte de réception <br />
          entièrement repensée
        </h1>
        <p>
          Avec les nouveaux onglets personnalisables, repérez <br />
          immédiatement les nouveaux messages et choisissez <br />
          ceux que vous souhaitez lire en priorité.
        </p>
        <p id="warning"></p>
        <br />

       
        <fieldset>
        <?php
          include_once('./src/inscriptionbdd.inc.php');
        ?>
          <legend>Créer un compte</legend>
          <form action="./connexion.php" method="post">
            <label for="nom">Nom *</label>
            <input
              type="text"
              name="nom"
              id="nom"
              placeholder="Votre nom"
              autofocus
            />
            <label for="prenom">Prénom *</label>
            <input
              type="text"
              name="prenom"
              id="prenom"
              placeholder="Votre prénom"
            />
            <label for="mail">Mail *</label>
            <input
              type="text"
              name="mail"
              id="mail"
              placeholder="Votre mail"
            />
            <label for="password">Choisir votre mot de passe *</label>
            <input
              type="text"
              name="password"
              id="password"
              placeholder="Votre mot de passe"
            />
            <input type="submit" value="VALIDER VOTRE COMPTE" />
          </form>
        </fieldset>
      </div>


    </main>
    <script src="./js/app.js"></script>
    </body>
    <?php
        include_once('./src/footer.inc.php');
    ?>