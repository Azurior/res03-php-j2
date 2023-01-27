<?php 

$about = "about";
$contact = "contact";


if(isset($_GET['route']) && empty($_GET['route'])){
    require './home.phtml';
}

if(isset($_GET['route']) === $about){
    require './about.phtml';
}

if(isset($_GET['route']) === $contact){
    require './contact.phtml';
}


?>