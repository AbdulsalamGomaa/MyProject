<?php

if ($_POST) {

    switch($_POST) {

        case $_POST['physics'] <= 0:
        case $_POST['chemistry'] <= 0:
        case $_POST['biology'] <= 0:
        case $_POST['mathematics'] <= 0:
        case $_POST['computer'] <= 0:
        $message = "<div class='alert alert-danger'>
                Inputs Can't Be Empty, Else Degree Can't Be '0' Or Less
                </div>";
            break;
        case $_POST['physics'] > 50:
        case $_POST['chemistry'] > 50:
        case $_POST['biology'] > 50:
        case $_POST['mathematics'] > 50:
        case $_POST['computer'] > 50:
        $message = "<div class='alert alert-danger'>
                Degree can't be Larger than '50' In Each Input
                </div>";
                
            break;    
        default:
        $physics = $_POST['physics'];
        $chemistry = $_POST['chemistry'];
        $biology = $_POST['biology'];
        $mathematics = $_POST['mathematics'];
        $computer = $_POST['computer'];
        $total = ((int)$physics + (int)$chemistry + (int)$biology + (int)$mathematics + (int)$computer)/250*100;
        if ($total < 40 && $total > 0) {

            $percentage = "<div class='alert alert-success'>". 
                '<b>Student Percentage Is:</b> ' . '<b>' . $total . '</b>'. '<b>% (Grade F)</b>' 
            ."</div>";

        }elseif ($total >= 40 && $total < 60) {

            $percentage = "<div class='alert alert-success'>". 
                '<b>Student Percentage Is:</b> ' . '<b>' . $total . '</b>'. '<b>% (Grade E)</b>' 
            ."</div>";
            
        }elseif ($total >= 60 && $total < 70) {

            $percentage = "<div class='alert alert-success'>". 
                '<b>Student Percentage Is:</b> ' . '<b>' . $total . '</b>'. '<b>% (Grade D)</b>' 
            ."</div>";
            
        }elseif ($total >= 70 && $total < 80) {

            $percentage = "<div class='alert alert-success'>". 
                '<b>Student Percentage Is:</b> ' . '<b>' . $total . '</b>'. '<b>% (Grade C)</b>' 
            ."</div>";
            
        }elseif ($total >= 80 && $total < 90) {

            $percentage = "<div class='alert alert-success'>". 
                '<b>Student Percentage Is:</b> ' . '<b>' . $total . '</b>'. '<b>% (Grade B)</b>' 
            ."</div>";  
        }else {

            $percentage = "<div class='alert alert-success'>". 
                '<b>Student Percentage Is:</b> ' . '<b>' . $total . '</b>'. '<b>% (Grade A)</b>' 
            ."</div>";
        }
    }
}    
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-danger mt-5">
                    <h1>Students' grades</h1>
                </div>
                <div class="col-4 offset-4 mt-3">
                    <div class="col-12 text-center text-info mt-1">
                        <h3>Subjects:</h3>
                    </div>
                    <form  method="post">
                        <div class="form-group">
                            <label for="number" class="text-success mt-3 font-weight-bold h5">Physics:</label>
                            <input type="number" name="physics" id="number" class="form-control"> <div></div>
                            <label for="number" class="text-success mt-3 font-weight-bold h5">Chemistry:</label>
                            <input type="number" name="chemistry" id="number" class="form-control"> <div></div>
                            <label for="number" class="text-success mt-3 font-weight-bold h5">Biology:</label>
                            <input type="number" name="biology" id="number" class="form-control"> <div></div>
                            <label for="number" class="text-success mt-3 font-weight-bold h5">Mathematics:</label>
                            <input type="number" name="mathematics" id="number" class="form-control"> <div></div>
                            <label for="number" class="text-success mt-3 font-weight-bold h5">Computer:</label>
                            <input type="number" name="computer" id="number" class="form-control"> <div></div>
                        </div>
                        <div class="form-group">
                            <button name="button" value="submit" class="btn btn-outline-secondary rounded form-control">Submit</button>
                        </div>
                    </form>

                    <div>
                        <?php
                            if(isset($message)) {echo $message;}else {if(isset($percentage)) {echo $percentage;}}
                        ?>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>