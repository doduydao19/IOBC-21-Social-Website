<?php
 
   include ("connexion.inc.php");
    //verifie qu'il y a quelquechose déjà existant
    if(isset($_POST['submit'])){
        $msg=NULL;
    
        //verifie si l'utilisateur est vide
        if(empty($_POST['user'])){
            $user=FALSE;
            $msg.="<p>Veuillez indiquer un nom d'utilisateur</p>";
        }
        else{
            $user=$_POST['user'];
        }
        //même chose pour mdp
        if(empty($_POST['password'])){
            $password=FALSE;
            $msg.="<p>Veuillez indiquer un mot de passe</p>";
        }
        else{
            $password=$_POST['password'];
        }
        //condition pour remplir les deux champs
        if($user && $password){
            //recupération à partir d'une demande SQL du user mdp
            $reqlog1 = $bd->query("SELECT username FROM utilisateur");
            $login1=$reqlog1->fetch();
            $reqmdp1 = $bd->query("SELECT mdp FROM utilisateur");
            $mdp1=$reqmdp1->fetch();
            $reqlog1->closeCursor();
            //Verifie que le login et mdp matchent
            if(($user ==$login1['username']) && ($password ==$mdp1['mdp'])){
                session_start();
                $_SESSION['joueur'] = $user;
                //renvoie vers quest.php
                header("Location:PHP/home_page.php");
                exit();
            }
            //sinon message d'erreur
            else    {
                $msg .="<p> Le login et le mot de passe ne correspondent pas. </p>";
            }
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Mire de connexion</title>
  
</head>
<body>
<h1>Connexion</h1>
<?php 
    //modification des couleurs de $message si il existe
    if(isset($msg)){
        echo "<font color='red'>$msg</font>";
    }
    //formulaire de connexion en dehors des balises php
?>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p>Utilisateur :
            <input type="text" name="user">
        </p>
        <p>Mot de passe :
            <input type="password" name="password">
        </p>
        <div><input type="submit" name="submit" value="Login"/></div>
    </form>
</body>
</html>
