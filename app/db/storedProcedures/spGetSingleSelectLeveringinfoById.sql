	-- Step : 01.1
	/******************************************************************************
	-- Doel : Maak een nieuwe stored procedure aan spGetSingleSelectLeveringinfoById
	-- ****************************************************************************
	-- Versie     Datum          Auteur			Omschrijving
	-- ******     **********     *******		**************
	-- 01         16-02-2024     SA			    Nieuw stored procedure
	*******************************************************************************/ 
	USE `Be-opdracht05`;
    DROP PROCEDURE IF EXISTS spGetSelectLeveringinfoById;
    
    DELIMITER //
        
	CREATE PROCEDURE spGetSelectLeveringinfoById
	(
		 Id	 INT UNSIGNED 
	)
    
    BEGIN
    
		-- Stap_01
        -- Definieer een local variable
       
        
    	DECLARE EXIT HANDLER FOR SQLEXCEPTION
    	BEGIN
        	ROLLBACK;
        	SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
    	END;
                
		START TRANSACTION;					
			-- Stap_02
			-- Voeg nieuwe rij toe aan Sollicitant tabel.
           SELECT PRPL.Id
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
                WHERE PRO.Id = Id;

            COMMIT;	
	END //
        
 /*****************************************Debug SP*****************************************

	CALL spGetSelectLeveringinfoById  ( 39 )	

   ********************************************************************************************/