<?php

/*The include and require statements are identical, except upon failure:
	require will produce a fatal error (E_COMPILE_ERROR) and stop the script
    include will only produce a warning (E_WARNING) and the script will continue*/

    require "/classes/Author.php";
    require "/classes/Book.php";
    require "/classes/Genre.php";


$author1 = new Author(0, "Stephane", "SM", "M", "1980-01-01");

$book1 = new Book(0, "Le codage en s'amusant", "2010-01-01", 185, "Le livre parfait pour découvrir le codage en s'amusant !");

var_dump($book1);