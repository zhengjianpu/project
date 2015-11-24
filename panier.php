<!doctype html>
<html><!-- InstanceBegin template="/Templates/page.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>homepage</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="css/homepage.css"/>
<link rel=stylesheet type=text/css href="css/lrtk.css">
<script type=text/javascript src="js/jquery.min.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

<div id="Container">
	<div id="Header">
		<div id="logo"></div>
        <div id="search">
       	  <div id="search_loc">
			<input type="text" name="search_text" class="search_text">
            <input type="submit" name="search_buttom" value="Search" class="search_btn">
        	</div>
        </div>
        <div id="login">
        <a class="compt" href="login.html">
		  <?php 
		session_start ();
		if(isset($_SESSION['userName'])){
		echo $_SESSION['userName'];
		}
		 else{
		 echo 'Compte';
		}
		?>
		</a>
		
		
		<a href="exit.php">Exit</a>
		
        <a href="panier.html" style="position:relative;top:20px;left:0px;"><img src="images/panier.png" ></a>
        </div>
        
    </div>
    <div id="leftside">
    <div id="firstpane" class="menu_list">
    	<p class="menu_head current">High-Tech et Informatique</p>
    	<div style="display:block" class="menu_body" >
            <a href="#">High-Tech</a>
            <a href="#">Informatique et bureau</a>
        </div>
    	<p class="menu_head">Jouets, Enfants et Bébés</p>
    	<div style="display:none" class="menu_body" >
            <a href="#">Jeux et Jouets</a>
            <a href="#">Bébés & Puériculture</a>
    	</div>
    	<p class="menu_head">Maison et Bricolage</p>
    	<div style="display:none" class="menu_body" >
            <a href="#">Cuisine & Maison</a>
            <a href="#">Bricolage & Jardin</a>
            <a href="#">Animalerie</a>
    	</div>
    	<p class="menu_head">Beauté, Santé, Épicerie</p>
    	<div style="display:none" class="menu_body" >
            <a href="#">Beauté, Santé et Bien-être</a>
            <a href="#">Épicerie et Boissons</a>
    	</div>
    	<p class="menu_head">Vêtements et Chaussures</p>
    	<div style="display:none" class="menu_body" >
            <a href="#">Vêtements</a>
            <a href="#">Chaussures</a>
            <a href="#">Accessoires</a>
    	</div>
            	<p class="menu_head">Sports et Loisirs</p>
    	<div style="display:none" class="menu_body" >
            <a href="#">Tous les Sports et Loisirs</a>
    	</div>
    </div>
    <script type=text/javascript>
	$(document).ready(function(){
		$("#firstpane .menu_body:eq(0)").show();
		$("#firstpane p.menu_head").click(function(){
			$(this).addClass("current").next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
			$(this).siblings().removeClass("current");
		});
		$("#secondpane .menu_body:eq(0)").show();
		$("#secondpane p.menu_head").mouseover(function(){
			$(this).addClass("current").next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
			$(this).siblings().removeClass("current");
		});
		
	});
	</script>
    </div>
    <div id="center">
	<!-- InstanceBeginEditable name="EditRegion1" -->
    <div class="p_title"><h2>resultat</h2></div>
    <div class="list_head">
    <table width="872" border="0">
      <tbody>
        <tr>
          <td width="65%"></td>
          <td width="15%" align="left">Prix</td>
          <td width="10%" align="right">Quantité&nbsp;</td>
		   <td width="10%" align="right"></td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="list_body">
    <table width="872" border="0" class="panier_table">
	<tbody>
	<?php

	if(isset($_SESSION['panier'])){
	$paniers = $_SESSION['panier'];
	
	
 foreach ($paniers as $panier) {
          ?>	
			 <tr>
      <td width="10%" valign="top"><img src=<?php echo $panier["image"]?> width="100" height="100"/></td>
      <td width="55%" valign="top">
	  
          	<table border="0">
          	<tbody>
            <tr>
              <td>
              <a style="text-decoration:none" href=""><span class="a-size-medium sc-product-title a-text-bold a-color-title"><?php echo $panier["name"]?></span></a>
              </td>
            </tr>
          	</tbody>
        	</table>
		</td>
		<form action = "acheter.php" method="POST" >
		<p type="hidden" name='name_article' id='name_article' value=<?php echo $panier["name"]?>></p>
		<p type="hidden" name='id_article' id='id_article' value=<?php echo $panier["image"]?>></p>
		<p type="hidden" name='id_article' id='id_article' value=<?php echo $panier["id"]?>></p>
      	<td width="15%" valign="top" align="top"><input class="a-size-medium a-color-price sc-white-space-nowrap a-text-bold" type="text" name="price_article" value=<?php echo $panier["price"]?>></td>
		<td width="10%" valign="top" align="right"><input type="number" name="quantity_article" min="1" max="10" value=<?php echo $panier["quantity"]?>></td>
		 <td  width="10%" valign="top" align="right"><input class="buttom_ajouterAuPanier" type="submit" name="ajouterAuPanier" value="acheter"> </td>
        </form>      
    </tr>
			<?php
 }
	}
?>
  	</tbody>
	</table>
	
	<!-- InstanceEndEditable -->
   
    <div class="Clear"></div>
    <div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>
</div>
</body>
<!-- InstanceEnd --></html>
