<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Site routing</title>
    </head>
<?php include ('header.php'); ?>
<body>

<?php

if($_GET)
{

if($_GET['page'] == 'accueil') 
{
    //afficher page accueil//
    include('vitrine-accueil.html');
}

elseif($_GET['page'] == 'programme')
{
    //afficher page programme//
    include('vitrine-programme.html');  
} 
elseif($_GET['page'] == 'contact')
{
    //afficher page contact//
    include('vitrine-contact.html');
}

elseif($_GET['page'] == 'contact-form')
{
    //afficher page contact-form//
    include('contact-form.php');
}

else
{
    //afficher page error 404//
    include('404.php');
}
}
include ('footer.php');

?>