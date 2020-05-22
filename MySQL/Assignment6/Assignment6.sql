
DROP DATABASE IF EXISTS ProjectDemo;
CREATE DATABASE IF NOT EXISTS ProjectDemo;
USE ProjectDemo;

-- Q1: Create table with constraint and datatype 
DROP TABLE IF EXISTS Work_Done;
DROP TABLE IF EXISTS Project_Modules;
DROP TABLE IF EXISTS Projects;
DROP TABLE IF EXISTS Employee;
CREATE TABLE  Employee
(
		EmployeeID				TINYINT AUTO_INCREMENT PRIMARY KEY ,
        EmployeeLastName		VARCHAR(20) NOT NULL,
        EmployeeFistName		VARCHAR(20) NOT NULL,
        EmployeeHireDate		DATE NOT NULL,
        EmployeeStatus			VARCHAR(20) NOT NULL,
        SupervisorID			CHAR(10) NOT NULL,
        SocialSecurityNumber	INT NOT NULL
        
);

CREATE TABLE  Projects
(
		ProjectID 				CHAR(10) NOT NULL PRIMARY KEY,
        EmployeeID				TINYINT NOT NULL REFERENCES Employee(EmployeeID),
        ProjectName				VARCHAR(60) NOT NULL,
        ProjectStartDate		DATE NOT NULL,
        ProjectDescription		VARCHAR(200) NOT NULL,
        ProjectDetailt			VARCHAR(1000) NOT NULL,
        ProjectCompletedOn		DATE NOT NULL
);

CREATE TABLE  Project_Modules
(
		ModuleID					CHAR(10) NOT NULL PRIMARY KEY,
        ProjectID					CHAR(10) NOT NULL REFERENCES Projects(ProjectID) , 
        EmployeeID					CHAR(10) NOT NULL REFERENCES Employee(EmployeeID),
        ProjectModulesDate			DATE NOT NULL,
        ProjectModulesCompledOn		DATE NOT NULL,
        ProjectModulesDescription	VARCHAR(100) NOT NULL
);

CREATE TABLE  Work_Done
(
		WorkDoneID					CHAR(10) NOT NULL PRIMARY KEY,
        EmployeeID					CHAR(10) NOT NULL REFERENCES Employee(EmployeeID),
        ModuleID					CHAR(10) NOT NULL REFERENCES Project_Modules(ModuleID),
        WorkDoneDate				DATE ,
        WorkDoneDescription			VARCHAR(200) NOT NULL,
        WorkDoneStatus				VARCHAR(20) NOT NULL
);

INSERT INTO  Employee
( EmployeeLastName, EmployeeFistName, EmployeeHireDate, EmployeeStatus	, SupervisorID	, SocialSecurityNumber)
 VALUES 
 ('Lan'			  ,'Lê '			,'2018/01/10'	  ,'đang làm'		,' 2'		,'23465'),
 ('Trang '		  ,'Nguyễn'			,'2017/12/01'	  ,'đang làm' 		,' 3'		,'65783'),
 ('Hiền'		  ,'Lê '			,'2018/05/02'	  ,'đang làm'		,' 5'		,'34562'),
 ('Nga '		  ,'Phạm '			,'2019/03/20'	  ,'đã nghỉ '		,' 1'		,'87954'),
 ('Ngọc'		  ,'Phạm'			,'2019/09/23'	  ,'đang làm'		,' 4'		,'23145');
 Select * from Employee;
 
 INSERT INTO  Projects
(ProjectID  ,EmployeeID ,ProjectName    , ProjectStartDate  , ProjectDescription, ProjectDetailt				     , ProjectCompletedOn) 
VALUES 
('Pr1'		,'2'		,'Project1'		,'2019/11/10'		,' Website bán hàng', 'Website bán hàng phụ kiện nam '	 ,'2019/01/10'        ),
('Pr2'		,'4'		,'Project2'		,'2019/12/01'		,' Website bán hàng', 'Website bán hàng mô hình đồ chơi ','2020/02/01'        ),
('Pr3'		,'1'		,'Project3'		,'2019/10/02'		,' Website bán hàng', 'Website bán  quần áo'			 ,'2019/12/02'        ),
('Pr4'		,'3'		,'Project4'		,'2019/10/20'		,' Website bán hàng', 'Website bán đồng hồ'				 ,'2019/10/20'        ),
('Pr5'		,'5'		,'Project5'		,'2019/12/20'		, 'Website bán hàng', 'Website bán hàng thực phẩm'		 ,'2019/12/20'		  );
Select * from Projects;

INSERT INTO Project_Modules
( ModuleID, ProjectID, EmployeeID, ProjectModulesDatE, ProjectModulesCompledOn	, ProjectModulesDescription				)
VALUES 
('M01'	  ,'Pr2'	,'4'		,'2019/11/10'		,'2019/12/10'				,'Thiết kế hình ảnh '   	 		    ),		
('M02'	  ,'Pr5'	,'5'		,'2019/12/01'		,'2020/01/01'				,'Thiết kế danh mục sản phẩm '		    ),		
('M03'	  ,'Pr1'	,'2'		,'2019/10/02'		,'2019/11/02'				,'Thiết kế giao diện web'     		    ),		
('M04'	  ,'Pr3'	,'1'		,'2019/10/20'		,'2019/11/20'				,'Thiết kế các nút thay đổi sản phẩm'   ),		
('M05'	  ,'Pr4'	,'3'		,'2019/12/20'		,'2020/01/20'				,'Thiết kế đăng nhập'					);
	
Select * from 	Project_Modules;

INSERT INTO  Work_Done
( WorkDoneID, EmployeeID, ModuleID	, WorkDoneDate, WorkDoneDescription, WorkDoneStatus ) 
VALUES 
('WD02'	  ,'2'	  	   ,	  'M01' , '2020/01/01' ,'W1'               , '50%'),
('WD01'	  ,'5'	  	   ,	  'M03' , NULL         ,'W3'               , '20%'),
('WD05'	  ,'4'	  	   ,	  'M02' ,'2020/01/01'  ,'W2'               , '70%'),
('WD04'	  ,'3'	  	   ,	  'M05' ,'2020/01/01'  ,'W5'               , '90%'),
('WD03'	  ,'1'	  	   ,	  'M04' , NULL         ,'W1'               , '15%');
SELECT * FROM Work_Done;

-- Q2
-- Cách 1 : Transaction
USE projectsmanager;
DROP PROCEDURE IF EXISTS edit_Projects;
DELIMITER $$
CREATE PROCEDURE edit_Projects()
BEGIN 
        -- lấy projectID của các project đã hoàn thành sau 3 tháng kể từ ngày hiện tại
        DROP VIEW IF EXISTS ProjectIDcanxoa;
		CREATE VIEW ProjectIDcanxoa AS
        SELECT		ProjectID 
		FROM		Projects
		WHERE		SUBDATE(CURDATE() , INTERVAL 90 DAY)> ProjectCompletedOn;
        select * FROM ProjectIDcanxoa;
        
        -- lấy danh sách ModuleID theo các ProjectID của các project cần xóa 
        DROP  VIEW IF EXISTS ModuleIDcanxoa;
        CREATE VIEW ModuleIDcanxoa AS
		SELECT		ModuleID 
		FROM 		Project_Modules
        WHERE		ProjectID IN  	( 	SELECT		ProjectID 
										FROM		ProjectIDcanxoa );
		select * FROM ModuleIDcanxoa;
        
        -- xóa dữ liệu ở bảng Word_done nhờ WorkDoneID mà có ModuleID cần xóa
        DELETE
        FROM		Work_Done
		WHERE 	 	ModuleID IN (	SELECT 	ModuleID 
								FROM 	ModuleIDcanxoa);
                                
		-- xóa dữ liệu ở bảng  Project_Modules nhờ có ProjectID cần xóa
		DELETE
        FROM		Project_Modules
		WHERE 	 	ModuleID IN (	SELECT 	ProjectID 
									FROM 	ProjectIDcanxoa);
                                    
		-- xóa dữ liệu ở bảng  Projects nhờ có ProjectID cần xóa
        DELETE
        FROM		Projects
		WHERE 	 	ModuleID IN (	SELECT 	ProjectID 
									FROM 	ProjectIDcanxoa);						
END $$
DELIMITER ;
CALL edit_Projects;








-- Cách 2 : CTE 
-- Cách 3 : ON DELETE CASDASE
		-- ALTER TABLE Project_Module 
		-- ADD CONSTRAINT fk_pmProjectID
		-- FOREIGN KEY (ProjectID) 
        -- REFERENCES Projects (ProjectID)
		-- ON DELETE CASCADE; 
 
 
-- EX 3 Viết stored procedure (có parameter) để in ra các module đang được thực hiện)
DROP PROCEDURE IF EXISTS edit_module;
DELIMITER $$
CREATE PROCEDURE edit_module()
	BEGIN
		SELECT 	ModuleID
		FROM 	Project_Modules 
		WHERE  ProjectModulesCompledOn IS NULL;
			
	END$$
DELIMITER ;
CALL  edit_module();

-- EX4 Viết hàm (có parameter) trả về thông tin 1 nhân viên đã tham gia làm mặc dù không ai giao việc cho nhân viên đó (trong bảng Works) 
DROP PROCEDURE IF EXISTS edit_employee;
DELIMITER $$
CREATE PROCEDURE edit_employee()
	BEGIN
			select EmployeeLastName, EmployeeFistName, EmployeesID
			from Orders 
            right join Employees on Orders.EmployeeID = Employees.EmployeeID
    
    
	END$$
DELIMITER ;
CALL  edit_employee();

DELETE FROM Projects WHERE ProjectID = 'Pr1'
SELECT * FROM PROJECTS