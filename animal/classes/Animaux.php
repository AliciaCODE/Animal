<?php

abstract class Animaux
{
    private $espece;
    private $race;
    private $couleur;
    private $masse;


    // On définit le constructeur
    public function __construct(string $espece, string $race, string $cou, int $mas)
    {
        // On affecte les paramètres passés à l'objet que l'on va instancier
        // La variable $this désigne l'objet
        $this->espece = $esp;
        $this->race = $rac;
        $this->couleur = $cou;
        $this->masse = $mas;
    }

    public function getEspece(): string
    {
        return $this->espece;
    }

    public function setEspece(string $espece): void
    {
        $this->espece = $espece;
    }

    public function getRace(): string
    {
        return $this->race;
    }

    public function setRace(string $race): void
    {
        $this->race = $race;
    }

    public function getCouleur(): string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }

    public function getMasse(): int
    {
        return $this->masse;
    }

    public function setMasse(int $masse): void
    {
        $this->masse = $masse;
    }

    public function connectionBDD()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;port=3306;dbname=michel', 'root', '');
            return $pdo;
        }

        catch (PDOException $e) {
            Log::logWrite($e->getMessage());
        }
    }
}
