<?php
include_once 'database.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="./styleIndex.css">
        <meta charset="utf-8">
    </head>
    <body>
     
    
    <div class="container">
        <div class="row">
         <div class="col"> 
            <div class="info">
                <label for="haaletajaNimi" class="fs-4">You have only <b>1</b> minute to <b>vote!</b> <br> Just do it!</label>
                <br><br>
                <!--<a href ="a.php"  ><input style="background-color:#2979FF" type="submit" name="nameSave" value="Start" class="butto7"></a></input>  WHERE decision is not null  
                
                style="background:#e0e5ec,
                        padding: 10px 25px,
                        border: 2px solid #000,
                        font-family: 'Lato', sans-serif,
                        font-weight: 500,
                        background: transparent,
                        cursor: pointer,
                        transition: all 0.3s ease,
                        position: relative,
                        display: inline-block;"
                
                
                -->
                
                <a href="a.php" type="submit" name="nameSave" class="button7">Start!</a>
            </div>
          </div>
          <div class="col">
              <span id="heading" class="fs-2">Voting</span>
          </div>
          <div class="col"></div>
          
        </div>
    </div>
    <?php
        $result1 = mysqli_query($conn, "UPDATE haaletus SET decision=NULL, aeg=NULL");
        $data1 = mysqli_fetch_array($result1);
    ?>
    </body>
</html>