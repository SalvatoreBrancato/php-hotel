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

    <?php
        foreach ($hotels as $element) {
            echo $element['name'];
            echo $element['description'];
            echo $element['parking'];
            echo $element['vote'];
            echo $element['distance_to_center'];
        }
    ?>    

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
        // foreach ($hotels as $element) {
        //     echo "<tr>" . "<td>" . $element['name'] . "</td>" .
        //     "<td>" . $element['description'] . "</td>" . 
        //     "<td>" . $element['parking'] . "</td>" . 
        //     "<td>" . $element['vote'] . "</td>" . 
        //     "<td>" . $element['distance_to_center'] . "</td>" . "</tr>";
        // }

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
            }
        }
    ?>
      
    
    
  </tbody>
</table>

</body>
</html>