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
        echo 'Questo film si intitola: ' . $this->title . ', è stato girato da ' . $this->director . ' nel ' . $this->release_year . ', di seguito la trama: ' . '<br>' . $this->plot;
    }
}