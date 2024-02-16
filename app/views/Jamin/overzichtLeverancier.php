<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>overzicht Leverancier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/style.css">

</head>

<body>
    <h5><u>Overzicht Levernacier</u></h5>

    <table>
        <thead>
            <tr>
                <td>Naam</td>
                <td>Contact Persoon</td>
                <td>LeverancierNummer</td>
                <td>Mobiel</td>
                <td>Aantal Verschillende Producten</td>
                <td>Toon Producten</td>
            </tr>
        <tbody>
            <?php
            foreach ($data as $leverancierOverzicht) : ?>
                <tr>
                    <td><?= $leverancierOverzicht->Naam ?></td>
                    <td><?= $leverancierOverzicht->ContactPersoon ?></td>
                    <td><?= $leverancierOverzicht->LeverancierNummer ?></td>
                    <td><?= $leverancierOverzicht->Mobiel ?></td>
                    <td><?= $leverancierOverzicht->Aantal ?></td>


                    <td><a href="URLROOT . '/Jamin'"><i class="bi bi-box-seam"></i></a>
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>
        </thead>
    </table>
</body>

</html>