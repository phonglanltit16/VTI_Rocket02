-- Cho table sau:
-- Department (Department_Number, Department_Name)
-- Employee_Table (Employee_Number, Employee_Name,Department_Number)
-- Employee_Skill_Table (Employee_Number, Skill_Code, Date Registered)
-- Question 1: Tạo table với các ràng buộc và kiểu dữ liệu
CREATE DATABASE IF NOT EXISTS Company;
USE Company;

DROP TABLE IF EXISTS Employee_Skill_Table;
DROP TABLE IF EXISTS Employee_Table;
DROP TABLE IF EXISTS Department;

-- Q1: Create table with constraint and datatype 
CREATE TABLE        	Department	 
(
		  	Department_Number    TINYINT AUTO_INCREMENT PRIMARY KEY ,
			Department_Name		 NVARCHAR(50) NOT NULL
);

CREATE TABLE       	Employee_Table 
(
			Employee_Number       TINYINT AUTO_INCREMENT PRIMARY KEY ,
            Employee_Name         NVARCHAR(70) NOT NULL ,
            Department_Number		  TINYINT NOT NULL , 
            FOREIGN KEY (Department_Number) REFERENCES Department(Department_Number)
);

CREATE TABLE        Employee_Skill_Table
(
			Employee_Number       TINYINT NOT NULL,
            Skill_Code            CHAR(10) NOT NULL,
            Date_RegistereD       DATE NOT NULL,
            PRIMARY KEY (Employee_Number, Skill_Code),
            FOREIGN KEY (Employee_Number) REFERENCES Employee_Table(Employee_Number)
);

-- Question 2: Thêm ít nhất 10 bản ghi vào table

INSERT INTO Department ( Department_Name)
VALUES                 ('Nhà 1'),
                       ('Nhà 2'),
                       ('Nhà 3'),
                       ('Nhà 4'),
                       ('Nhà 5'),
                       ('Nhà 6'),
                       ('Nhà 7'),
                       ('Nhà 8'),
                       ('Nhà 9'),
                       ('Nhà 10');
SELECT * FROM Department;

INSERT INTO Employee_Table  (Employee_Name, Department_Number)
VALUES                      (   'Le Van A','3'),
					        (   'Le Van C','4'),
                            (   'Le Van D','1'),
						    (   'Le Van E','8'),
						    (   'Le Van F','5'),
							(   'Le Van G','3'),
							(   'Le Van H','6'),
							(   'Le Van I','4'),
							(   'Le Van K','6'),
							(   'Le Van L','5');
SELECT * FROM Employee_Table;
				
INSERT INTO Employee_Skill_Table (Employee_Number,Skill_Code, Date_Registered)
VALUES                           ('3',   'JAVA',    '2019/10/19'),
								 ('4',      'A',    '2018/11/09'),
                                 ('1',      'D',    '2018/08/19'),
                                 ('8',   'JAVA',    '2018/11/07'),
                                 ('5',      'T',    '2019/07/09'),
                                 ('5',   'JAVA',    '2019/03/20'),
                                 ('6',      'F',    '2019/10/19'),
                                 ('4',   'JAVA',    '2019/10/19'),
                                 ('6',   'JAVA',    '2019/10/19');
SELECT * FROM Employee_Skill_Table;
                           
-- Question 3: Viết lệnh để lấy ra danh sách nhân viên (name) có skill Java. Hướng dẫn: sử dụng UNION
             
            SELECT     et.Employee_Name, est.Skill_code
			FROM       Employee_Table et
			JOIN	   Employee_Skill_Table est ON	et.Employee_Number = est.Employee_Number
			WHERE      est.Skill_Code = 'JAVA'; 

-- Question 4: Viết lệnh để lấy ra danh sách các phòng ban có >2 nhân viên
			SELECT 	Department_Number, COUNT(*) AS SO_NHAN_VIEN
			FROM   		Employee_Table
			GROUP BY  	Department_Number
			HAVING 		COUNT(*) >= 2;
            
-- Question 5: Viết lệnh để lấy ra danh sách nhân viên của mỗi văn phòng ban.Hướng dẫn: sử dụng GROUP BY
			SELECT		Department_Number,group_concat(Employee_Name)
            FROM 		Employee_Table
            GROUP BY  	Department_Number;
		  
-- Question 6: Viết lệnh để lấy ra danh sách nhân viên có > 1 skills.Hướng dẫn: sử dụng DISTINCT?????sửa lại 
			SELECT		Employee_Number, SO_SKILL
            FROM 		(SELECT		Employee_Number, COUNT(*) AS SO_SKILL
						FROM		Employee_Skill_Table
						GROUP BY	Skill_Code) AS THONG_KE_SO_SKILL
            WHERE 		SO_SKILL>1;