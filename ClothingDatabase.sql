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
    
    
      INSERT INTO ITEMS 
	VALUES (10,'Polar Zip-Up', 'White', 'S');
    INSERT INTO ITEMS 
	VALUES (11,'Polar Zip-Up', 'White', 'M');
    INSERT INTO ITEMS 
	VALUES (12,'Polar Zip-Up', 'White', 'L');
    INSERT INTO ITEMS 
	VALUES (13,'Polar Zip-Up', 'Black', 'S');
    INSERT INTO ITEMS 
	VALUES (14,'Polar Zip-Up', 'Black', 'M');
    INSERT INTO ITEMS 
	VALUES (15,'Polar Zip-Up', 'Black', 'L');
    INSERT INTO ITEMS 
	VALUES (16,'Polar Zip-Up', 'Blue', 'S');
    INSERT INTO ITEMS 
	VALUES (17,'Polar Zip-Up', 'Blue', 'M');
    INSERT INTO ITEMS 
	VALUES (18,'Polar Zip-Up', 'Blue', 'L');
    
    INSERT INTO ITEMS 
	VALUES (19,'Prospect Shirt Jacket', 'White', 'S');
       INSERT INTO ITEMS 
	VALUES (20,'Prospect Shirt Jacket', 'White', 'M');
       INSERT INTO ITEMS 
	VALUES (21,'Prospect Shirt Jacket', 'White', 'L');
       INSERT INTO ITEMS 
	VALUES (22,'Prospect Shirt Jacket', 'Black', 'S');
       INSERT INTO ITEMS 
	VALUES (23,'Prospect Shirt Jacket', 'Black', 'M');
       INSERT INTO ITEMS 
	VALUES (24,'Prospect Shirt Jacket', 'Black', 'L');
       INSERT INTO ITEMS 
	VALUES (25,'Prospect Shirt Jacket', 'Blue', 'S');
       INSERT INTO ITEMS 
	VALUES (26,'Prospect Shirt Jacket', 'Blue', 'M');
       INSERT INTO ITEMS 
	VALUES (27,'Prospect Shirt Jacket', 'Blue', 'L');
    

	
    
   
    
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
		VALUES (1, 10, 1,7);
         INSERT INTO Items_At_Location
		VALUES (1, 11, 1,2);
         INSERT INTO Items_At_Location
		VALUES (1, 12, 1,4);
         INSERT INTO Items_At_Location
		VALUES (1, 13, 1,6);
         INSERT INTO Items_At_Location
		VALUES (1, 14, 1,3);
         INSERT INTO Items_At_Location
		VALUES (1, 15, 1,2);
         INSERT INTO Items_At_Location
		VALUES (1, 16, 1,4);
         INSERT INTO Items_At_Location
		VALUES (1, 17, 1,46);
         INSERT INTO Items_At_Location
		VALUES (1, 18, 1,15);
        INSERT INTO Items_At_Location
		VALUES (1, 19, 1,19);
         INSERT INTO Items_At_Location
		VALUES (1, 20, 1,2);
         INSERT INTO Items_At_Location
		VALUES (1, 21, 1,4);
         INSERT INTO Items_At_Location
		VALUES (1, 22, 1,6);
         INSERT INTO Items_At_Location
		VALUES (1, 23, 1,1);
         INSERT INTO Items_At_Location
		VALUES (1, 24, 1,2);
         INSERT INTO Items_At_Location
		VALUES (1, 25, 1,23);
         INSERT INTO Items_At_Location
		VALUES (1, 26, 1,2);
         INSERT INTO Items_At_Location
		VALUES (1, 27, 1,11);
        
        
        
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
		VALUES (2, 10, 2,2);
         INSERT INTO Items_At_Location
		VALUES (2, 11, 2,4);
         INSERT INTO Items_At_Location
		VALUES (2, 12, 2,30);
         INSERT INTO Items_At_Location
		VALUES (2, 13, 2,21);
         INSERT INTO Items_At_Location
		VALUES (2, 14, 2,3);
         INSERT INTO Items_At_Location
		VALUES (2, 15, 2,10);
         INSERT INTO Items_At_Location
		VALUES (2, 16, 2,9);
         INSERT INTO Items_At_Location
		VALUES (2, 17, 2,1);
         INSERT INTO Items_At_Location
		VALUES (2, 18, 2,3);
        INSERT INTO Items_At_Location
		VALUES (2, 19, 2,2);
         INSERT INTO Items_At_Location
		VALUES (2, 20, 2,0);
         INSERT INTO Items_At_Location
		VALUES (2, 21, 2,5);
         INSERT INTO Items_At_Location
		VALUES (2, 22, 2,8);
         INSERT INTO Items_At_Location
		VALUES (2, 23, 2,8);
         INSERT INTO Items_At_Location
		VALUES (2, 24, 2,1);
         INSERT INTO Items_At_Location
		VALUES (2, 25, 2,9);
         INSERT INTO Items_At_Location
		VALUES (2, 26, 2,2);
         INSERT INTO Items_At_Location
		VALUES (2, 27, 2,4);
    
    
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
		VALUES (3, 9, 3,2);
        INSERT INTO Items_At_Location
		VALUES (3, 10, 3,3);
         INSERT INTO Items_At_Location
		VALUES (3,11, 3,4);
         INSERT INTO Items_At_Location
		VALUES (3, 12, 3,5);
         INSERT INTO Items_At_Location
		VALUES (3, 13, 3,4);
         INSERT INTO Items_At_Location
		VALUES (3, 14, 3,2);
         INSERT INTO Items_At_Location
		VALUES (3, 15, 3,12);
         INSERT INTO Items_At_Location
		VALUES (3, 16, 3,0);
         INSERT INTO Items_At_Location
		VALUES (3, 17, 3,2);
         INSERT INTO Items_At_Location
		VALUES (3, 18, 3,1);
        INSERT INTO Items_At_Location
		VALUES (3, 19, 3,3);
         INSERT INTO Items_At_Location
		VALUES (3, 20, 3,2);
         INSERT INTO Items_At_Location
		VALUES (3, 21, 3,2);
        
         INSERT INTO Items_At_Location
		VALUES (3, 22, 3,0);
         INSERT INTO Items_At_Location
		VALUES (3, 23, 3,2);
         INSERT INTO Items_At_Location
		VALUES (3, 24, 3,8);
         INSERT INTO Items_At_Location
		VALUES (3, 25, 3,0);
         INSERT INTO Items_At_Location
		VALUES (3, 26, 3,4);
         INSERT INTO Items_At_Location
		VALUES (3, 27, 3,1);
        
        

  #Example  
    Select Item_Name, IL.Item_ID, Quantity FROM Items_At_Location IL
    JOIN ITEMS I ON IL.ITEM_ID = I.ITEM_ID
    JOIN LOCATION L
    ON IL.LOCATION_ID = L.LOCATION_ID
    WHERE Item_Name = "Prospect Shirt Jacket" AND Size = "L" AND Location_Name = "Guildford" AND Item_Colour = "Black";
    
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
        
        
        
            

    
    
    

    
    


