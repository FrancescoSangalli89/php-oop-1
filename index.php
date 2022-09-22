<?php

require_once __DIR__ . '/movie.php';

$movie1 = new Movie("Jurassic Park", 
                    "Steven Spielberg", 
                    "1993", 
                    "Su Isla Nublar, un'isola tropicale di proprietà della InGen situata a 120 miglia di distanza dalla Costa Rica, un operaio viene assalito e ucciso da una feroce creatura, custodita in una gabbia che la vittima stava spostando insieme ai colleghi per trasferirla in un recinto più grande. La famiglia dell'uomo fa causa al proprietario della InGen, John Hammond, un industriale miliardario con la passione per i dinosauri. Il paleontologo Alan Grant e la paleobotanica Ellie Sattler vengono quindi contattati da Hammond in persona, che li invita, in cambio di un aiuto economico per finanziare i loro scavi, a visitare la sua isola per formulare una valutazione scientifica relativa alla realizzazione di un suo progetto, su cui però mantiene inizialmente il più assoluto riserbo...", 
                    "https://pad.mymovies.it/filmclub/2006/05/125/locandina.jpg");

$movie2 = new Movie("Il Signore degli Anelli - La compagnia dell'Anello", 
                    "Peter Jackson", 
                    "2002", 
                    "Nella Seconda Era, Sauron, l'Oscuro Signore di Mordor, donò 19 anelli alle razze della Terra di Mezzo: tre ai re degli elfi, sette ai re dei nani e nove ai re degli uomini; tutti loro, però, furono ingannati dall'Oscuro Signore, il quale forgiò l'Unico Anello, in grado di controllare tutti gli altri. Nella battaglia contro Sauron, Isildur, figlio del re degli uomini Elendil, tagliò a Sauron il dito al quale era infilato l'Anello, ottenendo così la vittoria. Egli, preso l'Anello, si lasciò corrompere dal suo potere e ignorò il consiglio dell'elfo Elrond di gettarlo tra le fiamme del vulcano Monte Fato, per sconfiggere definitivamente il nemico. Questa scelta gli costò la vita, portò alla rovina la razza degli uomini e alla perdita dell'Unico Anello il quale, in seguito, pervenne alla creatura Gollum, anche lui consumato dal suo potere. L'Anello, infine, abbandonò Gollum e fu raccolto dall'hobbit Bilbo Baggins...", 
                    "https://pad.mymovies.it/filmclub/2002/01/011/locandina.jpg");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Intro</title>
</head>
<body>
<img src="" alt="">
    <main>

        <h1>Movies</h1>

        <div>
            <?php
                $movie1->getMovieInfo();
            ?>
        </div>

        <div>
            <?php
                $movie2->getMovieInfo();
            ?>
        </div>


    </main>

</body>
</html>