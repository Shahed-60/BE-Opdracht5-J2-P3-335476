<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>levering Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <h4><u>Levering's Informatie</u></h4>
    <table>
        <thead>
            <tr>
                <th>Naam Leverancier:</th>
                <td><?= $data['NaamLeverancier'] ?></td>
            </tr>
            <tr>
                <th>Contact persoon Leverancier:</th>
                <td><?= $data['ContactPersoonLeverancier'] ?></td>
            </tr>
            <tr>
                <th>Leverancier Nummer:</th>
                <td><?= $data['LeverancierNummer'] ?></td>
            </tr>
            <tr>
                <th>Mobiel:</th>
                <td><?= $data['Mobiel'] ?></td>
            </tr>
        </thead>
        <tbody>
            <?php
            // var_dump($data);
            var_dump($data['Naam']);
            ?>

            <?php foreach ($data as $levering) {

                // $product = $this->JaminModel->getOverzichtMagazijn();

                // echo '<tr><td>' . $producten->Id . '</td>';
                echo '<td>' . $levering->Naam . '</td>';
                echo '<td>' . $levering->DatumLevering . '</td>';
                echo '<td>' . $levering->Aantal . '</td>';
                echo '<td>' . $levering->DatumEerstVolgendeLevering . '</td>
                 </tr>';
            } ?>
        </tbody>
    </table>

</body>

</html>