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
                    --   ,LeverancierId
                    FROM Product AS PRO
                    INNER JOIN Magazijn AS MAG
                    ON MAG.Id = PRO.Id
                    -- INNER JOIN ProductPerLeverancier as PPL
                    -- ON PPL.ProductId = PRO.Id
                    -- GROUP BY PRO.Id
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
                      ,MAG.AantalAanwezig
                FROM ProductPerLeverancier as PRPL
                INNER JOIN Product as PRO
                ON PRO.Id = PRPL.ProductId
                INNER JOIN Magazijn MAG
                ON PRO.Id = MAG.ProductId
                WHERE PRO.Id = $Id";
        $this->db->query($sql);

        return $this->db->resultSet();
    }
    public function getleveringInformatie($Id)
    {
        $sql = "SELECT PRPL.Id
                      ,PRPL.LeverancierId
                      ,PRPL.ProductId
                      ,PRPL.DatumLevering
                      ,PRPL.Aantal
                      ,PRPL.DatumEerstVolgendeLevering
                      ,PRO.Naam
                      ,MAG.AantalAanwezig
                FROM Product as PRO
                INNER JOIN ProductPerLeverancier as PRPL
                ON PRO.Id = MAG.ProductId
                WHERE PRO.Id = PRPL.ProductId
                INNER JOIN Magazijn as MAG
                ON PRO.Id = MAG.ProductId
                WHERE PRO.Id = $Id
                ORDER BY PRPL.DatumLevering asc";
        $this->db->query($sql);

        return $this->db->resultSet();
    }
    public function getleverancierInfo($Id)
    {
        $sql = "SELECT LEV.Id
                      ,Naam
                      ,ContactPersoon
                      ,LeverancierNummer
                      ,Mobiel
                FROM Leverancier as LEV
                INNER JOIN ProductPerLeverancier PPL
                ON LEV.Id = PPL.LeverancierId
                WHERE PPL.ProductId = $Id
                GROUP BY LEV.Id";
        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
