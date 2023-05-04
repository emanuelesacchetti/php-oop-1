<?php

class Movie {
    public $titolo;
    public $anno;
    public $genere;
    public $voto;

    public function __construct($title, $year, $genre, $vote){
        $this->titolo = $title;
        $this->anno = $year;
        $this->genere = $genre;
        $this->voto = $vote;
    }

    public static function getVoteRandom(){
        return rand(0, 10);
    }

    public function seeAllAttribute($object){
        'Titolo:' . $object->titolo . '<hr>' . 
        'Anno:' . $object->anno . '<hr>' . 
        'Genere:' . $object->genere . '<hr>' . 
        'Voto:' . $object->voto ;
    }

}

$AvengersI = new Movie('Avengers: Infinity War', 2018, 'Superhero', Movie::getVoteRandom());
$AvengersE = new Movie('Avengers: Endgame', 2019, 'Superhero', Movie::getVoteRandom());

//var_dump($AvengersI);
//var_dump($AvengersE);

echo $AvengersI->seeAllAttribute($AvengersI);
//echo Movie::seeAllAttribute($AvengersE);

echo 'Titolo:' . $AvengersI->titolo . '<hr>' . 
    'Anno:' . $AvengersI->anno . '<hr>' . 
    'Genere:' . $AvengersI->genere . '<hr>' . 
    'Voto:' . $AvengersI->voto . '<br>';

