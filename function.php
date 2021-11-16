<?php
function getLastKeyword(){
    require('db.php');
    
    $req = $connexion->prepare("SELECT * FROM log JOIN mot-cle ON mot-cle.id = log.id-mot-cle LIMIT 1 ORDER BY DESC");
    $req = execute();
    $res = $req->fetch();
    return $res['libelle'];
}

function getLastResa(){
    require('db.php');
    
    $req = $connexion->prepare("SELECT * FROM reservation LIMIT 1 ORDER BY DESC");
    $req = execute();
    $res = $req->fetch();
    return $res;

}

function getCountKeyword(){
    require('db.php');
    
      
    $req = $connexion->prepare("SELECT COUNT(*) FROM log ");
    $req = execute();
    $res = $req->fetch();
    return $res;
}


function getPopularKeyword(){
    require('db.php');
    
      
    $req = $connexion->prepare("SELECT COUNT(*) FROM log ");
    $req = execute();
    $res = $req->fetch();
    return $res;


}