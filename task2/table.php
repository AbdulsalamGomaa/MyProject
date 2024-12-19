<?php
// dynamic table => 3 levels only
// dynamic rows //4 
// dynamic columns // 4
// check if gender of user == m ==> male // 1
// check if gender of user == f ==> female // 1
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running',
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        'data' => [1,2,3]
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'data' => [1,2]
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'data' => []
    ],
];

$table = "<div class='container'>";
    $table .= "<table class='table'>
            <thead>";
            $table .= "<tr>";
                foreach($users[0] as $tag => $user) {
                    $table .= "<th>$tag</th>";
                }
            $table.=  "</tr>";
    $table .= "</thead>
            <tbody>";
                foreach($users as $index => $user) {
                    $table .= "<tr>";
                        foreach($user as $tag => $info) {
                            $table .= "<td>";
                                if(gettype($info) == 'object' || gettype($info) == 'array') {
                                    foreach($info as $i_OR_K => $v) {
                                        if($tag == 'gender') {
                                            if($v == 'm') {
                                                $v = 'male';
                                            }else {
                                                $v = 'female';
                                            }
                                        }
                                        $table .= $v . ', ';
                                    }
                                }else {
                                    $table .= $info;
                                }
                            $table .= "</td>";    
                        }
                    $table .= "</tr>";
                }    
    $table .= "</tbody>
    </table>";
$table .= "</div>";
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
        <?= $table ?>
        
        <div class="container">
            <table class="table mt-5">
                <thead>
                    <tr>
                    <?php foreach($users[0] as $tag => $user) { ?>
                        <th><?= $tag ?></th>
                    <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $index => $user) { ?>
                        <tr>
                            <?php foreach($user as $tag => $info) { ?>
                                <td>
                                    <?php if(gettype($info) == 'object' || gettype($info) == 'array') {
                                        foreach($info as $i_OR_k => $v) {
                                            if($tag == 'gender') {
                                                if ($v == 'm') {
                                                    $v = 'male';
                                                }else {
                                                    $v = 'female';
                                                }
                                            }
                                            echo $v . ', ';
                                        }
                                    }else {
                                        echo $info;
                                    } ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
