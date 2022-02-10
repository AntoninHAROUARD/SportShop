<?php
class Category {

    public string $title;
    public bool $status;

    //Définition du constructeur : appelé lors qu'on instancie la classe, en créant un objet (new) 
    public function __construct(string $title, bool $status ){
        
        //Notre constructeur assigne les valeurs passées en paramètres à chacune de nos propriétés
        $this->title = $title; 
        $this->status = $status;  
    }
}