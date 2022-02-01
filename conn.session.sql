--@Block
CREATE TABLE newaccount(
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
ALTER TABLE `newaccount`
ADD
        `reg_date` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT current_timestamp()
;

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