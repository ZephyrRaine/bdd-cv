<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="inscription.css">
	<title>Formulaire</title>
</head>
<body>

<main>
  <form>
    <hgroup>
      <h2>Formulaire</h2>
    </hgroup>
    
    <form method="post" action="inscription-page.php">
      <input type="text" placeholder="Nom" required><br>
      <input type="Prénom" placeholder="Prénom" required><br>
      <input type="Adresse" placeholder="Adresse" required><br>
      <input type="Téléphone" placeholder="Téléphone" required><br>
      <input type="email" placeholder="Email" required><br>
      <input type="password" placeholder="Mot de passe" required>
    </form>
  
    <button>Créer un compte</button>
  </form>
  
  <section>
    <h2>Merci!</h2>
    <br>
    <h3>Votre compte a été créé avec succès.</h3><br>
    <div>
  <a href="index.php"><b>Cliquez ici pour vous connecter !</b></a>
	</div>

  </section>
</main>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>