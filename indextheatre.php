<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TicketCine</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <div class="menu1">
    <h1>Culture Nice 🎭</h1> 

    <menu>
      <a href="/TicketCine/index.php">🎟 Menu 🎟</a> 
      <a href="/TicketCine/indexfilm.php"> 🎬 Film 🎬</a>
    </menu>
  </div>
  <div class="allaffiche2">
      <img class="imgt"src="https://files.offi.fr/programmation/1944619/images/600/7dcc6ce77e0392c7dba35de85082be4c.jpg"  alt="">
  
      <img class="imgt" src= "https://files.offi.fr/programmation/1847218/images/600/231636d37aa3b2c453b8f88f59052f95.jpg"  alt="">
        
      <img class="imgt"src="https://files.offi.fr/programmation/2178809/images/600/41f938e936e44659077b1b8bbabb0bf5.jpg"  alt="">
        
   </div> 
</div>
<div class="formulaire2">
    <h3>Entrez la selection:</h3>
     <div class="form2">
    <form action= "indextheatre.php" method="POST" >
        <label>Pièce théâtre:</label>
        <select name="theatre" type="text"> 
            <option value="">--------- Choix ---------</option>
            <option value="Une idée géniale">Une idée géniale</option>
            <option value="L'embarras du choix">L'embarras du choix</option>
            <option value="2000 lieux sous les mers">2000 lieux sous les mers</option>
            
        </select>
        <input type="date"  name="date"  required/>
        <input class="nplace" type="text" name="place" placeholder="N place" required/>
        <span>Horaires:</span>
        <select name="heure" type="text"> 
            <option value="">----- Choix -----</option>
            <option value="10H30">10H30</option>
            <option value="14H00">14H00</option>
            <option value="16H30">16H30</option>
            <option value="20H00">20H00</option>
            
        </select>
        
            
       
        </div>
       <span>Tarif:</span>
        <select name="price" type="text"> 
            <option value="">----- Choix -----</option>
            <option value="Enfant 8€">Enfant (10ans) 6€</option>
            <option value="Adulte 12€">Adulte 8.50€</option>
         </select> 
        
        <button  class="btn2 "type="submit" name="button" valeur="send" class="btn2">Validez la selection</button>
        
    </form>

    
</div>

</body>

</html>

<?php 
require_once __DIR__.'/theatre.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    

        $piece = new TicketTheatre(
            $_POST["theatre"],
            $_POST["date"],
            $_POST["place"],
            $_POST["price"],
            $_POST["heure"],
            
        );
      
    
    echo $piece->affichagePiece();
   
}



    

?>