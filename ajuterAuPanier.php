
<?php
include_once('Database.php');
session_start ();
if (isset($_POST['id_article'])) {
	//echo $_POST['id_article'];
	//echo $_POST['price_article'];
	echo $_POST['id_category'];
	//echo $_POST['name_article'];
	
	$article=array('id'=>$_POST['id_article'],'name' => $_POST['name_article'],'price' => $_POST['price_article'],'image' => $_POST['image_src'],'quantity' => $_POST['quantity_article']);//quantity_article
	//echo $article[$_POST['id_article']]['name'];
	
	$_SESSION['panier'][]=$article;
	//echo $_SESSION['panier'][0]['name'];
	//echo $_SESSION['panier'][1]['name'];
	//header ('location: admin.php');
	if(isset($_POST['search_text'])){
		header("location:search_resultat.php?search_text=".$_POST['search_text']);		
	}
		header("location:searchCategory.php?id_category=".$_POST['id_category']);		
}
 
 
?>