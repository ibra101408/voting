<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM haaletus");
?>
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="../stylesheet/style.css">

    <body>
        <div class = "container">
            <div class = "row">
                <div class = "col">         <!--FIRST COL-->
                    <table class="table">
                        <form action="b.php" method="post">   
                            <tr class="a_table_tr">
                                <td class="a_table_td">id</td>
                                <td class="a_table_td">Name</td>
                                <td class="a_table_td" id="voting">Vote</td>
                            </tr>
                            <?php
                                $i=0;
                                while($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row["h_id"]; ?></td>
                                <td><?php echo $row["nimi"]; ?></td>
                                <td><a id="links" class="voting" href="javascript:void(0);"
                                NAME="My Window Name"  title=" My title here "
                                onClick=window.open("b.php?h_id=<?php echo $row['h_id']; ?>","Ratting","width=501,height=270,0,status=0,scrollbars=10");>Click</a></td>
                            </tr>
                        </form>
                        </div>
                        <?php
                            $i++;   
                            }
                        ?>
                        
                    </table>
                </div>
                <div class = "col">     <!--SECOND COL-->
                    <span class="fs-2">Voting</span>
                    <section id="snackbar-container"></section>
                </div>  
               
                <div id="thirdCol" class = "col">  <!--THIRD COL -->
                    <div id="thirdCol" class="fs-3">
                        <p><a class="links" href="c.php" rel="modal:open">Results</a></p>
                        
                        <p><a id="list" class="links" href="retrieve.php" rel="modal:open">List</a></p>
                    </div>
                    
                    <table id="timer">
                        <tr>
                            <td><div id="timeM" class="fs-4"></div><!--TIMER--></td>
                            <td><div id="timeS" class="fs-3"></div></td>
                        </tr>
                    </table>
                        
                    <script src="../js/timer.js"></script>
                </div>
            </div>
        </div>
    </body>
</html>