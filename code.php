<?php
session_start();
require 'config.php';


if(isset($_POST['delete-troc']))
{
    $troc_id = mysqli_real_escape_string($conn,$_POST['delete-troc']);

    $query = "DELETE FROM troc WHERE idEX='$troc_id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']="troc est supprimé ";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="troc n'est pas supprimé";
        header("Location: table.php");
        exit(0);
    }
    
}




if(isset($_POST['update']))
{
    $troc_id = mysqli_real_escape_string($conn,$_POST['troc_id']);
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $heure = mysqli_real_escape_string($conn,$_POST['heure']);
    $pays = mysqli_real_escape_string($conn,$_POST['pays']);
    $province = mysqli_real_escape_string($conn,$_POST['province']);
    $cite = mysqli_real_escape_string($conn,$_POST['cite']);
    $adresse = mysqli_real_escape_string($conn,$_POST['adresse']);
    
    $query="UPDATE troc SET  date='$date' , heure='$heure' , pays='$pays', province='$province', cite='$cite',adresse='$adresse'
             WHERE idEX=$troc_id  ";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message']="troc mise a jour ";
        header("Location: table.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="troc n'est pas mise a jour";
        header("Location: table.php");
        exit(0);
    }
}

if(isset($_POST['ajouter'])){
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $heure = mysqli_real_escape_string($conn,$_POST['heure']);
    $pays = mysqli_real_escape_string($conn,$_POST['pays']);
    $province = mysqli_real_escape_string($conn,$_POST['province']);
    $cite = mysqli_real_escape_string($conn,$_POST['cite']);
    $adresse = mysqli_real_escape_string($conn,$_POST['adresse']);

    $query = "INSERT INTO troc (date,heure,pays,province,cite,adresse) VALUES 
    ('$date','$heure','$pays','$province','$cite','$adresse')";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        $_SESSION['message']="rendez-vous enregistré";
        header("Location: rendezVous.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']="rendez-vous non enregistré";
        header("Location: rendezVous.php");
        exit(0);
    }

}






?>