<?php

include 'db_connect.php';

if(isset($_POST["save"])){
    $nom =  (isset($_POST['nom']))? $_POST['nom'] : '' ;
    $prenom  =  (isset($_POST['prenom']))? $_POST['prenom'] : '' ;
    $email  =  (isset($_POST['email']))? $_POST['email'] : '' ;
    $login =  (isset($_POST['login']))? $_POST['login'] : '' ;
    $pass  =  (isset($_POST['passwd']))? $_POST['passwd'] : '' ;
    $departement =  (isset($_POST['departement']))? $_POST['departement'] : '' ;
    $ville  =  (isset($_POST['ville']))? $_POST['ville'] : '' ;
    $tel =  (isset($_POST['tel']))? $_POST['tel'] : '' ;
       
    $sql = "insert into utilisateur (`usr_id`,`usr_nom`,`usr_prenom`,`usr_email`,`usr_login`,`usr_pass`,`usr_dep`,`usr_ville`,`usr_tel`,`usr_del`) 
                        values (NULL,'".$nom."','".$prenom."','".$email."','".$login."','".$pass."','".$departement."','".$ville."','".$tel."','0')";
                        //echo $sql;
    $pdo->exec($sql);
    header('Location: index.php');
}

?>