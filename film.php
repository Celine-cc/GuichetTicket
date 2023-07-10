<link rel="stylesheet" type="text/css" href="style.css">
<?php 

class TicketFilm  {

    public string $film;
    public string $date;
    public string $place;
    public string $price;
   
  
    public function __construct($film, $date, $place, $price) {

    $this->film = $film;
    $this->date = $date;
    $this->place = $place;
    $this->price = $price;
    
    }

    public function affichage(){

      
        
        echo "<div class=\"box\">
        <div class=\"ticket\">";
        echo "<span class=\"airline\">CULTURE NICE</span>";
        echo "<span class=\"airline airlineslip\">Culture Nice</span>";
        echo "<span class=\"boarding\">Ticket Cinema</span>";
        echo " <div class=\"content\"><span class=\"jfk\">" . $this->film ."</span>";
    
        echo "<span class=\"jfk jfkslip\">". $this->film ."</span>";    
        echo "<div class=\"sub-content\">
        <span class=\"watermark\">CULTURE NICE</span>";
        echo "<span class=\"name\">Information<br><span>".$this->price ."</span></span>";
        echo "<span class=\"flight\">Date<br><span>". $this->date ."</span></span>";
        echo "<span class=\"gate\">Place<br><span>". $this-> place ."</span></span>";
        echo "<span class=\"boardingtime\">...<br><span>Bonne Séance 🍿</span></span>";
            
        echo "<span class=\"flight flightslip\">Date:<br><span>". $this->date ."</span></span>";
        echo "<span class=\"seat seatslip\">Place<br><span>". $this-> place ."</span></span>";
        echo "<span class=\"name nameslip\">Information<br><span>". $this->price ."</span></span>
      </div>
    </div>
    <div class=\"barcode\"></div>
    <div class=\"barcode slip\"></div>
  </div>
</div>";
    
    }

}