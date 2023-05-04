<?php

class Genres {
    public $nomeGenere;
    //public $VM18;
    

    public function __construct($genreName){
        $this->nomeGenere = $genreName;
        
    }
}



/*
$horror = new Genres('horror', false);
$fantasy = new Genres('fantasy', false);
$superhero = new Genres('superhero', false);
$love = new Genres('love', false);
$documentary = new Genres('documentary', false);
$hard = new Genres('hard', true);
*/
