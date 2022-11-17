<?php
session_start();
require 'config.php';


if(isset($_POST['delete-argent']))
{
    $argent_id = mysqli_real_escape_string($conn,$_POST['delete-argent']);

    $query = "DELETE FROM argent WHERE ID='$argent_id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']=" coordonnées est supprimé ";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="cordonnées n'est pas supprimé";
        header("Location: table.php");
        exit(0);
    }
    
}




if(isset($_POST['update1']))
{
    $argent_id = mysqli_real_escape_string($conn,$_POST['argent_id']);
    $nom = mysqli_real_escape_string($conn,$_POST['nom']);
    $prenom = mysqli_real_escape_string($conn,$_POST['prenom']);
    $prix = mysqli_real_escape_string($conn,$_POST['prix']);
    $aqui = mysqli_real_escape_string($conn,$_POST['aqui']);
 
    
    $query="UPDATE argent SET  nom='$nom' , prenom='$prenom' , prix='$prix', aqui='$aqui'
             WHERE ID=$argent_id  ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']="coordonnées mise a jour ";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="coordonnées n'est pas mise a jour";
        header("Location: table.php");
        exit(0);
    }
}

if(isset($_POST['ajouter1'])){
    $nom = mysqli_real_escape_string($conn,$_POST['nom']);
    $prenom = mysqli_real_escape_string($conn,$_POST['prenom']);
    $prix = mysqli_real_escape_string($conn,$_POST['prix']);
    $aqui = mysqli_real_escape_string($conn,$_POST['aqui']);
    

    $query = "INSERT INTO argent (nom,prenom,prix,aqui) VALUES 
    ('$nom','$prenom','$prix','$aqui')";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        $_SESSION['message']="coordonnées  enregistré";
        header("Location: payment.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="coordonnées non enregistré";
        header("Location: payment.php");
        exit(0);
    }

}






?>