<?php

class Movie
{
    public int $id;
    public string $title;
    function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

}

$movieDb = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movieDb, true);
$movies = [];

foreach ($movieList as $movie) {
    $movies[] = new Movie($movie['id'], $movie['title']);
}

var_dump($movies[0]);
echo $movies[0]->id;
echo $movies[0]->title;

var_dump($movies[1]);
echo $movies[1]->id;
echo $movies[1]->title;


?>