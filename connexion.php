
<?php
$serveur = "localhost";
$user ="root";
$password = "";
try{
    $connexion = new PDO("mysql:host=$serveur;dbname=sayore", $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion a la base de donnee reussit";
} catch(PDOException $error){
echo "Echec de connexion a la base de donnee : " .$error->getMessage();
}
?>