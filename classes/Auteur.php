<?php


class Autor {

    private int $idAutor;
    private string $firstName;
    private string $lastName;
    private string $sexe;
    private DateTime $birthDate;

    public function __construct(int $idAutor, string $firstName, string $lastName, string $sexe, string $birthDate) {
        $this->idAutor = $idAutor;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->sexe = $sexe;
        $this->birthDate = $birthDate;
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

    public function __toString() {
        return $this->firstName . " " . $this->lastName . " " ;
    }

}