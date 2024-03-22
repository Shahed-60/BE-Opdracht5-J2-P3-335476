<?php

class Jamin extends BaseController
{
    // de model importeren
    private $JaminModel;
    public function __construct()
    {
        $this->JaminModel = $this->model('JaminModel');
    }

    // een functie maken om de overzicht van het magazijn te laten zien
    public function overzichtMagazijn()
    {
        // we maken een variabele en hij verwijst naat de function in de model getOverzichtMagazijn
        $overzicht = $this->JaminModel->getOverzichtMagazijn();
        $this->view('Jamin/overzichtMagazijn', $overzicht);
    }

    public function leveringInformatie($Id)
    {
        // Hiermee verwijs ik naar de model en dan naar de getleverancierInfo functie en dan stop ik dat in een variabele
        $leverancierInfo = $this->JaminModel->getleverancierInfo($Id);
        $leveringInfo = $this->JaminModel->getleveringInformatiebyId($Id);
        // var_dump($leveringInfo);
        $data = [
            'leverancierInfo' => $leverancierInfo,
            'leveringInfo' => $leveringInfo,
        ];
        // Hiermee roep ik een view aan, hij gaat eerst naar de Controller en dan naar de view 
        // Nooit van een view naar een view aanroepen moet altijd via een controller
        // var_dump($leveringInfo);
        // Die Jamin is het mapje en leveringInformatie is de file in die map
        $this->view('Jamin/leveringInformatie', $data);
    }
    // Een belangrijk iets om te altijd te onthouden
    // Als en een nieuwe View maakt zorg er voor dat de view naam en de functie naam overeenkomen met elkaar anders 
    // gaat die een error geven en ,omdat we voor de view een 
    public function allergenenOverzicht($productId)
    {
        // Ik defenieer in de productinfo de gegevens die ik wil laten zien en dat is de naar en basrcode van het product 
        // en die zitten in de getOverzichtMagazijn() in de model
        // Ik geeft hiermee de parameter $productId zodat die weet dat ik een product wil zien en niet alle producten
        // En in de model bij getOverzichtMagazijnById geef ik die parameter ook mee
        $porductInfo = $this->JaminModel->getOverzichtMagazijnById($productId);
        $overzichtAll = $this->JaminModel->productPerAllergeen($productId);
        $data = [
            'productInfo' => $porductInfo,
            'overzichtAllergeen' => $overzichtAll
        ];
        // var_dump($overzichtAll);
        // en met de view stuur ik de data mee zo dat ze te zien zijn.
        $this->view('Jamin/allergenenOverzicht', $data);
    }
    public function overzichtLeverancier()
    {
        $overzicht = $this->JaminModel->overzichtLeverancier();
        // var_dump($overzicht);
        $this->view('Jamin/overzichtLeverancier', $overzicht);
    }
    public function geleverdeProductenOverzicht($Id)
    {
        $leverancierInfo = $this->JaminModel->getleverancier($Id);
        $ProductPerLeverancierInfo = $this->JaminModel->getProductPerLeverancier($Id);
        $data = [
            'leverancierInfo' => $leverancierInfo,
            'ProductPerLeverancierInfo' => $ProductPerLeverancierInfo
        ];
        // var_dump($data['ProductPerLeverancierInfo']);
        $this->view('Jamin/geleverdeProductenOverzicht', $data);
    }
}
