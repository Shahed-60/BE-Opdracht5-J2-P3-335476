<?php

class Jamin extends BaseController
{
    // de model importeren
    private $jaminModel;
    public function __construct()
    {
        $this->jaminModel = $this->model('JaminModel');
    }

    // een functie maken om de overzicht van het magazijn te laten zien
    public function overzichtMagazijn()
    {
        // we maken een variabele en hij verwijst naat de function in de model getOverzichtMagazijn
        $overzicht = $this->jaminModel->getOverzichtMagazijn();
    }
}
