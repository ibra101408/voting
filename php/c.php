<?php

include_once 'database.php';

$biden = mysqli_query($conn, "SELECT count(decision) as biden from haaletus WHERE decision = 'BIDEN'");
$b_data = mysqli_fetch_assoc($biden);

$trump = mysqli_query($conn, "SELECT count(decision) as trump from haaletus WHERE decision = 'TRUMP'");
$t_data = mysqli_fetch_assoc($trump);


/*$dataPoints = array(
    array("label" => "TRUMP", "y" => $t_data['trump']),
    array("label" => "BIDEN", "y" => $b_data['biden'])
)*/
?>
<html>
     <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheet/c.css">

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="../assets/trump.png" alt="biden" width="100" height="150">
                    <p class="fs-2" id="num"><?php echo $b_data['biden'];?></p>
                </div>
                <div class="col">
                    <img src="../assets/biden.png" alt="biden" width="100" height="150">
                    <p class="fs-2" id="num"><?php echo $t_data['trump'];?></p>
                </div>
            </div>
        </div>    
    </body>

<!-----poolt - biden ---  vastu - trump-->
</html>

