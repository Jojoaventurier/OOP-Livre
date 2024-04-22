<?php


class Book {

    private int $idBook;
    private string $bookName;
    private DateTime $releaseDate;
    private int $nbOfPages;
    private string $summary;
    private Author $author;
    private Genre $genre;


    public function __construct (int $idBook, string $bookName, string $releaseDate, int $nbOfPages, string $summary, Author $author, Genre $genre) {
        $this->idBook = $idBook;
        $this->bookName = $bookName;
        $this->releaseDate = new Datetime($releaseDate);
        $this->nbOfPages = $nbOfPages;
        $this->summary = $summary;
        $this->author = $author;
        $this->genre = $genre;
        $this->author = addBook($this);
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

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    public function __toString() {
        return $this->bookName . " ";
    }
}