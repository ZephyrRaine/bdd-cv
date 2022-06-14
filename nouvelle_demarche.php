
<!DOCTYPE html>
<html>
<head> <!-- tête de la page--> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nouvelle démarche DEUX</title>
	<link rel="stylesheet" type="text/css" href="neige.css"> <!--link avec le css-->
 
</head>

<body>

<div class="login-box">
  <h2>Nouvelle Démarche</h2>
  <form method="post" action=from_demarche.php>
    <div class="user-box">
    <label for="contact">Méthode de contact</label><br />
            <select name="contact" id="contact">
                <option value="">Selectionnez une option</option>
                <option value="mail">Mail</option>
                <option value="tel">téléphone</option>
                <option value="surplace">sur place</option>
                
            </select>
    </div>
    <div class="user-box">
    <label for="etat">état de votre demande</label><br />
            <select name="etat" id="etat">
                <option value="">Selectionnez une option</option>
                <option value="cv_send">CV envoyé</option>
                <option value="await">En attente</option>
                <option value="ok">Entretien</option>
                
            </select>
    </div>
    <div class="user-box">
    <label for="enterprise">Entreprise</label><br />
            <select name="enterprise" id="enterprise">
                <option value="">Selectionnez une option</option>
                <option value="1">Entreprise A</option>
                <option value="2">Entreprise B</option>
                <option value="3">Entreprise C</option>
                
            </select>
    </div>
    <a href="from_demarche.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Envoyer
    </a>
  </form>
</div>

</body>
</html>