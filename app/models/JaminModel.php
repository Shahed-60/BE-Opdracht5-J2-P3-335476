<?php

class JaminModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getOverzichtMagazijn()
    {
        $sql = "SELECT PRO.Id
                      ,Naam
                      ,Barcode
                      ,AantalAanwezig
                      ,LeverancierId
                    FROM Product AS PRO
                    INNER JOIN Magazijn AS MAG
                    ON MAG.Id = PRO.Id
                    INNER JOIN ProductPerLeverancier as PPL
                    ON PPL.ProductId = PRO.Id
                    ORDER BY Barcode asc";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function getleveringInformatiebyId($Id)
    {
        $sql = "SELECT PRPL.Id
                      ,PRPL.LeverancierId
                      ,PRPL.ProductId
                      ,PRPL.DatumLevering
                      ,PRPL.Aantal
                      ,PRPL.DatumEerstVolgendeLevering
                      ,PRO.Naam
                FROM ProductPerLeverancier as PRPL
                INNER JOIN Product as PRO
                ON PRO.Id = PRPL.Id
                WHERE PRO.Id = $Id";
        $this->db->query($sql);

        return $this->db->resultSet();
    }
    public function getleveringInformatieby($Id)
    {
        $sql = "SELECT PRPL.Id
                      ,PRPL.LeverancierId
                      ,PRPL.ProductId
                      ,PRPL.DatumLevering
                      ,PRPL.Aantal
                      ,PRPL.DatumEerstVolgendeLevering
                      ,PRO.Naam
                FROM ProductPerLeverancier as PRPL
                INNER JOIN Product as PRO
                ON PRO.Id = PRPL.Id
                WHERE PRO.Id = $Id";
        $this->db->query($sql);

        return $this->db->resultSet();
    }
    public function getleverancierInfo($LeverancierId)
    {
        $sql = "SELECT Id
                      ,Naam
                      ,ContactPersoon
                      ,LeverancierNummer
                      ,Mobiel
                FROM Leverancier
                WHERE Id = $LeverancierId";
        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
