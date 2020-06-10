<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        class Movie {
          public $title;
          private $rating;

          function __construct($title, $rating){
            $this->title = $title;
            $this->setRating($rating);
          }

          function getRating(){
            return $this->rating;
          }

          function setRating($rating){
            if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "TV-14" || $rating == "R" || $rating == "TV-MA" || $rating == "NR"){
                $this->rating = $rating;
            }else{
              $this->rating = "NR";
            }
          }

        }
        $theLastDaysOfAmericanCrime = new Movie("The Last Days of American Crime", "TV-MA");
        $waspNetwork = new Movie("Wasp Network", "TV-MA");
        $legalizeEverything = new Movie("Eric Andre, Legalize Everything", "TV-MA");
            $waspNetwork->setRating("dog");
        
        echo "<h1>2020 Netflix Original Movies</h1>";
        echo "<hr>";
        echo "<br>";
        echo $theLastDaysOfAmericanCrime->title;
        echo "<br>";
        echo $theLastDaysOfAmericanCrime->getRating();
        echo "<br></br>";
        echo $waspNetwork->title;
        echo "<br>";
        echo $waspNetwork->getRating();
        echo "<br></br>";
        echo $legalizeEverything->title;
        echo "<br>";
        echo $legalizeEverything->getRating();
        echo "<br></br>";

     ?>

  </body>
</html>
