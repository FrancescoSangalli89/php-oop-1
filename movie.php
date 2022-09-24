<?php

class Movie {
    public $poster;
    public $title;
    public $director;
    public $release_year;
    public $plot;

    public function __construct($title, $director, $release_year, $plot = null, $poster = null)
    {
        $this->title = $title;
        $this->director = $director;
        $this->release_year = $release_year;
        $this->plot = $plot;
        $this->poster = $poster;
    }

    public function getMovieInfo() {
        echo '<div> <img src="' . $this->poster . '" alt="'. $this->title .' poster" /> </div> <h2>Titolo: ' . $this->title . '</h2> <h3>Regista: '  . $this->director .  '</h3> <div>Anno: '  . $this->release_year .  '</div> <p>Trama: ' . $this->plot . '</p>';
    }
}