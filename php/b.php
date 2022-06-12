<?php
include_once 'database.php';
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE haaletus set decision='" . $_POST['decision'] . "' WHERE h_id='" . $_POST['h_id'] . "'");
$message = "Thank you for your vote!";
}
$result = mysqli_query($conn,"SELECT * FROM haaletus WHERE h_id='" . $_GET['h_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheet/b.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title> Retrive data</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"> 
                <form name="frmUser" method="post" action="">
                
                <input type="hidden" name="h_id" class="txtField" value="<?php echo $row['h_id']; ?>">
                
                
                Cast your vote, <label type="text" name="nimi" class="txtField" value="<?php echo $row['nimi']; ?>"><?php echo $row['nimi']; ?></label> :
                
                <br><br>
                <input class="form-check-input" type="radio" id="BIDEN" name="decision" value="BIDEN">
                <label for="html">BIDEN</label>
                
                <br>
                <input class="form-check-input" "float:left;" type="radio" id="TRUMP" name="decision" value="TRUMP">
                <label for="html">TRUMP</label>
                
                <br><br>
                <button type="submit" name="submit" value="Submit" class="but1" >Submit
                </button> 
                
                <section id="snackbar-container"></section>
                <a value="back" onclick="commenceClosing()" class="button7" >Back</a><!---->
                </form>
            </div>
            
                     
            <div class="col">       <!---2 COLUMN---->
                <div>
                   
                    <?php #if(isset($message)) { echo $message; } ?>
                    
                </div>
            </div>
            <div class="col">       <!---3 COLUMN---->
                <h3>Your Decision:<br><br> <?php echo $row['decision'];?></h3>
            </div>
        </div>
    </div>  
    
    
    
   <script>
        function commenceClosing(){
            setTimeout(function(){ 
                window.top.close(); 
            }, 1400);
        }
   </script>
   
<script src="../js/b.js"></script>

</body>
</html>