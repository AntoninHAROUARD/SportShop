<?php
class Article {

    public string $ref;
    public string $title;
    public float $priceWhithoutVat;
    public float $priceCrossedOut;
    public float $vat;
    public bool $new;
    public string $description;
    public int $rate;
    public string $picture;
    public bool $status;

    //Définition du constructeur : appelé lors qu'on instancie la classe, en créant un objet (new) 
    public function __construct(string $ref, string $title, float $priceWhithoutVat, float $priceCrossedOut,float $vat,bool $new, string $description, int $rate, string $picture, bool $status ){
        
        //Notre constructeur assigne les valeurs passées en paramètres à chacune de nos propriétés
        $this->ref = $ref; 
        $this->title = mb_strtoupper($title); 
        $this->priceWhithoutVat = $priceWhithoutVat;
        $this->priceCrossedOut = $priceCrossedOut;
        $this->vat = $vat;
        $this->new = $new;
        $this->description = $description;
        $this->rate = $rate;
        $this->picture = $picture;
        $this->status = $status;
        
    }

    /**
     * Function permettant de retourner le prix TTC
     */
    public function priceVat(){
        $priceIncludingVAT = $this->priceWhithoutVat * 1 + $this->vat / 100;
    }

    /**
     * Function de changer le status d'un article actif / inactif
     */
    public function toggleStatus(){
        if(empty($this->status)):
            $this->status = true;
        else:
            $this->status = false;
        endif;
    }

}