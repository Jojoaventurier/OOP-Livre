<?php


class Author {

    private int $idAuthor;
    private string $firstName;
    private string $lastName;
    private string $sexe;
    private DateTime $birthDay;
    private array $booksWritten;

    public function __construct(int $idAuthor, string $firstName, string $lastName, string $sexe, string $birthDate) {
        $this->idAuthor = $idAuthor;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->sexe = $sexe;
        $this->birthDate = new DateTime($birthDate) ;
        $this->booksWritten = [];
    }

    public function getFirstName()
    {
    return $this->firstName;
    }

    public function setFirstName($firstName)
    {
    $this->firstName = $firstName;

    return $this;
    }

    public function getLastName()
    {
    return $this->lastName;
    }

    public function setLastName($lastName)
    {
    $this->lastName = $lastName;

    return $this;
    }

    public function getSexe()
    {
    return $this->sexe;
    }
    
    public function setSexe($sexe)
    {
    $this->sexe = $sexe;

    return $this;
    }

    public function getBirthDate()
    {
    return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
    $this->birthDate = $birthDate;

    return $this;
    }

    public function getBooksWritten()
    {
        return $this->booksWritten;
    }

    public function setBooksWritten($booksWritten)
    {
        $this->booksWritten = $booksWritten;

        return $this;
    }

    public function addBook(Book $bookWritten) 
    {
        $this->booksWritten[] = $bookWritten;
        array_push();
    }

    public function __toString() {
        return $this->firstName . " " . $this->lastName . " " ;
    }

}