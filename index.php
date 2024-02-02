<?php
    
    class Movie {

        public $title;
        public $genres = array();
        public $year;

        public function __construct($title, $genres, $year) {
            $this -> title = $title;
            $this -> genres = $genres;
            $this -> year = $year;
        }

        public function getTitle() {
            return $this -> title;
        }

        public function setTitle($title) {
            $this -> title = $title; 
        }

        public function getGenres() {
            return $this -> genres;
        }

        public function setGenres($genres) {
            $this -> genres = $genres; 
        }
    }
    
    $movie1 = new Movie('Titanic', array('Romantic', 'Dramatic'), '1997');
    $movie2 = new Movie('Truman Show', array('Comedy', 'Dramatic'), '1998');

    echo '<h2>Film 1</h2>';
    echo $movie1 -> title;
    echo '<br>';
    echo implode($movie1 -> genres, ', ');
    echo '<br>';
    echo $movie1 -> year;

    echo '<br><br>';

    echo '<h2>Film 2</h2>';
    echo $movie2 -> title;
    echo '<br>';
    echo implode($movie2 -> genres, ', ' );
    echo '<br>';
    echo $movie2 -> year;

?>