
<?php
include_once('Database.php');
session_start ();
if (isset($_POST['id_article'])) {
	//echo $_POST['id_article'];
	//echo $_POST['price_article'];
	//echo $_POST['id_category'];
	//echo $_POST['name_article'];
	$flag = true;
	if(isset($_SESSION['panier'])){
	foreach ($_SESSION['panier'] as &$panier){
		if($panier['id']==$_POST['id_article']){
			$panier['quantity']=$_POST['quantity_article'];
			$flag = false;
			break;
		}
	}}
	
	
	if($flag){
	$article=array('id'=>$_POST['id_article'],'name' => $_POST['name_article'],'price' => $_POST['price_article'],'image' => $_POST['image_src'],'quantity' => $_POST['quantity_article']);//quantity_article
	$_SESSION['panier'][]=$article;
	}
	
	if(isset($_POST['search_text'])){
		header("location:search_resultat.php?search_text=".$_POST['search_text']);		
	}
		else{
			header("location:searchCategory.php?id_category=".$_POST['id_category']);		
           }
}
 
 
?>