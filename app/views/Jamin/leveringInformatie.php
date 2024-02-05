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
            <?php

            // var_dump($data['leverancierInfo']);

            foreach ($data['leverancierInfo'] as $leverancier) : ?>

                <tr>
                    <th>Naam Leverancier:</th>
                    <td> <?= $leverancier->Naam ?> </td>
                </tr>
                <tr>
                    <th>Contact persoon Leverancier:</th>
                    <td> <?= $leverancier->ContactPersoon ?> </td>
                </tr>
                <tr>
                    <th>Leverancier Nummer:</th>
                    <td> <?= $leverancier->LeverancierNummer ?> </td>
                </tr>
                <tr>
                    <th>Mobiel:</th>
                    <td> <?= $leverancier->Mobiel ?> </td>
                </tr>
            <?php endforeach ?>
        </thead>
    </table>

    <?php
    // var_dump($data['leveringInfo']);
    // var_dump($data['leverancierInfo']);
    ?>
    <table>
        <tr>
            <th>Naam product:</th>
            <th>Datum Levering:</th>
            <th>Aantal:</th>
            <th>EerstVolgendeLevering:</th>
        </tr>

        <!-- <?php var_dump($data['leveringInfo']);
                ?> -->
        <?php foreach ($data['leveringInfo'] as $levering) :
            // echo $levering->AantalAanwezig;
        ?>

            <?php if ($levering->AantalAanwezig == 0) :
            ?>
                <tr>
                    <td>
                        Er is van dit product op dit moment geen voorraad aanwezig,de verwachte eerstvolgende levering is: 30-04-2023
                    </td>
                </tr>
            <?php else : ?>
                <tr>
                    <td> <?= $levering->Naam ?></td>
                    <td> <?= $levering->DatumLevering ?></td>
                    <td> <?= $levering->Aantal ?></td>
                    <td> <?= $levering->DatumEerstVolgendeLevering ?></td>
                </tr>


            <?php endif; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>