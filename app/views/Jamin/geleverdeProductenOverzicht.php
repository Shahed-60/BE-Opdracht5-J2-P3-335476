<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Geleverde Producten</title>
</head>

<body>
    <h4> <u>Geleverde Producten</u></h4>
    <table>
        <thead>
            <?php
            // var_dump($data);
            foreach ($data['leverancierInfo'] as $leverancierInfo) : ?>
                <tr>
                    <th>Naam Leverancier:</th>
                    <td><?= $leverancierInfo->Naam ?></td>
                </tr>
                <tr>
                    <th>ContactPersoon:</th>
                    <td><?= $leverancierInfo->ContactPersoon ?></td>
                </tr>
                <tr>
                    <th>Leverancier Nummer:</th>
                    <td><?= $leverancierInfo->LeverancierNummer ?></td>
                </tr>
                <tr>
                    <th>Mobiel:</th>
                    <td><?= $leverancierInfo->Mobiel ?></td>
                </tr>

        </thead>
    <?php endforeach; ?>
    </table>
    <table>
        <thead>
            <tr>
                <td>Naam Product</td>
                <td>Aantal in Magazijn</td>
                <td>VerpakkingsEenheid</td>
                <td>laatsteLevering</td>
                <td>Nieuwe Levering</td>
            </tr>
        </thead>
        <tbody>

            <?php if (empty(($data['ProductPerLeverancierInfo']))) :
            ?>
                <tr>
                    <td colspan='6'>
                        Dit bedrijf heeft tot nu toe geen producten geleverd aan Jamin </td>
                </tr>
            <?php else : ?>
            <?php endif; ?>

            <?php
            foreach ($data['ProductPerLeverancierInfo'] as $ProductPerLeverancier) : ?>
                <tr>
                    <td><?= $ProductPerLeverancier->Naam ?></td>
                    <td><?= $ProductPerLeverancier->AantalAanwezig ?></td>
                    <td><?= $ProductPerLeverancier->VerpakkingsEenheid ?></td>
                    <td><?= $ProductPerLeverancier->laatsteLevering ?></td>

                    <!-- <td><a href="<?= URLROOT; ?>/Jamin/geleverdeProductenOverzicht/<?= $ProductPerLeverancier->LeverancierId; ?>"><i class="bi bi-box-seam"></i></a> -->
                    <td><a href="<?= URLROOT; ?>/Jamin/geleverdeProductenOverzicht/"><i class="bi bi-plus"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="<?= URLROOT; ?>/Jamin/overzichtLeverancier" class="knop">Terug
    </a>
    <a href="<?= URLROOT; ?>/Homepage/index" class="knop">Home</a>

</body>

</html>