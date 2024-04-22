<?php


class Book {

    private int $idBook;
    private string $bookName;
    private DateTime $releaseDate;
    private int $nbOfPages;
    private string $summary;
    private Autor $autor;
    private Genre $genre;


    public function __construct (int $idBook, string $bookName, string $releaseDate, int $nbOfPages, string $summary, Autor $autor, Genre $genre) {
        $this->idBook = $idBook;
        $this->bookName = $bookName;
        $this->releaseDate = $releaseDate;
        $this->nbOfPages = $nbOfPages;
        $this->summary = $summary;
        $this->autor = $autor;
        $this->genre = $genre;
        $this->autor = addBook($this);
        $this->genre = addBook($this);
    }

    public function getIdBook()
    {
        return $this->idBook;
    }

    public function setIdBook($idBook)
    {
        $this->idBook = $idBook;

        return $this;
    }

    public function getBookName()
    {
        return $this->bookName;
    }

    public function setBookName($bookName)
    {
        $this->bookName = $bookName;

        return $this;
    }

    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getNbOfPages()
    {
        return $this->nbOfPages;
    }

    public function setNbOfPages($nbOfPages)
    {
        $this->nbOfPages = $nbOfPages;

        return $this;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function __toString() {
        return $this->bookName . " ";
    }
}