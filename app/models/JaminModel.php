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
        $sql = "SELECT Id
                      ,Naam
                      ,Barcode
                    FROM Product
                    ORDER BY Barcode asc";
                    
        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
