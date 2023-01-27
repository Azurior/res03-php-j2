<?php 

$form = 
    [
            "nom" => "",
            "prenom" => "",
            "email" => "",
            "telephone" => "",
            "linkedin" => "",
            "github" => "",
            "biographie" => "",
            "loisir-1" => "",
            "loisir-2" => "",
            "loisir-3" => "",
            "loisir-4" => "",

            "language" => [],

            "lang" => [],

            "frameworks" => [],

            "software" => [],

            "color" => ""
    ];

if(isset($_POST['nom'])){
    $form['nom'] = $_POST['nom'];
}

if(isset($_POST['prenom'])){
    $form['prenom'] = $_POST['prenom'];
}

if(isset($_POST['email'])){
    $form['email'] = $_POST['email'];
}

if(isset($_POST['telephone'])){
    $form['telephone'] = $_POST['telephone'];
}

if(isset($_POST['linkedin'])){
    $form['linkedin'] = $_POST['linkedin'];
}

if(isset($_POST['github'])){
    $form['github'] = $_POST['github'];
}

if(isset($_POST['biographie'])){
    $form['biographie'] = $_POST['biographie'];
}

if(isset($_POST['loisir-1'])){
    $form['loisir-1'] = $_POST['loisir-1'];
}

if(isset($_POST['loisir-2'])){
    $form['loisir-2'] = $_POST['loisir-2'];
}

if(isset($_POST['loisir-3'])){
    $form['loisir-3'] = $_POST['loisir-3'];
}

if(isset($_POST['loisir-4'])){
    $form['loisir-4'] = $_POST['loisir-4'];
}

if(isset($_POST['language'])){
    $form['language'] = $_POST['language'];
}

if(isset($_POST['lang'])){
    $form['lang'] = $_POST['lang'];
}

if(isset($_POST['frameworks'])){
    $form['frameworks'] = $_POST['frameworks'];
}

if(isset($_POST['software'])){
    $form['software'] = $_POST['software'];
}

if(isset($_POST['color'])){
    $form['color'] = $_POST['color'];
}

/*
echo "<pre>";
var_dump($form);
echo "</pre>";
*/

require './cv.phtml';
?>