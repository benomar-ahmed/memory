<?php


class Card {

    private $id;
    public $forme;
    public $paire;
    public $pdo;



    // CONSTRUCTEUR
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=memory;charset=utf8','root','');
    }


    // MÉTHODES


    public function randomChoice()
    {
        return rand(3,12);
    }


    



















}














?>