<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>homepage</title>
<link rel="stylesheet" type="text/css" href="css/homepage.css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
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

		

		<div class="dropdown col-lg-6">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
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
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Votre compte</a></li>
              <li><a href="#">Vos commandes</a></li>
              <li class="divider"></li>
              <li><a href="exit.php">Déconnectez-vous</a></li>
            </ul>
        </div>
		<div class="image_panier_pos">
        <a href="panier.php"><img src="images/panier.png" alt=""></a>
        </div>
        </div>
        
    </div>
    <div id="Content">
    	<div id="affiche"><img src="images/pic1.jpg" ></div>
        <div id="menu">
        <table width="800" height="500" border="0">
  <tbody>
    <tr>
      <td><a href="searchCategory.php?id_category=1"><img src="images/a1.jpg" width="200" height="150"/></a></td>
      <td><a href=""><img src="images/a2.jpg" width="200" height="150"/></a></td>
      <td><a href=""><img src="images/a3.jpg" width="200" height="150"/></a></td>
    </tr>
    <tr>
      <td><a href=""><img src="images/a4.jpg" width="200" height="150"/></a></td>
      <td><a href=""><img src="images/a5.jpg" width="200" height="150"/></a></td>
      <td><a href=""><img src="images/a6.jpg" width="200" height="150"/></a></td>
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
