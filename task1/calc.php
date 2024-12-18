<?php

if ($_POST) {
    

    $number_1 = $_POST['n1'];
    $number_2 = $_POST['n2'];
    $submit = $_POST['sub'];
    if($submit == '+') {
        $result = (float)$number_1 + (float)$number_2;

    }elseif($submit == '-') {
        $result = (float)$number_1 - (float)$number_2;

    }elseif($submit == 'x') {
        $result = (float)$number_1 * (float)$number_2;

    }

    if($submit == '/') {
        if (empty($number_1) && empty($number_2)){

            $result = "0";    
        }else {
            $result = (float)$number_1 / (float)$number_2;
        }
    }

    switch($result) {
        case empty($number_1):
        case empty($number_2):
            $result = "";
            break;
        

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
                <div class="col-4 offset-4 mt-3">
                    <div class="col-12 text-center text-danger mt-5">
                        <h1>Calculator</h1>
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <label for="number" class="text-dark mt-3 font-weight-bold h5">Number 1:</label>
                            <input type='number' name="n1" id="number" class="form-control">
                            <label for="number" class="text-dark mt-3 font-weight-bold h5">Number 2:</label>
                            <input type='number' name="n2" class="form-control">
                            <div class="form-group mt-4 d-flex justify-content-around">
                                <input type="submit" name="sub" value="+" class="btn btn-primary col-2">
                                <input type="submit" name="sub" value="-" class="btn btn-dark col-2">
                                <input type="submit" name="sub" value="x" class="btn btn-success col-2">
                                <input type="submit" name="sub" value="/" class="btn btn-danger col-2">
                            </div>
                            <div class="form-group mt-4 d-flex ">
                                <span class="text-primary font-weight-bold h5">Result:</span>
                                <span class="text-success font-weight-bold h5 p-2 col-4 text-center ml-5">
                                    <?php if(isset($result)) {echo $result;}else{if(isset($nothing)) {echo $nothing;}} ?>
                                </span>
                            </div>
                        </div>
                    </form>
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

