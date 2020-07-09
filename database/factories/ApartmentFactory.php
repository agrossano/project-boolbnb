<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Apartment;
use Faker\Generator as Faker;

$factory->define(Apartment::class, function (Faker $faker) {
    return [
      'title' => $faker -> randomElement($array = array ("TRASTEVERE SOFT APARTMENT INN","Il Cavallino","Santa Marta, appartamento con terrazza","Marconi Apartment 1","Flower House","New City Center Duomo","Appartamento Sole","Crêuza da me","Nennolina","A casa di nonna Elena","La casetta di MIRO")),
      'description' => $faker -> randomElement($array = array ("Delizioso appartamento in strada tranquilla nel cuore di Trastevere. Le caratteristiche della casa, in tutto e una zona soggiorno a pianta aperta per creare un'atmosfera familiare. È delizioso per 2 ospiti. Possibilità di aggiungere 3 persona a pagamento. Una scelta perfetta se stai cercando una sistemazione elegante e confortevole nel cuore di Roma.","Mini appartamento nel cuore della città che comprende cucina con tutto il necessario per la prima colazione, bagno con set di cortesia e la camera da letto. A pochi passi,infatti ci sono delle scale che in 5 minuti vi conducono nel vivissimo centro storico e sul Lungomare Trieste .Il porto è a un 1 km e mezzo , l'appartamento è ben collegato con le principali strade ed autostrade.","Monfenera apartment è composto da un ingresso su cucina dotata di frigo, forno a microonde e macchinetta caffè, un bagno con doccia, camera da letto con letto matrimoniale e tv.
      Sito a pochi passi dal mercato storico di Ballarò, dalla Cattedrale,dal Palazzo Reale,dalla Cappella Palatina e dal centro storico.","Mini appartamento indipendente, di nuovissima ristrutturazione, inserito in un immobile dell'800 appena ristrutturato.Il tutto situato nel centro storico di Palermo, a pochi metri dal mercato storico di Ballarò, e dalla stazione ferroviaria, a poca distanza, da percorrere anche a piedi, dai maggiori siti turistici e culturali.","Santa Marta Suites & Apartments è una dimora storica di inizi ‘900, sapientemente restaurata nel pieno rispetto della tradizione costruttiva salentina e della storia dell’edificio.","Piccolo appartamento su 2 piani completo di cucina e bagno. Letto Francese (da una piazza e mezzo). Si trova nel centro di Cavallino. A soli 5 km da Lecce y 20 km dalle spiagge di San Foca e Torre dell'orso. Facilitá di parcheggio nelle vicinanze", "A 5 minuti dalla stazione ferroviaria/metro Genova Brignole e dall'uscita autostradale Genova Est, ad una fermata di metro dal centro storico più grande del mondo, comodissima per lo stadio Luigi Ferraris e nei pressi del cimitero monumentale di Staglieno.
      La casetta è un open space per 2/3 persone caratterizzato da una bella trave a vista e soffitti bassi, che la rendono particolarmente accogliente.")),
      'rooms_number' => $faker -> numberBetween($min = 1, $max = 8),
      'toilets_number' => $faker -> numberBetween($min = 1, $max = 5),
      'beds_number' => $faker -> numberBetween($min = 1, $max = 20),
      'square_metres' => $faker -> numberBetween($min = 10, $max = 600),
      'price_per_day' => $faker -> numberBetween($min = 50, $max = 900),
      'image' => $faker -> imageUrl($width = 640, $height = 480),
      'is_visible' => $faker ->  boolean()
    ];
});
