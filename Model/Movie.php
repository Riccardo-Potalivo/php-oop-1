<?php

class Movie
{
    private int $id;
    private string $title;
    private string $poster_path;
    function __construct($id, $title, $img)
    {
        $this->id = $id;
        $this->title = $title;
        $this->poster_path = $img;
    }

    public function printCArd()
    {
        $img = $this->poster_path;
        $title = $this->title;

        include __DIR__ . '/../Views/card.php';
    }

}

$movieDb = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movieDb, true);
$movies = [];

foreach ($movieList as $movie) {
    $movies[] = new Movie($movie['id'], $movie['title'], $movie['poster_path']);
}

// var_dump($movies[0]);

// var_dump($movies[1]);


?>