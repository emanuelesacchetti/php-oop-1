<?php
require __DIR__ . './Models/db.php';

class Movie {
    public $titolo;
    public $anno;
    public $generi;
    public $voto;

    public function __construct($title, $year, Array $genres, $vote){
        $this->titolo = $title;
        $this->anno = $year;
        $this->generi = $genres;
        $this->voto = $vote;

    }

    public static function getVoteRandom(){
        return rand(0, 10);
    }

    public function seeAllAttribute($object){
        return 'Titolo:' . $object->titolo . '<hr>' . 
                'Anno:' . $object->anno . '<hr>' . 

                'Genere:' . $this->getAllGenres() . '<hr>' . 
                'Voto:' . $object->voto . '<hr><hr>';
    }

    
    public function getAllGenres(){
        $genres = '';
        
        foreach($this->generi as $genere){
            $genres .= $genere->nomeGenere . ' ';
        }
        return $genres;
    }

}



$generiAvengers = [
    new Genres('superhero'),
    new Genres('fantascience')
];


$AvengersI = new Movie('Avengers: Infinity War', 2018, $generiAvengers, Movie::getVoteRandom());
$AvengersE = new Movie('Avengers: Endgame', 2019, $generiAvengers, Movie::getVoteRandom());

//var_dump($AvengersI);
//var_dump($AvengersE);

echo $AvengersI->seeAllAttribute($AvengersI);
echo $AvengersE->seeAllAttribute($AvengersE);

//nel caso di metodo statico avrei potuto usera questa sintassi
//echo Movie::seeAllAttribute($AvengersE);


