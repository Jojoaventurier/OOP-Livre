<?php

class Genre {

    private int $idGenre;
    private string $genreName;
    private array $bookList;

    public function __construct(int $idGenre, string $genreName) {
        $this->idGenre = $idGenre;
        $this->genreName = $genreName;
        $this->bookList = $bookList = [];
    }

    public function getIdGenre()
    {
        return $this->idGenre;
    }

    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }

    public function getGenreName()
    {
        return $this->genreName;
    }

    public function setGenreName($genreName)
    {
        $this->genreName = $genreName;

        return $this;
    }

    public function getBookList()
    {
        return $this->bookList;
    }

    public function setBookList($bookList)
    {
        $this->bookList = $bookList;

        return $this;
    }

    public function addBook(Book $bookWritten) 
    {
        $this->bookList[] = $bookWritten;
    }

    public function __toString() {
        return $this->genreName ." ";
    }

}