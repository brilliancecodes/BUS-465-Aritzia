DROP SCHEMA IF EXISTS Aritzia_Clothing;
CREATE SCHEMA Aritzia_Clothing;

Use Aritzia_Clothing;

DROP TABLE IF EXISTS ITEMS;
CREATE TABLE ITEMS (
Item_ID Int,
Item_Name VARCHAR(50),
Item_Colour VARCHAR(10),
Size VARCHAR(5),

Primary Key(Item_ID)
);




INSERT INTO ITEMS 
	VALUES (1,'The New Cocoon Long Coat', 'White', 'S');
INSERT INTO ITEMS 
	VALUES (2,'The New Cocoon Long Coat', 'White', 'M');
    INSERT INTO ITEMS 
	VALUES (3,'The New Cocoon Long Coat', 'White', 'L');
    INSERT INTO ITEMS 
	VALUES (4,'The New Cocoon Long Coat', 'Black', 'S');
    INSERT INTO ITEMS 
	VALUES (5,'The New Cocoon Long Coat', 'Black', 'M');
    INSERT INTO ITEMS 
	VALUES (6,'The New Cocoon Long Coat', 'Black', 'L');
    INSERT INTO ITEMS 
	VALUES (7,'The New Cocoon Long Coat', 'Blue', 'S');
    INSERT INTO ITEMS 
	VALUES (8,'The New Cocoon Long Coat', 'Blue', 'M');
    INSERT INTO ITEMS 
	VALUES (9,'The New Cocoon Long Coat', 'Blue', 'L');

	
    
   
    
    DROP TABLE IF EXISTS LOCATION;
    CREATE TABLE LOCATION (
    LOCATION_ID INT,
    LOCATION_NAME VARCHAR(20),
    PRIMARY KEY (LOCATION_ID)
    );
    
    
    Insert Into LOCATION
		VALUES (1, 'Metrotown');
           Insert Into LOCATION
		VALUES (2, 'Guildford');
           Insert Into LOCATION
		VALUES (3, 'Richmond');
        
        Select * FROM LOCATION;
        
    
    DROP TABLE IF EXISTS Items_At_Location;
    CREATE TABLE Items_At_Location(
    LineNo int,
    ITEM_ID int,
    LOCATION_ID int,
    Quantity int,
    
    
    Primary Key (LineNo,ITEM_ID),
    CONSTRAINT fk_has_item FOREIGN KEY (ITEM_ID) REFERENCES ITEMS(Item_ID),
    CONSTRAINT fk_has_location FOREIGN KEY (LOCATION_ID) REFERENCES LOCATION(LOCATION_ID)
    );
    
    INSERT INTO Items_At_Location
		VALUES (1, 1, 1,5);
         INSERT INTO Items_At_Location
		VALUES (1, 2, 1,0);
         INSERT INTO Items_At_Location
		VALUES (1, 3, 1,2);
         INSERT INTO Items_At_Location
		VALUES (1, 4, 1,5);
         INSERT INTO Items_At_Location
		VALUES (1, 5, 1,3);
         INSERT INTO Items_At_Location
		VALUES (1, 6, 1,1);
         INSERT INTO Items_At_Location
		VALUES (1, 7, 1,2);
         INSERT INTO Items_At_Location
		VALUES (1, 8, 1,4);
         INSERT INTO Items_At_Location
		VALUES (1, 9, 1,1);
        
     INSERT INTO Items_At_Location
		VALUES (2, 1, 2,5);
         INSERT INTO Items_At_Location
		VALUES (2, 2, 2,0);
         INSERT INTO Items_At_Location
		VALUES (2, 3, 2,1);
         INSERT INTO Items_At_Location
		VALUES (2, 4, 2,0);
         INSERT INTO Items_At_Location
		VALUES (2, 5, 2,34);
         INSERT INTO Items_At_Location
		VALUES (2, 6, 2,12);
         INSERT INTO Items_At_Location
		VALUES (2, 7, 2,69);
         INSERT INTO Items_At_Location
		VALUES (2, 8, 2,2);
         INSERT INTO Items_At_Location
		VALUES (2, 9, 2,4);
    
    
      INSERT INTO Items_At_Location
		VALUES (3, 1, 3,4);
         INSERT INTO Items_At_Location
		VALUES (3, 2, 3,0);
         INSERT INTO Items_At_Location
		VALUES (3, 3, 3,1);
         INSERT INTO Items_At_Location
		VALUES (3, 4, 3,0);
         INSERT INTO Items_At_Location
		VALUES (3, 5, 3,2);
         INSERT INTO Items_At_Location
		VALUES (3, 6, 3,13);
         INSERT INTO Items_At_Location
		VALUES (3, 7, 3,0);
         INSERT INTO Items_At_Location
		VALUES (3, 8, 3,4);
         INSERT INTO Items_At_Location
		VALUES (3, 9, 3,1);
        

  #Example  
    Select Quantity FROM Items_At_Location IL
    JOIN ITEMS I ON IL.ITEM_ID = I.ITEM_ID
    JOIN LOCATION L
    ON IL.LOCATION_ID = L.LOCATION_ID
    WHERE Item_Colour = "White" AND Size = "S" AND Location_Name = "Richmond";
    
    #Output would be 4 
    
    /*INSERT INTO LOCATION
		VALUES(1, 'Metrotown', 1, 5);
            INSERT INTO LOCATION
		VALUES(1, 'Metrotown', 2, 1);
            INSERT INTO LOCATION
		VALUES(1, 'Metrotown', 3, 2);
        INSERT INTO LOCATION
		VALUES(1, 'Metrotown', 4, 5);
            INSERT INTO LOCATION
		VALUES(1, 'Metrotown', 5, 0);
            INSERT INTO LOCATION
		VALUES(1, 'Metrotown', 6, 3);
        INSERT INTO LOCATION
		VALUES(1, 'Metrotown', 7, 5);
            INSERT INTO LOCATION
		VALUES(1, 'Metrotown', 8, 2);
            INSERT INTO LOCATION
		VALUES(1, 'Metrotown', 9, 10);
        
           INSERT INTO LOCATION
		VALUES(2, 'Guildford', 1, 0);
                   INSERT INTO LOCATION
		VALUES(2, 'Guildford', 2, 3);
                   INSERT INTO LOCATION
		VALUES(2, 'Guildford', 3, 5);
                   INSERT INTO LOCATION
		VALUES(2, 'Guildford', 4, 7);
                   INSERT INTO LOCATION
		VALUES(2, 'Guildford', 5, 2);
                   INSERT INTO LOCATION
		VALUES(2, 'Guildford', 6, 1);
                   INSERT INTO LOCATION
		VALUES(2, 'Guildford', 7, 5);
                   INSERT INTO LOCATION
		VALUES(2, 'Guildford', 8, 3);
                   INSERT INTO LOCATION
		VALUES(2, 'Guildford', 9, 10);
        
        INSERT INTO LOCATION
		VALUES(3, 'Richmond', 1, 2);
         INSERT INTO LOCATION
		VALUES(3, 'Richmond', 2, 2);
         INSERT INTO LOCATION
		VALUES(3, 'Richmond', 3, 2);
         INSERT INTO LOCATION
		VALUES(3, 'Richmond', 4, 0);
         INSERT INTO LOCATION
		VALUES(3, 'Richmond', 5, 13);
         INSERT INTO LOCATION
		VALUES(3, 'Richmond', 6, 5);
         INSERT INTO LOCATION
		VALUES(3, 'Richmond', 7, 2);
         INSERT INTO LOCATION
		VALUES(3, 'Richmond', 8, 4);
         INSERT INTO LOCATION
		VALUES(3, 'Richmond', 9, 2);*/
        
        
        
            

    
    
    

    
    


