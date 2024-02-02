-- Step: 01
-- Goal: Create a new database mvc-2209a-P4
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            15-01-2024      Shahed Amer                New
-- **********************************************************************************/

-- Check if the database exists
DROP DATABASE IF EXISTS `Be-opdracht05`;

-- Create a new Database
CREATE DATABASE IF NOT EXISTS `Be-opdracht05`;

-- Use database Be-opdracht05
Use `Be-opdracht05`;


-- Step: 02
-- Goal: Create a new table Magazijn
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************/

-- Drop table Magazijn
DROP TABLE IF EXISTS Magazijn;

CREATE TABLE IF NOT EXISTS Magazijn
(
    Id                          TINYINT         UNSIGNED        NOT NULL    AUTO_INCREMENT
   ,ProductId                   INT             UNSIGNED                  NOT NULL
   ,VerpakkingsEenheid          Decimal(4,2)                    NOT NULL
   ,AantalAanwezig              INT                             NULL
   ,IsActief                    BIT                             NOT NULL    DEFAULT 1
   ,Opmerkingen                 VARCHAR(250)                        NULL    DEFAULT NULL
   ,DatumAangemaakt             DateTime(6)                     NOT NULL
   ,DatumGewijzigd              DateTime(6)                     NOT NULL

   ,CONSTRAINT      PK_Magazijn_Id   PRIMARY KEY CLUSTERED(Id)
--    ,CONSTRAINT      FK_Magazijn_ProductId  FOREIGN KEY (ProductId) REFERENCES Product(Id)

) ENGINE=InnoDB;

-- Step: 03
-- Goal: Fill table Instructeur with data
-- **********************************************************************************

-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************/

INSERT INTO Magazijn
(
     ProductId         
    ,VerpakkingsEenheid
    ,AantalAanwezig    
    ,IsActief
    ,Opmerkingen
    ,DatumAangemaakt
    ,DatumGewijzigd
)
VALUES
     (1,5,453, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(2,2.5,400, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(3,5,1, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(4,1,800, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(5,3,234, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(6,2,345, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(7,1,795, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(8,10,233, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(9,2.5,123, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(10,3,NULL, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(11,2,367, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(12,1,467, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,(13,5,20, 1, NULL, SYSDATE(6), SYSDATE(6));



-- Step: 04
-- Goal: Create a new table Product
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************/

-- Drop table Product
DROP TABLE IF EXISTS Product;

CREATE TABLE IF NOT EXISTS Product
(
    Id                  INT         UNSIGNED        NOT NULL    AUTO_INCREMENT
   ,Naam                VARCHAR(50)                     NOT NULL
   ,Barcode             BIGINT                            NOT NULL
   ,IsActief            BIT                             NOT NULL    DEFAULT 1
   ,Opmerkingen         VARCHAR(250)                        NULL    DEFAULT NULL
   ,DatumAangemaakt     DateTime(6)                     NOT NULL
   ,DatumGewijzigd      DateTime(6)                     NOT NULL

   ,CONSTRAINT      PK_Product_Id   PRIMARY KEY CLUSTERED(Id)
) ENGINE=InnoDB;


-- Step: 05
-- Goal: Fill table TypeVoertuig with data
-- **********************************************************************************

-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************/

INSERT INTO Product
(
     Naam
    ,Barcode
    ,IsActief
    ,Opmerkingen
    ,DatumAangemaakt
    ,DatumGewijzigd
)
VALUES
      ('Mintnopjes',8719587231278, 1, NULL, SYSDATE(6), SYSDATE(6))
    ,('Schoolkrijt',8719587326713, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Honingdrop',8719587327836, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Zure Beren',8719587321441, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Cola Flesjes',8719587321237, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Turtles',8719587322245, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Witte Muizen',8719587328256, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Reuze Slangen',8719587325641, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Zoute Rijen',8719587322739, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Winegums',8719587327527, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Drop Munten',8719587322345, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Kruis Drop',8719587322265, 1, NULL, SYSDATE(6), SYSDATE(6))
     ,('Zoute Ruitjes',8719587323256, 1, NULL, SYSDATE(6), SYSDATE(6));



-- Step: 06
-- Goal: Create a new table ProductPerAllergeen
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************/

-- Drop table ProductPerAllergeen

-- Step: 08
-- Goal: Create a new table Allergeen
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************/

-- Drop table Allergeen
DROP TABLE IF EXISTS Allergeen;

CREATE TABLE IF NOT EXISTS Allergeen
(
    Id                  TINYINT         UNSIGNED        NOT NULL    AUTO_INCREMENT
   ,Naam                VARCHAR(50)                     NOT NULL
   ,Omschrijving        VARCHAR(100)                    NOT NULL
   ,IsActief            BIT                             NOT NULL    DEFAULT 1
   ,Opmerkingen         VARCHAR(250)                        NULL    DEFAULT NULL
   ,DatumAangemaakt     DateTime(6)                     NOT NULL
   ,DatumGewijzigd      DateTime(6)                     NOT NULL

   ,CONSTRAINT      PK_Allergeen_Id   PRIMARY KEY CLUSTERED(Id)
) ENGINE=InnoDB;


-- Step: 09
-- Goal: Fill table Allergeen with data
-- **********************************************************************************

-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************/

INSERT INTO Allergeen
(
     Naam        
    ,Omschrijving
    ,IsActief
    ,Opmerkingen
    ,DatumAangemaakt
    ,DatumGewijzigd
)
VALUES
     ('Gluten', 'Dit product bevat gluten', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,('Gelatine', 'Dit product bevat gelatine', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,('AZO-Kleur', 'Dit product bevat AZO-Kleur', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,('Lactose', 'Dit product bevat lactose', 1, NULL, SYSDATE(6), SYSDATE(6))
    ,('Soja', 'Dit product bevat soja', 1, NULL, SYSDATE(6), SYSDATE(6));

DROP TABLE IF EXISTS ProductPerAllergeen;

CREATE TABLE IF NOT EXISTS ProductPerAllergeen
(
    Id                  TINYINT         UNSIGNED        NOT NULL    AUTO_INCREMENT
   ,ProductId           INT             UNSIGNED                NOT NULL
   ,AllergeenId         TINYINT             UNSIGNED                           NOT NULL
   ,IsActief            BIT                             NOT NULL    DEFAULT 1
   ,Opmerkingen         VARCHAR(250)                        NULL    DEFAULT NULL
   ,DatumAangemaakt     DateTime(6)                     NOT NULL
   ,DatumGewijzigd      DateTime(6)                     NOT NULL

   ,CONSTRAINT      PK_ProductPerAllergeen_Id   PRIMARY KEY CLUSTERED(Id)
   


) ENGINE=InnoDB;


-- Step: 07
-- Goal: Fill table Voertuig with data
-- **********************************************************************************

-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************/

INSERT INTO ProductPerAllergeen
(
     ProductId  
    ,AllergeenId
    ,IsActief
    ,Opmerkingen
    ,DatumAangemaakt
    ,DatumGewijzigd
)
VALUES
    (1,  2,   1, NULL, SYSDATE(6), SYSDATE(6))
    ,(1,  1,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(1,  3,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(3,  4,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(6,  5,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(9,  2,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(9,  5,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(10, 2,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(12, 4,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(13, 1,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(13, 4,  1, NULL, SYSDATE(6), SYSDATE(6))
    ,(13, 5,  1, NULL, SYSDATE(6), SYSDATE(6));

   
-- Drop table Allergeen
DROP TABLE IF EXISTS ProductPerLeverancier;

CREATE TABLE IF NOT EXISTS ProductPerLeverancier
(
   Id                          INT             UNSIGNED         NOT NULL    AUTO_INCREMENT
   ,LeverancierId               TINYINT            UNSIGNED                 NOT NULL
   ,ProductId                   INT            UNSIGNED                 NOT NULL
   ,DatumLevering               DATETIME                        NOT NULL
   ,Aantal                      INT                             NOT NULL 
   ,DatumEerstVolgendeLevering DATETIME                         NULL
   ,IsActief                    BIT                             NOT NULL    DEFAULT 1
   ,Opmerkingen                 VARCHAR(250)                        NULL    DEFAULT NULL
   ,DatumAangemaakt             DateTime(6)                     NOT NULL
   ,DatumGewijzigd              DateTime(6)                     NOT NULL

   ,CONSTRAINT      PK_ProductPerLeverancier_Id          PRIMARY KEY CLUSTERED(Id)
   
) ENGINE=InnoDB;
-- Step: 10
-- Goal: Fill table ProductPerLeverancier with data
-- **********************************************************************************

-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************  
INSERT INTO ProductPerLeverancier 
(LeverancierId
, ProductId
, DatumLevering
, Aantal
, DatumEerstVolgendeLevering
,IsActief
    ,Opmerkingen
    ,DatumAangemaakt
    ,DatumGewijzigd)
    VALUES  (1, 1,'2023-04-09',23,'2023-04-09',1, NULL, SYSDATE(6), SYSDATE(6)),
            (1,1, '2023-04-18',21,'2023-04-25',1, NULL, SYSDATE(6), SYSDATE(6)),
            (1,2, '2023-04-09',12,'2023-04-16',1, NULL, SYSDATE(6), SYSDATE(6)),
            (1,3, '2023-04-10',11,'2023-04-17',1, NULL, SYSDATE(6), SYSDATE(6)),
            (2,4, '2023-04-14',16,'2023-04-21',1, NULL, SYSDATE(6), SYSDATE(6)),
            (2,4, '2023-04-21',23,'2023-04-28',1, NULL, SYSDATE(6), SYSDATE(6)),
            (2,5, '2023-04-14',45,'2023-04-21',1, NULL, SYSDATE(6), SYSDATE(6)),
            (2,6, '2023-04-14',30,'2023-04-21',1, NULL, SYSDATE(6), SYSDATE(6)),
            (3,7, '2023-04-12',12,'2023-04-19',1, NULL, SYSDATE(6), SYSDATE(6)),
            (3,7, '2023-04-19',23,'2023-04-26',1, NULL, SYSDATE(6), SYSDATE(6)),
            (3,8, '2023-04-10',12,'2023-04-17',1, NULL, SYSDATE(6), SYSDATE(6)),
            (3,9, '2023-04-11',1, '2023-04-18',1, NULL, SYSDATE(6), SYSDATE(6)),
            (4,10,'2023-04-16',24,'2023-04-30',1, NULL, SYSDATE(6), SYSDATE(6)),
            (5,11,'2023-04-10',47,'2023-04-17',1, NULL, SYSDATE(6), SYSDATE(6)),
            (5,11,'2023-04-10',60,'2023-04-26',1, NULL, SYSDATE(6), SYSDATE(6)),
            (5,12,'2023-04-11',45,NULL,1, NULL, SYSDATE(6), SYSDATE(6)),
            (5,13,'2023-04-12',23,NULL,1, NULL, SYSDATE(6), SYSDATE(6));
            -- Step: 08
-- Goal: Create a new table Leverancier
-- **********************************************************************************
-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************/

-- Drop table Leverancier
DROP TABLE IF EXISTS Leverancier;

CREATE TABLE IF NOT EXISTS Leverancier
(
    Id                  TINYINT         UNSIGNED        NOT NULL    AUTO_INCREMENT
   ,Naam                VARCHAR(50)                     NOT NULL
   ,ContactPersoon      VARCHAR(30)                     NOT NULL
   ,LeverancierNummer   VARCHAR(30)                     NOT NULL
   ,Mobiel               VARCHAR(15)                     NOT NULL
   ,IsActief            BIT                             NOT NULL    DEFAULT 1
   ,Opmerkingen         VARCHAR(250)                        NULL    DEFAULT NULL
   ,DatumAangemaakt     DateTime(6)                     NOT NULL
   ,DatumGewijzigd      DateTime(6)                     NOT NULL

   ,CONSTRAINT      PK_Leverancier_Id   PRIMARY KEY CLUSTERED(Id)
) ENGINE=InnoDB;
-- Step: 10
-- Goal: Fill table ProductPerLeverancier with data
-- **********************************************************************************

-- Version       Date:           Author:                     Description:
-- *******       **********      ****************            ******************
-- 01            04-04-2023      Arjan de Ruijter            New
-- **********************************************************************************  
INSERT INTO
 Leverancier 
 (Naam,                   
 ContactPersoon,     
 LeverancierNummer,  
 Mobiel
 ,IsActief       
,Opmerkingen    
,DatumAangemaakt
,DatumGewijzigd )
    VALUES  ('Venco','Bert van Linge','L102 93 84 719','06-28493827',1, NULL, SYSDATE(6), SYSDATE(6)),
            ('Astra sweets','Jasper del Monte','L102 92 84 315','06-39398734',1, NULL, SYSDATE(6), SYSDATE(6)),
            ('Haribo','Sven Stalman','L102 93 24 748','06-24383292',1, NULL, SYSDATE(6), SYSDATE(6)),
            ('Joyce  Stelterberg','Jasper del Monte', 'L102 38 45 773',   '06-48293823',1, NULL, SYSDATE(6), SYSDATE(6)),
            ('De Bron','Remco Veenstra','L102 38 57 736','06-34291234',1, NULL, SYSDATE(6), SYSDATE(6)),
            ('Quality Street','Johan Nooij','L102 92 34 586','06-23458456',1, NULL, SYSDATE(6), SYSDATE(6));

ALTER TABLE Magazijn
ADD FOREIGN KEY (ProductId) REFERENCES Product(Id);
    ALTER TABLE ProductPerAllergeen
    ADD FOREIGN KEY (AllergeenId) REFERENCES Allergeen(Id);
    ALTER TABLE ProductPerLeverancier
    ADD FOREIGN KEY (LeverancierId) REFERENCES Leverancier(Id);
