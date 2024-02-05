<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Overzicht Magazijn Jamin</title>
</head>


<body>
    <table>
        <thead>
            <!-- <th>Id</th> -->
            <th>Naam</th>
            <th>Barcode</th>
            <th>AantalAanwezig</th>
            <th>Allergenen Info</th>
            <th>Leverantie Info</th>
            <!-- // $producten->LeverancierId -->
        </thead>
        <tbody>
            <h4> <u>overzicht Magazijn Jamin</u></h4>
            <!-- <?php var_dump($data); ?>; -->
            <!-- een foreach om door heen te loopen en ik heb die data een andere naam gegeven wat er bij het onderwerp hoort -->
            <?php foreach ($data as $producten) {
                // $product = $this->JaminModel->getOverzichtMagazijn();
                // echo '<tr><td>' . $producten->Id . '</td>';
                echo '<td>' . $producten->Naam . '</td>';
                echo '<td>' . $producten->Barcode . '</td>';
                echo '<td>' . $producten->AantalAanwezig . '</td>';
                echo '<td><a href="' . URLROOT . '/Jamin/allergenenOverzicht/"><i class="bi bi-x"></i></a></td>';
                echo '<td>' . '<a href = "' . URLROOT . '/Jamin/leveringInformatie/' . $producten->Id . '"' . '<i class="bi bi-question"></i>' . '</td>
                </tr>';
            } ?>
        </tbody>
    </table>
</body>

</html>