<?php

final class Formule1 extends Voiture
{
    private $caracteristique = 'monoplace';

    public function getCaracteristique(): string
    {
        return $this->caracteristique;
    }

    public function setCaracteristique(string $caracteristique): void
    {
        $this->caracteristique = $caracteristique;
    }
}
