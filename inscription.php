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
      <input type="text" placeholder="Nom" name="Nom"><br>
      <input type="text" placeholder="Prénom" name="Prenom"><br>
      <input type="text" placeholder="Adresse" name="Adresse"><br>
      <input type="text" placeholder="Téléphone" name="Tel"><br>
      <input type="text" placeholder="Email" name="Email"><br>
      <input type="text" placeholder="Mot de passe" name="Password">
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