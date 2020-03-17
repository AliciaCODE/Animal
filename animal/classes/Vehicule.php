<?php

abstract class Vehicule
{
    private $marque;
    private $modele;
    private $couleur;
    private $masse;
    private $vitesse = 0;

    // On définit le constructeur
    public function __construct(string $mar, string $mod, string $cou, int $mas)
    {
        // On affecte les paramètres passés à l'objet que l'on va instancier
        // La variable $this désigne l'objet
        $this->marque = $mar;
        $this->modele = $mod;
        $this->couleur = $cou;
        $this->masse = $mas;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function setModele(string $modele): void
    {
        $this->modele = $modele;
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

    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse): void
    {
        $this->vitesse = $vitesse;
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
