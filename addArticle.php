<?php

include_once('Database.php');
include_once('Identification.php');
try{
    $query="insert into article (name,image_src,id_category) values (:name,:image_src,:id_category)";
    $req=$bdd->prepare($query);
    $req->execute(array("name"=>$_POST['name'],
        "image_src"=>$_POST['image_src'],
        "id_category"=>$_POST["id_category"]));
	if($req){
		echo 'success';
	}else{
		echo 'fail';
	}
	
}catch (PDOException $e) {
    echo("<pre>");
    var_dump($e);
}
?>