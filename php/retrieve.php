<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM haaletus");
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheet/retrieve.css">
    <meta charset="utf-8">
    <title> Retrive data</title>
    </head>
    <body>
        <?php
            if (mysqli_num_rows($result) > 0) {
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <table id="table" class="table">
                        <tr>
                            <td>id</td>
                            <td>Nimi</td>
                            <td>Aeg</td>
                            <td>Otsus</td>
                        </tr>
                        <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["h_id"]; ?></td>
                            <td><?php echo $row["nimi"]; ?></td>
                            <td><?php echo $row["aeg"]; ?></td>
                            <td><?php echo $row["decision"]; ?></td>
                        </tr>
                        <?php
                            $i++;
                            }
                        ?>
                    </table>
                    
                </div>     <!--1 COL-->
                <div class="col">   <!--2 COL-->
                    
                </div>
                    <!--3 COL-->
            </div>
        </div>
        <?php
            }
            else{
                echo "No result found";
            }
        ?>
    </body>
</html>