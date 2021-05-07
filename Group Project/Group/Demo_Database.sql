CREATE TABLE LOGINS (	
    USERNAME varchar(60) NOT NULL, 
	PASS_WORD varchar(40) NOT NULL, 
	LOGIN_TYPE varchar(40) NOT NULL, 
	EMPLID INT(8) NOT NULL PRIMARY KEY,
	FORM_STATUS varchar(40)
);
INSERT INTO LOGINS VALUES ('test', '1234', 'Student', '12345678', 'Not Submitted');
INSERT INTO LOGINS VALUES ('Jon.Doe11@qmail.cuny.edu', '11111111', 'Student', '11111111', 'Not Submitted');
INSERT INTO LOGINS VALUES ('Jane.Doe11@qmail.cuny.edu', '22222222', 'Student', '22222222', 'Not Submitted');
INSERT INTO LOGINS VALUES ('Zach.Gal33@qmail.cuny.edu', '33333333', 'Bursar', '33333333', NULL);
INSERT INTO LOGINS VALUES ('Zoe.Gal44@qmail.cuny.edu', '44444444', 'Bursar', '44444444', NULL);
INSERT INTO LOGINS VALUES ('Zom.Bie55@qmail.cuny.edu', '55555555', 'Admin', '55555555', NULL);

SELECT USERNAME, PASS_WORD FROM LOGINS;


/*
1 table for 3 different forms
all connect with a foriegn key that connects to the student
*/
drop table if exists PAGES;
Create table TEST(
	_FROMM1 varchar(15),
    _FROMY1 int(4),
    _TOM1 varchar(15),
    _TOY1 int(4),
    ADDY1 varchar(100)
);
select * from PAGES;
select * from TEST;
CREATE TABLE PAGES (	
	-- PG 1
    _NAME_ 				varchar(40) NOT NULL, 
	EMPLID 					INT(8) NOT NULL REFERENCES LOGINS,
    IMMIGRATION_STATUS 			VARCHAR(30) NOT NULL,
    -- FROM_DATE DATE Not Null,
    -- TO_DATE DATE Not NULL,
    UNDER_18 					varchar(8),
    UNDER_23 					varchar(8),
    STUDENT_TYPE 					varchar(15),
    SEMESTER 				nvarchar(20),
    REQUESTED_BY 				varchar(20) not null,
    _DATE_ 				varchar(20) not null,
    -- PG 2
    LAST_NAME 			varchar(50) NOT NULL,
    FIRST_NAME 			varchar(50) NOT NULL,
    MIDDLE_INITIAL 			varchar(1),
    
    DOB 					varchar(20) NOT NULL,
    PHONE_NUMBER 			nvarchar(15) NOT NULL,
    IS_CITIZEN 				varchar(3) NOT NULL,
    ALIEN 				varchar(3) NOT NULL,
    CURR_ADDRESS 		varchar(100) NOT NULL,
    -- optional addresses
    _FROMM1 			varchar(15),
    _FROMY1 				int(4),
    _TOM1 					varchar(15),
    _TOY1 					int(4),
    ADDY1 				varchar(100),
	_FROMM2 				varchar(15),
    _FROMY2 				int(4),
    _TOM2 					varchar(15),
    _TOY2 				int(4),
    ADDY2 					varchar(100),
    _FROMM3 					varchar(15),
    _FROMY3 				int(4),
    _TOM3 				varchar(15),
    _TOY3 					int(4),
    ADDY3 					varchar(100),
    -- end optional addresses
    PARENTS_ADD 			varchar(100),
	LEGAL_GAURD_U18 		varchar(3) NOT NULL,
    IF_LEGAL_GAURD_YES 		varchar(3) NOT NULL,
    NameAAddress varchar(100) ,
    SOURCE_OF_SUPPORT 		varchar(100) NOT NULL,
    TAX_RETURN12 		varchar(3) NOT NULL,
    FED_TAX12 			varchar(3) NOT NULL,
    FIN_AID 			varchar(3) NOT NULL,
    BENEFITS 		varchar(300),
    LIVE_IN_NY 		varchar(3) NOT NULL,
    UNCERTAIN 		varchar(200),
    ESIGN_DATE 			varchar(20) not null,
    ESIGN 			varchar(100) NOT NULL
    );

