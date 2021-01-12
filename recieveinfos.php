<?php

if (!isset($_POST["nom"]))
{
    die("Champ nom manquant");
}
$nom = $_POST["nom"];

if (!isset($_POST["voie_adresse"]))
{
    die("Champ voie_adresse manquant");
}
$voie_adresse = $_POST["voie_adresse"];

if (!isset($_POST["lieu_dit"]))
{
    die("Champ lieu_dit manquant");
}
$lieu_dit = $_POST["lieu_dit"];

if (!isset($_POST["commune"]))
{
    die("Champ commune manquant");
}
$commune = $_POST["commune"];

if (!isset($_POST["code_postal"]))
{
    die("Champ code_postal manquant");
}
$code_postal = $_POST["code_postal"];

if (!isset($_POST["description"]))
{
    die("Champ description manquant");
}
$description = $_POST["description"];

if (!isset($_POST["site_web"]))
{
    die("Champ site_web manquant");
}
$site_web = $_POST["site_web"];

if (!isset($_POST["telephone_mobile"]))
{
    die("Champ telephone_mobile manquant");
}
$telephone_mobile = $_POST["telephone_mobile"];

if (!isset($_POST["telephone_fixe"]))
{
    die("Champ telephone_fixe manquant");
}
$telephone_fixe = $_POST["telephone_fixe"];

if (!isset($_POST["fax"]))
{
    die("Champ fax manquant");
}
$fax = $_POST["fax"];

if (!isset($_POST["email"]))
{
    die("Champ email manquant");
}
$email = $_POST["email"];

include("bd.php");

$query = "INSERT INTO `entite` (`identite`, `nom`, `description`, `voie_adresse`, `infos_complementaire_adresse`, `lieudit_adresse`, `code_postal`, `commune`, `telephone_fixe`, `telephone_mobile`, `email`, `site_web`, `logo`, `fax`) VALUES (NULL, '".$nom."', $description, $voie_adresse, $lieu_dit, $infos_complementaire_adresse,$code_postal, $commune, $telephone_fixe, $telephone_mobile,$email, $site_web, $fax )";

$bdd->exec($query);

?>