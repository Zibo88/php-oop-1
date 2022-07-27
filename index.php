

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

    // creo il __construct e gli passo gli argometi presenti nell' instanza assegnando ad ogni attributo della classe un argomento
    public function __construct($_title, $_genre, $_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }
    // creo una funzione generi un numero random per ogni film
    public function ratingGenerate(){
        return $this->ratig = rand(1,5);
    }

}

// definisco le instanze
$quartoPotere = new Movie('Quarto Potere', 'Drammatico', '1941');
$quartoPotere->description = "La trama di Quarto potere (1941). Il magnate dell'informazione Charles Foster Kane pronuncia la parola 'Rosebud' immediatamente prima di morire, e un reporter va alla ricerca della soluzione dell'enigma nel suo passato...";
// var_dump($quartoPotere);
// assegno all'attributo rating la funzione ratingGenerate che adesso sarà il suo valore
$quartoPotere->rating = $quartoPotere->ratingGenerate();
var_dump($quartoPotere->ratingGenerate());

$ilPadrino = new Movie('Il Padrino', 'Drammatico', '1972');
$ilPadrino->description = "La trama di Il padrino (1972). Don Vito Corleone è il boss di una famiglia mafiosa di New York, che si è sempre limitata ad alcune attività tra cui il gioco d'azzardo. Quando il gangster sostenuto da un'altra famiglia, i Sollozzo, annuncia di voler intraprendere lo spaccio di droga su tutta New York, Don Vito si oppone e sarà l'inizio di una lunga serie di vendette...";
var_dump($ilPadrino);
// assegno all'attributo rating la funzione ratingGenerate che adesso sarà il suo valore
$ilPadrino->rating = $quartoPotere->ratingGenerate();
var_dump($ilPadrino->ratingGenerate());

$matrix = new Movie ('Matrix', 'Azione', '1999');
$matrix->description = "Un hacker di nome Neo, grazie all'aiuto del misterioso Morpheus, scopre che quella per lui è la 'realtà' non è altro che un facciata, un mondo virtuale creato dal super computer Matrix per controllare gli esseri umani. Ma Morpheus è convinto che Neo sia il prescelto di cui parla un'antica profezia, e che sarà in grado di guidare la rivoluzione contro Matrix.";
var_dump($matrix);
// assegno all'attributo rating la funzione ratingGenerate che adesso sarà il suo valore
$matrix->rating = $quartoPotere->ratingGenerate();
var_dump($matrix->ratingGenerate());

$guardianiDellaGalassia = new Movie('Guardiani della Galassia', 'Fantascienza', '2014');
$guardianiDellaGalassia->description = "La trama di Guardiani della Galassia (2014). Per sfuggire all’ostinato Ronan (Lee Pace), un essere malvagio la cui sfrenata ambizione minaccia l’intero universo, l'esploratore spaziale Peter Quill (Chris Pratt) è costretto ad una scomoda alleanza con quattro improbabili personaggi: Rocket, un procione mercenario dotato di una grande abilità nel maneggiare le armi e nell’ideare strategie di battaglia; Groot, un umanoide dalle sembianze di un albero con limitate capacità comunicative; la letale ed enigmatica Gamora (Zoe Saldana) e il vendicativo Drax il Distruttore (Dave Bautista). Peter farà di tutto per guidare questa squadra improvvisata in un’ultima disperata battaglia per salvare il destino della galassia.";
var_dump($guardianiDellaGalassia);
// assegno all'attributo rating la funzione ratingGenerate che adesso sarà il suo valore
$guardianiDellaGalassia->rating = $quartoPotere->ratingGenerate();
var_dump($guardianiDellaGalassia->ratingGenerate());

$fantozzi = new Movie('Fantozzi', 'Commedia', '1975');
$fantozzi->description = "La trama di Fantozzi (1975). Le giornate del ragionier Ugo Fantozzi, più che un impiegato, uno zerbino umano: i colleghi lo sfruttano per farsi sbrigare il proprio lavoro, il collega ragionier Filini lo coinvolge in iniziative terrificanti, come partite di calcio tra scapoli ed ammogliati, gite aziendali e feste di fine anno. A casa neppure se la passa bene, il ragionier Fantozzi, con sua moglie e Mariangela, la loro terrificante bambina. Innamorato segretamente della collega, la vivace signorina Silvani, Fantozzi tenta sempre di invitarla a pranzo senza successo...";
var_dump($fantozzi);
// assegno all'attributo rating la funzione ratingGenerate che adesso sarà il suo valore
$fantozzi->rating = $quartoPotere->ratingGenerate();
var_dump($fantozzi->ratingGenerate());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <div class='movie-container'>
        <!-- Quarto Potere -->
        <div class="single-movie">
            <h2 class="title"><?php echo $quartoPotere->title?></h2>
            <div class="genre"><?php echo $quartoPotere->genre?></div>
            <div class="year"><?php echo $quartoPotere->year?></div>
            <div class="genre"><?php echo $quartoPotere->description?></div>
            <div class="rating"><?php echo $quartoPotere->rating?></div>
        </div>

         <!-- ilPadrino -->
         <div class="single-movie">
            <h2 class="title"><?php echo $ilPadrino->title?></h2>
            <div class="genre"><?php echo $ilPadrino->genre?></div>
            <div class="year"><?php echo $ilPadrino->year?></div>
            <div class="genre"><?php echo $ilPadrino->description?></div>
            <div class="rating"><?php echo $ilPadrino->rating?></div>
        </div>
        <!-- Matrix -->
        <div class="single-movie">
            <h2 class="title"><?php echo $matrix->title?></h2>
            <div class="genre"><?php echo $matrix->genre?></div>
            <div class="year"><?php echo $matrix->year?></div>
            <div class="genre"><?php echo $matrix->description?></div>
            <div class="rating"><?php echo $matrix->rating?></div>
        </div>

        <!-- GuardianiDellaGalassia -->
        <div class="single-movie">
            <h2 class="title"><?php echo $guardianiDellaGalassia->title?></h2>
            <div class="genre"><?php echo $guardianiDellaGalassia->genre?></div>
            <div class="year"><?php echo $guardianiDellaGalassia->year?></div>
            <div class="genre"><?php echo $guardianiDellaGalassia->description?></div>
            <div class="rating"><?php echo $guardianiDellaGalassia->rating?></div>
        </div>

        <!-- Fantozzi -->
        <div class="single-movie">
            <h2 class="title"><?php echo $fantozzi->title?></h2>
            <div class="genre"><?php echo $fantozzi->genre?></div>
            <div class="year"><?php echo $fantozzi->year?></div>
            <div class="genre"><?php echo $fantozzi->description?></div>
            <div class="rating"><?php echo $fantozzi->rating?></div>
        </div>



    </div>
</body>
</html>



