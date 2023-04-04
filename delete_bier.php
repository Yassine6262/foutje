<?php
    echo "<h1>Delete Bier</h1>";
    require_once('functions.php');

  
    

    if(isset($_POST) && isset($_POST['btn_wzg'])){
        DeleteBier($_POST);

        header('Location: crud_bieren.php');
    }

    if(isset($_GET['biercode'])){  
        echo "Data uit het vorige formulier:<br>";
        
        // Haal alle info van de betreffende biercode $_GET['biercode']
        $biercode = $_GET['biercode'];
        $row = GetBier($biercode);
    }
   ?>

<html>
    <body>
        <form method="post">
          Biercode:<input type="" name="biercode" value="<?php echo $row['biercode'];?>"><br>
        Naam:<input type="" name="naam" value="<?php echo $row['naam'];?>"><br> 
        Soort: <input type="text" name="soort" value="<?= $row['soort']?>"><br>
        Stijl: <input type="text" name="stijl" value="<?= $row['stijl']?>"><br>
        Alcohol: <input type="text" name="alcohol" value="<?= $row['alcohol']?>"><br>
        Brouwcode: <input type="text" name="brouwcode" value="<?= $row['brouwcode']?>"><br><br>
            
            <input type="submit" name="btn_wzg" value="Delete"><br>
        </form>
    </body>
</html>