<!-- <?php
echo "hello depuis php"

?> -->

<?php
require_once('connexion.php')


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php</title>
</head>
<body>
    <h1>liste des clients</h1>
    <table>
<thead>
<!-- <a href="create.php"class= "btn"><img src="images/plus.png" width="25px">ajouter </a> 
  -->
<!-- <th>nom</th>
<th>prenom</th>
<th>age</th>
<th>email</th>
<th>Modifier</th>
<th>suprimer</th> -->


</thead>
<tbody>
<tr>  
<td>mariam</td>
<td>arouna</td>
<td>12</td>
<td>mariam.arounagmail.com</td>
<!-- <td><a href="#"> <img src="images/write.png" width="25px"</a></td>
<td><a href="#"> <img src="images/trash.png" width="25px"</a></td> -->

</tr>
<tr>
<td>bintou</td>
<td>mari</td>
<td>15</td>
<td>mariam.arounagmail.com</td>
<!-- <td><a href="#"> <img src="images/write.png" width="25px"</a></td>
<td><a href="#"> <img src="images/trash.png" width="25px"</a></td> -->


</tr>

</tbody>
    </table>
    <a href="create.php">creer un nouveau client</a>
    
</body>
</html>