<?php
require_once("../connector/connexion.php");

$db =returnCon();

//insertion d une ligne //
$cat_nom ='graines';

$cat_parent =10;

//ecriture de la requête en string

//result  =$db ->query($req);//l pbjet avec methode queery 

$stmt
