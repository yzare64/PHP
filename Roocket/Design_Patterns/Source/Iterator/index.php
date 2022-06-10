<?php
//
//interface CollectionIterator
//{
//    public  function  createNormalIterator();
//}

//interface  MoviesIterator
//{
//    public  function  hasNext();
//    public  function  getNext();
//
//}

class Movie
{
    private $title;
    private $releaseYear;

    public function __construct($title,$releaseYear)
    {
        $this->title=$title;
        $this->releaseYear=$releaseYear;
    }

    public function showInfo()
    {
        echo  "<strong>Movie:</strong>{$this->title}({$this->releaseYear})<br>";
    }

}

class  NormalMoviesIterator implements Iterator
{
    private $moviePosition=0;
    private $movieList;

    public function __construct(MovieList $movieList)
    {
        $this->movieList=$movieList;

    }



    public function current()
    {
        return $this->movieList->getMovies()[$this->moviePosition];
    }

    public function next()
    {
        $this->moviePosition+=1;
    }

    public function key()
    {
        return $this->moviePosition;
    }

    public function valid()
    {
        return isset($this->movieList->getMovies()[$this->moviePosition]);
    }

    public function rewind()
    {
        $this->moviePosition=0;
    }
}

class MovieList implements IteratorAggregate
{
    private  $movies=[];

    public function addMovie(Movie  $movie)
    {
        $this->movies[]=$movie;
    }

    public function remove(Movie  $movie)
    {
        $this->movies= array_filter($this->movies,function ($child) use ($movie)
        {
            return $child!=$movie;
        });
    }

    /**
     * @return array
     */
    public function getMovies()
    {
        return $this->movies;
    }


//    public function createNormalIterator()
//    {
//        return new NormalMoviesIterator($this);
//    }

    public function getIterator()
    {
        return new NormalMoviesIterator($this);
    }
}



$movie1= new Movie("film1","2009");
$movie2= new Movie("film2","2010");
$movie3= new Movie("film3","2011");
$movie4= new Movie("film4","2012");

$movieList=new MovieList();
$movieList->addMovie($movie1);
$movieList->addMovie($movie2);
$movieList->addMovie($movie3);
$movieList->addMovie($movie4);

$iterator= $movieList->getIterator();

// روش اول
//while ($iterator->valid())
//{
//    $value=$iterator->current();
//
//    $value->showInfo();
//    $iterator->next();
//}

// روش دوم
foreach ($iterator as $value)
{

    $value->showInfo();
}