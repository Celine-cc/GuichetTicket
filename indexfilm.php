<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>TicketCine</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  
<div class="menu1">
    <h1>Culture Nice 🎬 </h1> 

        <menu>
        <a href="/TicketCine/index.php">🎟 Menu 🎟 </a>
        <a href="/TicketCine/indextheatre.php">🎭 Théâtre 🎭</a>
    </menu>
</div>

<div class="allaffiche">
    <div class="affichebtn">
        <img class="img1"src="https://fr.web.img6.acsta.net/c_310_420/pictures/21/06/30/13/37/5245550.jpg"  alt="">
    </div>
    <div class="affichebtn">
        <img class="img3" src= "https://cinedweller.com/wp-content/uploads/2020/09/jungle-affiche-400x650.jpg.webp" alt="">
        <span class="interdit">🚫 -16 ANS</span>
        
    </div>
    <div class="affichebtn">
        <img class="img1"src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTUAUxSDui3rCBckIK598eW64NkDND3xeB_22JM8Kf2c3jXwDI1"  alt="">
        
    </div> 
</div>
<div class="formulaire">
    <h3>Entrez la selection:</h3>
    <form action= "indexfilm.php" method="POST" class="form">
        <span>Choix du film:</span>
        <select name="film" type="text"> 
            <option value="">----- Choix -----</option>
            <option value="BLACK WIDOW">BlackWidow</option>
            <option value="JUNGLE">Jungle</option>
            <option value="MAURICE, le chat fabuleux">Maurice</option>
            
        </select>
        <input type="date"  name="date"  required/>
        <input class="nplace" type="text" name="place" placeholder="N place" required/>
        <span>Tarif:</span>
        <select name="price" type="text"> 
            <option value="">----- Choix -----</option>
            <option value="Enfant 8€">Enfant (10ans) 8€</option>
            <option value="Adulte 12€">Adulte 12€</option>
            
        </select>

        <button  class="btn "type="submit" name="button" valeur="send" class="btn2">Validez la selection</button>
    
    </form>
</div>
</body>

</html>

<?php 
require_once __DIR__.'/film.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if ($_POST["price"] === "Enfant 8€") {
        if($_POST["film"] === "JUNGLE") {
            echo "<p class=\"messerror\">Selection interdite</p>";
            exit();
        }
    }

        $film = new TicketFilm(
            $_POST["film"],
            $_POST["date"],
            $_POST["place"],
            $_POST["price"],
            
        );

    
    echo $film->affichage();

}



    

?>