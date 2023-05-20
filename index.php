<?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
    <span>Parcheggio: </span>
    <form action="index.php" method="GET">
        <select name="parcheggio">
            <option value=""></option>
            <option value="si">Si</option>
            <option value="no">No</option>
        </select>
        <select name="valutazione">
            <option value=""></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit">Ricerca</button>
    </form>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Posteggio</th>
        <th scope="col">Voto</th>
        <th scope="col">Distanza</th>
        </tr>
    </thead>
    <tbody>    
        
        <?php
        if ($_GET['parcheggio'] == "" && $_GET['valutazione'] == "") {
            foreach ($hotels as $element) {
                if ($element['parking'] == true) {
                    echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                    "<td>" . $element['description'] . "</td>" . 
                    "<td>" . 'Si' . "</td>" . 
                    "<td>" . $element['vote'] . "</td>" . 
                    "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";
                }else{
                    echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                    "<td>" . $element['description'] . "</td>" . 
                    "<td>" . 'No' . "</td>" . 
                    "<td>" . $element['vote'] . "</td>" . 
                    "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";
                };
            }; 
        }elseif ($_GET['parcheggio'] == "si") {
            foreach ($hotels as $element) {
                if (in_array($element['parking'], $hotels) && in_array($element['vote'] >= $_GET['valutazione'], $hotels)) {
                    if ($element['parking'] == true) {
                        echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                        "<td>" . $element['description'] . "</td>" . 
                        "<td>" . 'Si' . "</td>" . 
                        "<td>" . $element['vote'] . "</td>" . 
                        "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";
                    };
                };
            };
        }elseif ($_GET['parcheggio'] == "no"){
            foreach ($hotels as $element) {
                if (in_array($element['parking'] == false, $hotels) && in_array($element['vote'] >= $_GET['valutazione'], $hotels)) {
                    echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                    "<td>" . $element['description'] . "</td>" . 
                    "<td>" . 'No' . "</td>" . 
                    "<td>" . $element['vote'] . "</td>" . 
                    "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";   
                };
            };
        }elseif($_GET['valutazione']){
            foreach ($hotels as $element) {
                if (in_array($element['parking'] == true, $hotels) && in_array($element['vote'] >= $_GET['valutazione'], $hotels)) {
                    echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                    "<td>" . $element['description'] . "</td>" . 
                    "<td>" . 'Si' . "</td>" . 
                    "<td>" . $element['vote'] . "</td>" . 
                    "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";
                }elseif(in_array($element['parking'] == false, $hotels) && in_array($element['vote'] >= $_GET['valutazione'], $hotels)){
                    echo "<tr>" . "<td>" . $element['name'] . "</td>" .
                    "<td>" . $element['description'] . "</td>" . 
                    "<td>" . 'No' . "</td>" . 
                    "<td>" . $element['vote'] . "</td>" . 
                    "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";
                }
            }
        }     
        ?>
        
    </tbody>
    </table>
</body>
</html>