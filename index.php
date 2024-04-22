<?php

/*The include and require statements are identical, except upon failure:
	require will produce a fatal error (E_COMPILE_ERROR) and stop the script
    include will only produce a warning (E_WARNING) and the script will continue*/

    require "classes/Author.php";
    require "classes/Genre.php";
    require "classes/Book.php";


$stephane = new Author(0, "Stephane", "SM", "M", "1980-01-01");
$pedagogie = new Genre(0, "Pedagogie");



$book1 = new Book(0, "Le codage en s'amusant", "2010-01-01", 185, "Le livre parfait pour découvrir le codage en s'amusant !", 18, $stephane, $pedagogie);
$book2 = new Book(1, "Le codage pour les gros nullos", "2020-01-01", 242, "Le livre parfait pour apprendre le codage quand on est un gros nullos", 22, $stephane, $pedagogie);

echo $stephane->getBibliography();






