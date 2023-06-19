
<?php
require_once("connexion.php");
$message="";
if(isset($_POST['create'])){
if((empty($_POST["nom"]))|| (empty($_POST["prenom"])) || empty($_POST["age"]) || empty($_POST["email"])){

    $message='<p class="info">veillez remplir les champs</p>';
}else{
    
$sql="INSERT INTO `mamouna`(`nom`,`prenom`,`age`,`email`) VALUES(?,?,?,?)";


$rs_insert=$connexion->prepare($sql);

$var_nom= $_POST['nom'];
$var_prenom= $_POST['prenom'];
$var_age= $_POST['age'];
$var_email= $_POST['email'];


$rs_insert->bindValue(1, $var_nom,PDO::PARAM_STR);
$rs_insert->bindValue(2, $var_prenom,PDO::PARAM_STR);
$rs_insert->bindValue(3, $var_age,PDO::PARAM_STR);
$rs_insert->bindValue(4, $var_email,PDO::PARAM_STR);


$rs_insert->execute();


$message= '<p class="green">mamouna creer</p>';



}

}

?>

 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <h1>creer un nouveau client</h1>
    <form action="" method="POST">
        
<input type="text"name="nom" placeholder="nom">
<br> <br>
<input type="text" name="prenom" placeholder="prenom">
<br> <br>
<input type="number" name="age" placeholder="age">
<br> <br>
<input type="email" name="email" placeholder="email">
<br><br>
<input type="submit" name="create"  value="creer">
    </form>
    <a href="index.php"> retour a l'accueil</a>
    <?= $message;?>
</body>
</html>