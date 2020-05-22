
CREATE DATABASE IF NOT EXISTS CarCompany;

USE CarCompany;
DROP TABLE IF EXISTS 	CarOrder;
DROP TABLE IF EXISTS 	Car;
DROP TABLE IF EXISTS 	Customer;
CREATE TABLE    	   	Customer
(
		CustomerID		INT AUTO_INCREMENT PRIMARY KEY,
		`Name`			VARCHAR(30) NOT NULL ,
		Phone			CHAR(10) NOT NULL,
		Email			VARCHAR(50) NOT NULL ,
		Address			VARCHAR(100) NOT NULL ,
		Note			VARCHAR(50) 
);

CREATE TABLE	Car
(
		CarID			CHAR(5) NOT NULL PRIMARY KEY,
        Maker			ENUM ('HONDA', 'TOYOTA', 'NISSAN') NOT NULL,
        Model			VARCHAR(30) NOT NULL ,
        `Year`			DATE NOT NULL,
        Color			VARCHAR(20) NOT NULL,
        Note 			VARCHAR(50) 
);
CREATE TABLE	CarOrder
(
		OrderID				INT AUTO_INCREMENT PRIMARY KEY,
		CustomerID			INT NOT NULL REFERENCES Customer(CustomerID),
		CarID				CHAR(10) NOT NULL REFERENCES Car(CarID),
		Amount				INT DEFAULT '1' NOT NULL,
		SalePrice			TINYINT NOT NULL,
		OrderDate			DATETIME NOT NULL,
		DeliveryDate		DATETIME NOT NULL,
		DeliveryAddress 	VARCHAR(100) NOT NULL,
		Staus				ENUM ('0','1','2')  DEFAULT '0' NOT NULL,
		Note				VARCHAR(50) NOT NULL
);

INSERT INTO Customer    (`Name`	   		, Phone	  , Email			 , Address			 	, Note	)
VALUES		    		('Nguyễn Văn A' ,'0987654321','NVA@gmail.com','12 Bạch Mai' 	 	,null	),
						('Phạm Văn B'	,'0345178972','PVB@gmail.com','23 Minh Khai '		,null	),
                        ('Lê Thị C'		,'0976483612','LTC@gmail.com','44 Lê Thanh Nghị'	,null	),
                        ('Bùi Văn D'	,'0897635128','BVD@gmail.com','56 Phương Liệt'		,'VIP'	),
                        ('Phí Thị E'	,'0986572343','PTE@gmail.com','12 Kim Ngưu'			,null	),
                        ('Bùi Thị F'	,'0598273818','BTF@gmail.com','33 Lạc Trung '		,null	),
                        ('Trịnh Thị G'	,'0984673812','TTG@gmail.com','37 Thanh Nhàn'		,null	),
                        ('Dương Văn H'	,'0347892781','DVH@gmail.com','111 Trần Đại Nghĩa'	,'VVIP'	),
                        ('Lại Minh I'	,'0598278192','LMI@gmail.com','45 Đại La '			,null	),
                        ('Đặng Thị K'	,'0897625819','DTK@gmail.com','66 Bà Triệu'			,null	),
                        ('Khổng Minh L'	,'0981672692','KML@gmail.com','90 Phố Vọng'			,null	);
Select * from Customer;
                        
INSERT INTO Car     (CarID ,Maker   ,Model	 ,`Year`	,Color		,Note ) 	
VALUES				('HO29','HONDA' ,'HO20xx','2018/12/09','red'		,null),
                    ('TO65','TOYOTA','TO20xx','2019/08/23','green'	,null),
                    ('NI33','NISSAN','NI20xx','2018/06/09','black'	,null),
                    ('HO55','HONDA' ,'HO20xx','2018/09/22','black'	,null),
                    ('HO24','HONDA' ,'HO20xx','2019/08/18','white'	,null),
                    ('NI32','NISSAN','NI20xx','2017/01/09','red'	,null),
                    ('TO12','TOYOTA','TO20xx','2017/09/19','black'	,null),
                    ('TO34','TOYOTA','TO20xx','2019/03/14','white'	,null),
                    ('TO11','TOYOTA','TO20xx','2019/05/22','red'	,null),
                    ('NI05','NISSAN','NI20xx','2017/06/23','white'	,null),
                    ('HO12','HONDA' ,'HO20xx','2018/02/11','black'	,null);
Select * from Car;
