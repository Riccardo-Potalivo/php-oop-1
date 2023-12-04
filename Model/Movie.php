<?php

class Movie
{
    private int $id;
    private string $title;
    private string $poster_path;
    private string $overview;
    private string $vote_average;
    private string $original_language;
    function __construct($id, $title, $img, $overview, $vote, $lang)
    {
        $this->id = $id;
        $this->title = $title;
        $this->poster_path = $img;
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->original_language = $lang;
    }

    public function printCArd()
    {
        $img = $this->poster_path;
        $title = $this->title;
        $lang = $this->original_language;
        $overview = $this->overview;
        $vote = $this->vote_average;

        include __DIR__ . '/../Views/card.php';
    }

}

$movieDb = file_get_contents(__DIR__ . '/movie_db.json');
$movieList = json_decode($movieDb, true);
$movies = [];

foreach ($movieList as $movie) {
    $movies[] = new Movie($movie['id'], $movie['title'], $movie['poster_path'], $movie['overview'], $movie['vote_average'], $movie['original_language']);
}

// var_dump($movies[0]);

// var_dump($movies[1]);


?>