<?php
function returnCon()
{

    $host= "localhost";
    $nameBdd= "jarditou";
    $user= "root";
    $mdp= "";

    try {
        //code...
        $db = new PDO('mysql:host='. $host .';charset=utf8;dbname ='.$nameBdd,$user,$mdp);
        echo "con ok";
        return $db;
    } catch (Exception $e) {
    }    //throw $th;
        $e->getMessage();
    }


