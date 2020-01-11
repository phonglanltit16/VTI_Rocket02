-- EXAM1 
CREATE DATABASE IF NOT EXISTS Fresher;
USE Fresher;

-- Q1: Create table with constraint and datatype 
DROP TABLE IF EXISTS Trainee;
CREATE TABLE       	Trainee	 
(
		  	TraineeID		 TINYINT AUTO_INCREMENT PRIMARY KEY ,
			Full_Name		 NVARCHAR(30) NOT NULL ,
            Birth_Date 	     DATE NOT NULL,
            Gender     		 ENUM ('Male', 'Female','Unknown') NOT NULL,
            ET_IQ      		 TINYINT NOT NULL CHECK (0<ET_IQ<20),
            ET_Gmath   		 TINYINT NOT NULL CHECK (0<ET_Gmath<20),
            ET_English       TINYINT NOT NULL CHECK (0<ET_English<50),
            Training_Class   CHAR(10) NOT NULL,
            Evaluation_Notes TEXT 
);
-- Q2:  them cot 
ALTER TABLE Trainee
ADD COLUMN VTI_Account       CHAR(50) UNIQUE NOT NULL;

-- EXAM 2 
CREATE DATABASE IF NOT EXISTS Exam2;
USE Exam2;
DROP TABLE IF EXISTS Bang2;
CREATE TABLE       	Bang2
(
	ID             INT AUTO_INCREMENT PRIMARY KEY,
	`Name`          VARCHAR(30) NOT NULL ,
	`Code`          CHAR(5) NOT NULL,
	ModifiedDate   DATETIME
);


-- EXAM3
CREATE DATABASE IF NOT EXISTS Exam3;
USE Exam3;
DROP TABLE IF EXISTS Bang3;
CREATE TABLE       	Bang3
(
	ID             INT AUTO_INCREMENT PRIMARY KEY,
	Name3          VARCHAR(30) NOT NULL ,
    BirthDate      DATE,
    Gender         ENUM ('0', '1') ,
    IsDeletedFlag  BIT
);