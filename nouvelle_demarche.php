
<!DOCTYPE html>
<html>
<head> <!-- tête de la page--> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nouvelle démarche</title>
	<link rel="stylesheet" type="text/css" href="style.css"> <!--link avec le css-->
 
</head>

<body>


    <form method="post" action=from_demarche.php>
        <p> <label>Selectionnez une date</label> : <input type="date" name="date"/> </p>

        <p>
            <label for="contact">Méthode de contact</label><br />
            <select name="contact" id="contact">
                <option value="">Selectionnez une option</option>
                <option value="mail">Mail</option>
                <option value="tel">téléphone</option>
                <option value="surplace">sur place</option>
                
            </select>
        </p>

        <p>
            <label for="etat">état de votre demande</label><br />
            <select name="etat" id="etat">
                <option value="">Selectionnez une option</option>
                <option value="cv_send">CV envoyé</option>
                <option value="await">En attente</option>
                <option value="ok">Entretien</option>
                
            </select>
        </p>

        <p>
            <label for="enterprise">Entreprise</label><br />
            <select name="enterprise" id="enterprise">
                <option value="">Selectionnez une option</option>
                <option value="1">Entreprise A</option>
                <option value="2">Entreprise B</option>
                <option value="3">Entreprise C</option>
                
            </select>
        </p>

        <input type="submit" value="Envoyer" />


    </form>

    
</body>

</html>
