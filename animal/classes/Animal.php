<?php

class Animaux extends Animal
{
    protected $manger = nouriture;

    // Destructeur appelé automatiquement à la fin de l'exécution du script
    public function __destruct()
    {
        echo 'Object destroyed !!!';
    }
}
