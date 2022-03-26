--@Block
CREATE TABLE newaccount(
        accountnumber INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        middlename VARCHAR(30) NOT NULL,
        fathername VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        mobilenumber INT(12) NOT NULL,
        dateofbirth DATE NOT NULL,
        accountbalance INT(100) NOT NULL,
        address TEXT NOT NULL,
        city VARCHAR(30) NOT NULL,
        district VARCHAR(30) NOT NULL,
        pincode INT(10) NOT NULL,
        state VARCHAR(30) NOT NULL,
        gender CHARACTER(7) NOT NULL,
        reg_date TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT current_timestamp()
    
);


--@Block
CREATE TABLE contact(
   id INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,
   firstname VARCHAR(30) NOT NULL,
   lastname VARCHAR(30) NOT NULL,
   email VARCHAR(30) NOT NULL,
   message TEXT NOT null,
   reg_date TIMESTAMP NOT NULL current_timestamp() ON UPDATE current_timestamp()
);

--@block
CREATE TABLE verifiedaccount(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        middlename VARCHAR(30) NOT NULL,
        fathername VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        mobilenumber INT(12) NOT NULL,
        dateofbirth DATE NOT NULL,
        accountnumber INT(10) NOT NULL,
        accountbalance INT(100) NOT NULL,
        address TEXT NOT NULL,
        city VARCHAR(30) NOT NULL,
        district VARCHAR(30) NOT NULL,
        pincode INT(10) NOT NULL,
        state VARCHAR(30) NOT NULL,
        gender CHARACTER(7) NOT NULL
    
);

--@block
CREATE TABLE signin(
        id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL
);

--@block
CREATE TABLE deletedaccount(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        middlename VARCHAR(30) NOT NULL,
        fathername VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        mobilenumber INT(12) NOT NULL,
        dateofbirth DATE NOT NULL,
        accountnumber INT(10) NOT NULL,
        accountbalance INT(100) NOT NULL,
        address TEXT NOT NULL,
        city VARCHAR(30) NOT NULL,
        district VARCHAR(30) NOT NULL,
        pincode INT(10) NOT NULL,
        state VARCHAR(30) NOT NULL,
        gender CHARACTER(7) NOT NULL
    
);



--@block
ALTER TABLE newaccount
ADD CONSTRAINT constraint_name UNIQUE (column1, column2, ... column_n);


--@block
SELECT * FROM newaccount;
--@block
SELECT accountnumber FROM newaccount  WHERE firstname = 'sagar';