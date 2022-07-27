

<?php
// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.

// creo la classe
class Movie {

    // do degli attributi alla classe che verrà poi ereditati dalle instanze
    public $title;

    public $genre;

    public $year;

    public $description;
    
    public $rating;


    public function __construct($_title, $_genre, $_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

   

}

// definisco le instanze
$quartoPotere = new Movie('Quarto Potere', 'Drammatico', '1941');

var_dump($quartoPotere);

$ilPadrino = new Movie('Il Padrino', 'Drammatico', '1972');

var_dump($ilPadrino);

$matrix = new Movie ('Matrix', 'Azione', '1999');

var_dump($matrix);

$guardianiDellaGalassia = new Movie('Guardiani della Galassia', 'Fantascienza', '2014');

var_dump($guardianiDellaGalassia);

$fantozzi = new Movie('Fantozzi', 'Commedia', '1975');

var_dump($fantozzi);

?>



