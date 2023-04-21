<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
require_once("../connector/connexion.php");

$db =  returnCon();

//read
$req="select * from Produits";
$result = $db->query($req);
$produits = $result->fetch(PDO::FETCH_OBJ);

if(!$result){
$erreurs =$db->errorInfo();
echo $erreurs;
die("erreurs au niveau de la requête");
}

if($result->rowCount()==0) {
    die("la table est vide");

}
?>

<?php
echo "<h1>liste des produits</h1>";
echo "<table>";
while($row = $result->fetch(PDO::FETCH_OBJ)){
echo "<tr>";
echo "<td>".$row->pro_id."</td>";
echo "<td>".$row->pro_libelle."</td>";
echo "<td>".$row->pro_prix."</td>";
echo"<td><a href=\"detailsProduits.php?pro_id=" .$row->pro_id . "\" title=\"" . $row->pro_libelle . "\">voir détail</a></td>";


echo"</tr>";
echo "</table>";

}
?>


</body>
</html>