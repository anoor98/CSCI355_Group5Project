CREATE TABLE LOGINS (	
    USERNAME varchar(60) NOT NULL, 
	PASS_WORD varchar(40) NOT NULL, 
	LOGIN_TYPE varchar(40) NOT NULL, 
	EMPLID INT(8) NOT NULL PRIMARY KEY,
	-- FIRST_NAME varchar(40) NOT NULL,
	-- LAST_NAME varchar(40) NOT NULL,
    -- MIDDLE_NAME varchar(40),
	FORM_STATUS varchar(40)
);
SELECT *
FROM LOGINS;

/*
3 tables for 3 different forms
all connect with a foriegn key that connects to the student
each table would have a row corresponding to the information given
*/
CREATE TABLE PAGE1 (	
	-- STUDENT_KEY INT(100) NOT NULL FOREIGN KEY,
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
    _DATE_ DATE not null
);

Create table PAGE2 (
    LAST_NAME varchar(50) NOT NULL,
    FIRST_NAME varchar(50) NOT NULL,
    MIDDLE_INITIAL varchar(1),
    EMPLID INT(8) NOT NULL References LOGINS,
    DOB DATE NOT NULL,
    PHONE_NUMBER INT(10) NOT NULL,
    IS_CITIZEN Boolean,
    ALIEN Boolean,
    CURR_ADDRESS varchar(100) NOT NULL,
    OPT_ADD_ID INT(10) PRIMARY KEY,
    PARENTS_ADD varchar(100) NOT NULL,
	UNDER_18 Boolean,
	LEGAL_GAURD_U18 Boolean,
    SOURCE_of_SUPP varchar(100) NOT NULL,
    TAX_RETURN12 Boolean,
    FED_TAX12 Boolean,
    FIN_AID Boolean,
    BENEFITS varchar(300),
    LIVE_IN_NY Boolean,
    UNCERTAIN varchar(200),
    _DATE_ DATE NOT NULL,
    ESIGN varchar(100) NOT NULL
);

CREATE TABLE OPT_ADDRESSES2 (
	OPT_ADD_ID INT(10) References PAGE2,
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

create table PAGE3 (
	EMPLID INT(8) NOT NULL references LOGINS,
    COUNTY varchar(40) NOT NULL,
    _NAME_ varchar(100) NOT NULL,
    CURR_ADD varchar(100) NOT NULL,
    SEM_SEASON varchar(20) NOT NULL,
    SEM_NUM INT(2) NOT NULL,
    ESIGN varchar(100) NOT NULL,
    _DAY_ INT(2) NOT NULL,
    _MONTH_ varchar(15) NOT NULL,
    _YEAR_ INT(2) NOT NULL,
    NOTARY_PUBLIC varchar(100)
);
