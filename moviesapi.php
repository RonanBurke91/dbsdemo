<?php

   class Movie {
   
     public $director;
     public $title;
     public $rating;
     
    }
    
    
    /*declare your variable */
    $movies = array ();
    

    /*add a movie */
    $movie = new movie();
    $movie->director = "Christopher Nolan";
    $movie->title = "Batman";
    $movie->rating="18";
    
    /*populate your array with a list of dummy strings */
      for($i = 0; $i < 10; $i++)  {
         $movie = new movie();
         $movie->director = "Director $i";
         $movie->title = "title $i";
         $movie->rating="PG $i";
         $movies[]=$movie;
         
       }
       
       header('Content-Type: aoolication/json');
