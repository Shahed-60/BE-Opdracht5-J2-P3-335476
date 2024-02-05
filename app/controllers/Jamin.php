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


    public function leveringInformatie($LeverancierId, $Id)
    {
        // Hiermee verwijs ik naar de model en dan naar de getleverancierInfo functie en dan stop ik dat in een variabele
        $leverancierInfo = $this->JaminModel->getleverancierInfo($LeverancierId);
        $leveringInfo = $this->JaminModel->getleveringInformatiebyId($Id);
        // ik maak een variabele voor elke info die ik wil laten zien en dan stop ik die in een array en roep 
        // var_dump($leveringInfo);
        // ik die aan in de view 
        // wat er achter het pijltje staat zijn de namen die in de Model staan
        // $naamLeverancier = $leverancierInfo->Naam;
        // $contactPersoonLeverancier = $leverancierInfo->ContactPersoon;
        // $leverancierNummer = $leverancierInfo->LeverancierNummer;
        // $mobiel = $leverancierInfo->Mobiel;
        // $naam = $leveringInfo->Naam;
        // $aantal = $leveringInfo->Aantal;
        // $datumLevering = $leverancierInfo->DatumLevering;
        // $datumeerstevolgendelevering = $leverancierInfo->DatumEerstVolgendeLevering;
        $data = [
            // 'NaamLeverancier' => $naamLeverancier,
            // 'ContactPersoonLeverancier' => $contactPersoonLeverancier,
            // 'LeverancierNummer' => $leverancierNummer,
            // 'Mobiel' => $mobiel,
            // 'Naam' => $naam,
            // 'Aantal' => $aantal,
            // 'DatumLevering' => $datumLevering,
            // 'DatumEerstVolgendeLevering' => $datumeerstevolgendelevering
            'leverancierInfo' => $leverancierInfo,
            'leveringInfo' => $leveringInfo
        ];
        // Hiermee roep ik een view aan, hij gaat eerst naar de Controller en dan naar de view 
        // Nooit van een view naar een view aanroepen moet altijd via een controller
        // var_dump($leveringInfo);
        // Die Jamin is het mapje en leveringInformatie is de file in die map
        $this->view('Jamin/leveringInformatie', $data);
    }
}
