<?php

include_once('Database.php');
session_start ();

$flag = false;
$role = 'user';


 if (isset($_POST['username'])&&isset($_POST['password'])) {
            
            $username = $_POST['username'];
            $pwd = $_POST['password'];
			
			 try {
            $encryptPwd = $pwd;// md5($pwd);
            $bdd = Database::getDb();
            $query = "select id_user,password,role from user where name=:username";
            $req=$bdd->prepare($query);
            $req->execute(array("username" => $username));
            while ($result = $req->fetch()) {
                if ($encryptPwd == $result['password']) {
                    $flag = true;
					$role = $result['role'];
					    $_SESSION['id_user']=$result['id_user'];
						$_SESSION['userName']=$username;
						$_SESSION['panier']=array();
        }
                }
            }
        catch (PDOException $e) {
            echo("<pre>");
            var_dump($e);
            return null;
        }
        } 
		
		if($flag){
			
			if($role == 'user'){
				//echo $_SESSION['userName'];
				header ('location: homepage.php');
				//header("Refresh: 0; url=homepage.php");	
			}
			else{
				header ('location: admin_add_article.php');
				//header("Refresh: 0; url=admin.php");
			}
		
		}else{
			echo '<body onLoad="alert(\'username or password pas correct\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=login.php">';
			
		}
		

?>