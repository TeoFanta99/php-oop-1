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

        public function showInfo() {
            echo "Titolo: " . $this -> title . ", Genere: " . implode($this -> genres, ', ') . ", Anno: " . $this -> year;  
        }
    }
    
    $movie1 = new Movie('Titanic', array('Romantic', 'Dramatic'), '1997');
    $movie2 = new Movie('Truman Show', array('Comedy', 'Dramatic'), '1998');

    $movie1 -> showInfo();
    echo "<br>";
    $movie2 -> showInfo();



?>