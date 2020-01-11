-- Exercise 1: Tiếp tục với Database quản lý Fresher
CREATE DATABASE IF NOT EXISTS Fresher;
USE Fresher;

-- Q1: Create table with constraint and datatype 
DROP TABLE IF EXISTS Trainee;
CREATE TABLE       	Trainee	 
(
		  	TraineeID		 TINYINT AUTO_INCREMENT PRIMARY KEY ,
			Full_Name		 NVARCHAR(70) NOT NULL ,
            Birth_Date 	     DATE NOT NULL,
            Gender     		 ENUM ('Male', 'Female','Unknown') NOT NULL ,
            ET_IQ      		 TINYINT NOT NULL CHECK (0<ET_IQ<20),
            ET_Gmath   		 TINYINT NOT NULL CHECK (0<ET_Gmath<20),
            ET_English       TINYINT NOT NULL CHECK (0<ET_English<50),
            Training_Class   CHAR(10) NOT NULL,
            Evaluation_Notes TEXT 
);
 INSERT INTO Trainee 
 (  Full_Name   ,	  Birth_Date,	Gender,	ET_IQ, 	ET_Gmath,	ET_English,	Training_Class,	Evaluation_Notes) 
 VALUES
('Le Van A'     ,   '1998/01/01',   'Male',    20,		  10,		    40,	   		'VTI_01', NULL), 
('Le Thi B '    ,   '1998/01/12', 'Female',    11,		  13,		    30,	   		'VTI_02', NULL),  
('Le Van C '    ,   '1998/07/19',   'Male',    15,		  10,		    34,	   		'VTI_03',NULL), 
('Le Van D '    ,   '1998/09/26',   'Male',    19,		  20,		    25,	   		'VTI_01',NULL),  
('Le Dieu E'    ,   '1998/08/09', 'Female',    13,		  13,		    27,	   		'VTI_03',NULL), 
('Le Van F '    ,   '1998/09/11',   'Male',    05,		  15,		    30,	   		'VTI_01',NULL),
('Le Van G '    ,   '1998/11/23',   'Male',    20,		  17,		    43,	   		'VTI_02',NULL),
('Le My H  '    ,   '1998/08/27', 'Female',    14,		  17,		    30,	   		'VTI_01',NULL),
('Le Van I '    ,   '1998/11/21',   'Male',    09,		  16,		    20,	   		'VTI_02',NULL),
('Le Van K '    ,   '1998/02/19',   'Male',    12,		  15,		    34,	   		'VTI_01',NULL),
('Le Thanh L'   ,   '1998/05/27', 'Female',    13,		  19,		    30,	   		'VTI_03',NULL);

-- Question 2: Viết lệnh để lấy ra tất cả các thực tập sinh đã vượt qua bài test đầu vào, nhóm chúng thành các tháng sinh khác nhau 

SELECT TraineeID, Birth_Date , group_concat(Full_name)
FROM      Trainee
GROUP BY  MONTH(Birth_Date);
-- Question 3: Viết lệnh để lấy ra thực tập sinh có tên dài nhất, lấy ra các thông tin sau: tên, tuổi, các thông tin cơ bản (như đã được định nghĩa trong table) 
SELECT Full_name, (YEAR(CURDATE()) - YEAR(Birth_Date)) AS Tuoi,length(Full_name) AS Ten_Dai_Nhat
FROM   Trainee
WHERE  length(Full_name)= (SELECT MAX(length(Full_name)) FROM Trainee);

-- Question 4: Viết lệnh để lấy ra tất cả các thực tập sinh là ET, 1 ET thực tập sinh là những người đã vượt qua bài test đầu vào và thỏa mãn số điểm như sau:
--  ET_IQ + ET_Gmath>=20 
--  ET_IQ>=8 
--  ET_Gmath>=8 
--  ET_English>=18
SELECT 		*
FROM 		Trainee
WHERE	 	ET_IQ + ET_Gmath>=20 AND ET_IQ>=8 AND ET_Gmath>=8 AND ET_English>=18;


-- Question 5: xóa thực tập sinh có TraineeID = 3 

DELETE 
FROM		Trainee 
WHERE		TraineeID ='3';

-- Question 6: Thực tập sinh có TraineeID = 5 được chuyển sang lớp "2". Hãy cập nhật thông tin vào database
UPDATE 	Trainee
SET 	Training_Class ='VTI_02'
WHERE 	TraineeID ='5';
SELECT * FROM Trainee