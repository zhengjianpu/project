<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>homepage</title>
<link rel="stylesheet" type="text/css" href="css/homepage.css"/>
</head>

<body>



<div id="Container">
	<div id="Header">
		<div id="logo"></div>
        <div id="search">
        	<div id="search_loc">
			 <form action = "search_resultat.php" method="POST" >
				<input type="text" name="search_text" class="search_text">
				<input type="submit" name="search_buttom" value="Recherche" class="search_btn">
			</form>
        	</div>
        </div>
        <div id="login">
        <a class="compt" href="decideCompte.php">
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
		
        <a href="panier.php" style="position:relative;top:20px;left:0px;"><img src="images/panier.png" ></a>
        </div>
        
    </div>
    <div id="Content">
    	<div id="affiche"><img src="images/pic1.jpg" ></div>
        <div id="menu">
        <table width="800" height="500" border="0">
  <tbody>
    <tr>
      <td><a href="searchCategory.php?id_category=1"><img src="images/pic2.jpg" width="200" height="150"/></a></td>
      <td><a href=""><img src="images/pic2.jpg" width="200" height="150"/></a></td>
      <td><a href=""><img src="images/pic2.jpg" width="200" height="150"/></a></td>
    </tr>
    <tr>
      <td><a href=""><img src="images/pic2.jpg" width="200" height="150"/></a></td>
      <td><a href=""><img src="images/pic2.jpg" width="200" height="150"/></a></td>
      <td><a href=""><img src="images/pic2.jpg" width="200" height="150"/></a></td>
    </tr>
  </tbody>
</table>

        
        </div>
    </div>
    <div class="Clear"></div>
    <div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>
</div>
</body>
</html>
