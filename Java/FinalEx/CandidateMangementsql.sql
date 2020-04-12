
DROP DATABASE IF EXISTS CandidateMangement;
CREATE DATABASE IF NOT EXISTS CandidateMangement;
USE CandidateMangement;

-- Create table Manager with constraint and datatype
DROP TABLE IF EXISTS Manager;
CREATE TABLE IF NOT EXISTS Manager
( id						TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `passWord`					VARCHAR (30) NOT NULL,
  firstName					VARCHAR (30) NOT NULL,
  lastName					VARCHAR (30) NOT NULL,
  email						VARCHAR (50) NOT NULL UNIQUE,
  expInYear					TINYINT NOT NULL,
  phone						CHAR(10) NOT NULL UNIQUE
);
INSERT INTO Manager ( `passWord`,firstName	,lastName	,email				,expInYear	,phone		)
VALUES				("ma001"	,"Lê"		,"Lan"		,"lan123@gmail.com"	,"2"		,"0974521347"),
					("ma002"	,"Lê"		,"Hương"	,"huong34@gmail.com","4"		,"0926112398"),
					("ma003"	,"Bùi"		,"Hoa"		,"hoa789@gmail.com"	,"5"		,"0369556290");

-- Create table Employee with constraint and datatype
DROP TABLE IF EXISTS Employee;
CREATE TABLE IF NOT EXISTS Employee
( id						TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `passWord`					VARCHAR (30) NOT NULL,
  firstName					VARCHAR (30) NOT NULL,
  lastName					VARCHAR (30) NOT NULL,
  email						VARCHAR (50) NOT NULL UNIQUE,
  phone						CHAR(10) NOT NULL UNIQUE,
  projectName				VARCHAR (30) NOT NULL,
  ProSkill					VARCHAR (30) NOT NULL
);

INSERT INTO Employee	( `passWord`,firstName	,lastName	,email				,phone			,projectName			,ProSkill	)
VALUES					("em001"	,"Nham"		,"Xuân"		,"xuan123@gmail.com","0967289101"	,"Testing System"		,"Java"		),
                        ("em002"	,"Nguyễn"	,"Nhàn"		,"nhan245@gmail.com","0678915672"	,"TimeSheet"					,"C#"		),
                        ("em003"	,"ĐẶng"		,"Hà"		,"ha457@gmail.com"	,"0578925718"	,"CRM"					,"Python"	);
select * from Manager;
select * from Employee;
