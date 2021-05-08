drop table LOGINS;
CREATE TABLE LOGINS (	
    USERNAME varchar(60) NOT NULL, 
	PASS_WORD varchar(40) NOT NULL, 
	LOGIN_TYPE varchar(10) NOT NULL, 
	EMPLID INT(8) NOT NULL PRIMARY KEY,
	FORM_STATUS varchar(20)
);

INSERT INTO LOGINS VALUES ('test', '1234', 'Student', '12345678', NULL);
INSERT INTO LOGINS VALUES ('Jon.Doe11@qmail.cuny.edu', '11111111', 'Student', '11111111', NULL);
INSERT INTO LOGINS VALUES ('ensar.dogrusoz20@qmail.cuny.edu', '1234', 'Student', '87654321', NULL);
INSERT INTO LOGINS VALUES ('bursar@qmail.cuny.edu', '1234', 'Bursar', '13572466', NULL);
INSERT INTO LOGINS VALUES ('Zoe.Gal44@qmail.cuny.edu', '44444444', 'Bursar', '44444444', NULL);
INSERT INTO LOGINS VALUES ('testbursar', '1234', 'Bursar', '33333330', NULL);
INSERT INTO LOGINS VALUES ('Zom.Bie55@qmail.cuny.edu', '55555555', 'Admin', '55555555', NULL);
INSERT INTO LOGINS VALUES ('testadmin', '123', 'Admin', '55555556', NULL);


select * from LOGINS;
/*
1 table for 3 different forms
all connect with a foriegn key that connects to the student
*/

select * from PAGES;
drop table PAGES;
CREATE TABLE PAGES (	
	-- PG 1
    	-- PG 1
    _NAME_ 				varchar(40) , 
	EMPLID 					INT(8)  REFERENCES LOGINS,
    IMMIGRATION_STATUS 			VARCHAR(30) NOT NULL, 
	UNDER_18 					varchar(8),
    UNDER_23 					varchar(8),
   STUDENT_TYPE 					nvarchar(15),
   SEMESTER 				nvarchar(20),
    REQUESTED_BY 				nvarchar(20) ,
    _DATE_ 				nvarchar(20), 
    -- PG 2
    LAST_NAME 			varchar(50) NOT NULL,
    FIRST_NAME 			varchar(50) NOT NULL,
    MIDDLE_INITIAL 			varchar(1),
    EMPLID2 					INT(8) NOT NULL,
    DOB 					nvarchar(20) NOT NULL,
    PHONE_NUMBER 			nvarchar(15) NOT NULL, 
    IS_CITIZEN 				varchar(3) NOT NULL,
    ALIEN 				varchar(3) NOT NULL,
    CURR_ADDRESS 		nvarchar(100) NOT NULL, 
    -- optional addresses
    _FROMM1 			varchar(15),
    _FROMY1 				nvarchar(4),
    _TOM1 					varchar(15),
    _TOY1 					nvarchar(4),
    ADDY1 				nvarchar(100),   
	_FROMM2 			varchar(15),
    _FROMY2 				nvarchar(4),
    _TOM2 					varchar(15),
    _TOY2 					nvarchar(4),
    ADDY2 				nvarchar(100),  
    _FROMM3 					varchar(15),
    _FROMY3 				nvarchar(4),
    _TOM3 				varchar(15),
    _TOY3 					nvarchar(4),
    ADDY3 					nvarchar(100),
--     -- end optional addresses
    PARENTS_ADD 			nvarchar(100),
	LEGAL_GAURD_U18 		varchar(3) NOT NULL,
    IF_LEGAL_GAURD_YES 		varchar(3) ,
    NameAAddress nvarchar(100) ,
    SOURCE_OF_SUPPORT 		nvarchar(100) ,
    TAX_RETURN12 		varchar(3) NOT NULL ,
    FED_TAX12 			varchar(3) NOT NULL,
    FIN_AID 			varchar(3) NOT NULL,
    BENEFITS 		nvarchar(300),
    LIVE_IN_NY 		varchar(3) NOT NULL,
    UNCERTAIN 		nvarchar(200),
    ESIGN_DATE 			varchar(20) NOT NULL,
    ESIGN 			varchar(100) NOT NULL
    );
    

