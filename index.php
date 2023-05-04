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

}

$AvengersInfinityWar = new Movie('Avengers: Infinity War', 2018, 'Superhero', Movie::getVoteRandom());
$AvengersEndgame = new Movie('Avengers: Endgame', 2019, 'Superhero', Movie::getVoteRandom());

var_dump($AvengersInfinityWar);
var_dump($AvengersEndgame);

