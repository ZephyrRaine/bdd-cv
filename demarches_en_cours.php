<?php  
session_start();

$demarches = $mysqlClient->prepare('SELECT * FROM demarche'); //je pense que y a besoin de ca 

$getData = $_GET; //nécessaire ou pas ???

$demarche = [ //mais du coup si j'ai récupéré les démarches en ligne 4, est ce que j'ai besoin de ca ?
    'Id' => $[0]['Id'],
    'Date_contact' => $[0]['Date_contact'],
    'Type_demarche' => $[0]['Type_demarche'],
    'Etat' => $[0]['Etat'],
    'Id_Contact' => $[0]['Id_Contact'],
    'Id_Utilisateur' => $[0]['Id_Utilisateur'],
];

echo ($demarches)

?>