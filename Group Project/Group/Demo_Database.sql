CREATE TABLE LOGINS (	
    USERNAME varchar(60) NOT NULL, 
	PASS_WORD varchar(40) NOT NULL, 
	LOGIN_TYPE varchar(40) NOT NULL, 
	EMPLID INT(8) NOT NULL PRIMARY KEY,
	FORM_STATUS varchar(40)
);

INSERT INTO LOGINS VALUES ('Jon.Doe11@qmail.cuny.edu', '11111111', 'Student', '11111111', 'Not Submitted');
INSERT INTO LOGINS VALUES ('Jane.Doe11@qmail.cuny.edu', '22222222', 'Student', '22222222', 'Not Submitted');
INSERT INTO LOGINS VALUES ('Zach.Gal33@qmail.cuny.edu', '33333333', 'Bursar', '33333333', NULL);
INSERT INTO LOGINS VALUES ('Zoe.Gal44@qmail.cuny.edu', '44444444', 'Bursar', '44444444', NULL);
INSERT INTO LOGINS VALUES ('Zom.Bie55@qmail.cuny.edu', '55555555', 'Admin', '55555555', NULL);

SELECT *
FROM LOGINS;

/*
3 tables for 3 different forms
all connect with a foriegn key that connects to the student
each table would have a row corresponding to the information given
*/
CREATE TABLE PAGES (	
	-- PG 1
    _NAME_ varchar(40) NOT NULL, 
	EMPLID INT(8) NOT NULL REFERENCES LOGINS,
    FROM_DATE DATE Not Null,
    TO_DATE DATE Not NULL,
    UNDER_18 Boolean,
    UNDER_23 Boolean,
    FRESHMAN Boolean,
    Transfer Boolean,
    SEEK BOOLEAN,
    ACE_LEAP Boolean,
    Non_Degree Boolean,
    RE_Enter Boolean,
    REQUESTED_BY DATE not null,
    _DATE_ DATE not null,
    -- PG 2
    LAST_NAME varchar(50) NOT NULL,
    FIRST_NAME varchar(50) NOT NULL,
    MIDDLE_INITIAL varchar(1), 
    DOB DATE NOT NULL,
    PHONE_NUMBER INT(10) NOT NULL,
    IS_CITIZEN Boolean,
    ALIEN Boolean,
    CURR_ADDRESS varchar(100) NOT NULL,
    OPT_ADD_ID INT(10) PRIMARY KEY,
    PARENTS_ADD varchar(100) NOT NULL,
	LEGAL_GAURD_U18 Boolean,
    SOURCE_of_SUPP varchar(100) NOT NULL,
    TAX_RETURN12 Boolean,
    FED_TAX12 Boolean,
    FIN_AID Boolean,
    BENEFITS varchar(300),
    LIVE_IN_NY Boolean,
    UNCERTAIN varchar(200),
    ESIGN varchar(100) NOT NULL,
    -- PG 3
    COUNTY varchar(40) NOT NULL,
    SEM_SEASON varchar(20) NOT NULL,
    SEM_NUM INT(2) NOT NULL,
    _DAY_ INT(2) NOT NULL,
    _MONTH_ varchar(15) NOT NULL,
    _YEAR_ INT(2) NOT NULL,
    NOTARY_PUBLIC varchar(100)
    );


CREATE TABLE OPT_ADDRESSES2 (
	OPT_ADD_ID INT(10) References PAGES,
    _FROM1 varchar(100),
    _TO1 varchar(100),
    _COMP_ADD1 varchar(100),
	_FROM2 varchar(100),
    _TO2 varchar(100),
    _COMP_ADD2 varchar(100),
	_FROM3 varchar(100),
    _TO3 varchar(100),
    _COMP_ADD3 varchar(100)
);
