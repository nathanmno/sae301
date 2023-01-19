<?php
class header //remplir avec le nom de la fonction a appeler
{
    function __construct($langue, $title) //mets les variables qui seront les textes dna sle fichier ($titre, $soustitre)
    {
        $html = '
    <!DOCTYPE html>
    <html lang="' . $langue . '">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>BUT MMI CHAMPS | ' . $title . '</title>
    </head>
    <body>
        ';
        echo $html;
    }
}
