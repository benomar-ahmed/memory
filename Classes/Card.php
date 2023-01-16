<?php


class Card {

    private $id;
    public $face;
    public $dos;
    public $retourner;

    //  CONSTRUCTEUR

    public function __construct(int $id,string $face,string $dos,bool $retourner)
    {
        $this->id = $id;
        $this->face = $face;
        $this->dos = $dos;
        $this->retourner = $retourner;

    }

    // MÉTHODES

    public function carte()
    {
        
    }  

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of face
     */ 
    public function getFace()
    {
        return $this->face;
    }

    /**
     * Set the value of dos
     *
     * @return  self
     */ 
    public function setDos($dos)
    {
        $this->dos = $dos;

        return $this;
    }

    /**
     * Get the value of retourner
     */ 
    public function getRetourner()
    {
        return $this->retourner;
    }
    
    

}


?>