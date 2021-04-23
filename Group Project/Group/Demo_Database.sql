CREATE TABLE LOGINS (	
    USERNAME varchar(6) NOT NULL PRIMARY KEY, 
	PASS_WORD varchar(40) NOT NULL, 
	LOGIN_TYPE varchar(40) NOT NULL, 
	EMPLID INT(8) NOT NULL,
	FIRST_NAME varchar(40) NOT NULL,
	LAST_NAME varchar(40) NOT NULL,
    MIDDLE_NAME varchar(40),
    FORM_STATUS varchar(40)
);

/*
3 tables for 3 different forms
all connect with a foriegn key that connects to the student
each table would have a row corresponding to the information given
*/
CREATE TABLE PAGE1 (	
	STUDENT_KEY INT(100) NOT NULL FOREIGN KEY,
    NAME_ varchar(40) NOT NULL PRIMARY KEY, 
	Student_ID INT(8) NOT NULL,
    FROM_DATE DATE Not Null,
    TO_DATE DATE Not NULL,
    UNDER_18 Boolean,
    UNDER_23 Boolean,
    /*
    Freshman, transfer, seek, etc
    */
    REQUESTED_BY DATE not null,
    _DATE_ DATE not null
);


Select *
From LOGINS