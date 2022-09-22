<?php

class Movie {
    public $title;
    public $director;
    public $release_year;
    public $plot;

    public function __construct($title, $director, $release_year, $plot = null)
    {
        $this->title = $title;
        $this->director = $director;
        $this->release_year = $release_year;
        $this->plot = $plot;
    }

    public function getMovieInfo() {
        echo '<h2>titolo: ' . $this->title . '</h2>  <h3>Regista: '  . $this->director .  '</h3>  <div>Anno: '  . $this->release_year .  '</div>  <p>Trama: ' . $this->plot . '</p>';
    }
}