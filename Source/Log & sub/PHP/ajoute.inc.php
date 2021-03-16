<?php
include ("connexion.inc.php");

$pdoStat=$bd->prepare('INSERT INTO utilisateur  VALUES (NULL, :username,:mdp)');
$user=$_POST['user'];
$pdoStat->bindValue(':username',$user,PDO::PARAM_STR);
$pswd=$_POST['password'];
$pdoStat->bindValue(':mdp',$pswd,PDO::PARAM_STR);
$insertIsOk = $pdoStat->execute();
if ($insertIsOk){
	$msg ='Vous êtes inscrit';
}
else{
	$message='Echec'; 
}    
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
  
</head>
<body>
<h1>Inscription</h1>
<?php 
    //modification des couleurs de $message si il existe
    if(isset($msg)){
        echo "<font color='red'>$msg</font>";
    }
    //formulaire de connexion en dehors des balises php
?>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p>Pseudo :
            <input type="text" name="user"> 
        </p>
        <p>Mot de passe :
            <input type="password" name="password">
        </p>
        
        <div><input type="submit" name="submit" value="se connecter"/></div>
    </form>
</body>
</html>
