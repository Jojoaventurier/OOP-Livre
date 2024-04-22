<?php

class Genre {

    private int $idGenre;
    private string $genreName;

    public function __construct(int $idGenre, string $genreName) {
        $this->idGenre = $idGenre;
        $this->genreName = $genreName;
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

    public function __toString() {
        return $this->genreName ." ";
    }
}