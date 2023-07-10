<link rel="stylesheet" type="text/css" href="style.css">
<?php 

class TicketTheatre  {

    protected string $theatre;
    protected string $date;
    protected string $place;
    protected string $price;
    protected string $heure;
   
  
    public function __construct($theatre, $date, $place, $price, $heure) {

    $this->theatre = $theatre;
    $this->date = $date;
    $this->place = $place;
    $this->price = $price;
    $this->heure = $heure;
    
    }

    public function affichagePiece(){


        echo "<h2 class=\"tticket\">Ticket:</h2>";
        echo '<div class="ticket">
        <h3>' . $this->theatre . '</h3>';
        echo '<p>' . $this->date . '</p>';
        echo '<p>Salle: ' . $this-> place . '</p>';
        echo '<p>' . $this->price . '</p>';
        echo '<p>' . $this->heure . '</p>
        <p>Bonne Séance🍿 </p>
        </div>';
          
    }

    public function getTheatre()
  {
    return $this->theatre;
  }
  
  public function setTheatre($theatre)
  {
    if ($theatre != "") {
      $this->theatre = $theatre;
    }
  }

  public function getDate()
  {
    return $this->date;
  }
  
  public function setDate($date)
  {
    if ($date != "") {
      $this->date = $date;
    }
  }

  public function getPlace($place)
  {
    if ($place != "") {
      $this->place = $place;
    }
  }
  public function setPlace($place)
  {
    if ($place != "") {
      $this->place = $place;
    }
  }


  public function getPrice($price)
  {
    if ($price != "") {
      $this->price = $price;
    }
  }
  public function setPrice($price)
  {
    if ($price != "") {
      $this->price = $price;
    }
  }

  public function getHeure($heure)
  {
    if ($heure != "") {
      $this->heure = $heure;
    }
  }
  public function setHeure($heure)
  {
    if ($heure != "") {
      $this->heure = $heure;
    }
  }







}