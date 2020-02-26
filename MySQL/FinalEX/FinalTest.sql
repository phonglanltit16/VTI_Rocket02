
CREATE DATABASE IF NOT EXISTS ManageStudents;

USE ManageStudents;
DROP TABLE IF EXISTS 	Student;
DROP TABLE IF EXISTS 	`Subject`;
DROP TABLE IF EXISTS 	StudentSubject;

CREATE TABLE		Student
(
			RN			INT AUTO_INCREMENT  NOT NULL PRIMARY KEY,
            `Name`		NVARCHAR(70) NOT NULL ,
            Age			TINYINT NOT NULL,
            Gender		TINYINT NOT NULL
);
CREATE TABLE		`Subject`
(
			sID			INT AUTO_INCREMENT  NOT NULL PRIMARY KEY,
            sName		NVARCHAR(70) NOT NULL 
);

 CREATE TABLE			StudentSubject
 (
			RN			INT AUTO_INCREMENT  NOT NULL REFERENCES   Student(RN) ON DELETE CASCADE,
            sID			TINYINT NOT NULL  REFERENCES  `Subject`(sID) ON DELETE CASCADE ,
			Mark		FLOAT NOT NULL,
			`Date`		DATE NOT NULL,
		PRIMARY KEY(RN, sID)
		  
);	
INSERT INTO Student ( `Name`		, Age	, Gender) 
VALUES				('Lê Văn A'		, 18	,'0'	),
					('Nguyễn Thị B'	,20		,'1'	),
                    ('Trần Minh C'	,21		,'0'	),
                    ('Lại Ngọc D'	,19		,'2'	);
Select * from Student;

INSERT INTO	 `Subject`	( sName		) 
VALUES					('Toán'		),
						('Lý'		),
                        ('Hóa'		),
                        ('Ngoại Ngữ');
Select * from `Subject`;

INSERT INTO		StudentSubject	(sID,Mark,`Date`)
VALUES							('2','9','2020/02/26'),
								('4','5','2020/02/12'),
                                ('4','7','2020/02/09'),
                                ('1','8','2020/02/21');
Select * from	StudentSubject;
-- Câu b
-- b.a Lấy tất cả các môn học không có bất kì điểm nào 
		SELECT  *
		FROM	`Subject` 
		WHERE	sID NOT IN		( SELECT 	sID
								FROM		StudentSubject);
-- 	b.b Lấy danh sách các môn học có ít nhất 2 điểm
		SELECT  *
		FROM	`Subject` 
		WHERE   sID IN( SELECT  sID
						FROM	StudentSubject 
						GROUP BY sID
						HAVING	 COUNT(sID)>=2
						);
-- Câu c: Tạo "StudentInfo" view có các thông tin về học sinh bao gồm: RN,sID,Name, Age, Gender, sName, Mark, Date. Với cột Gender show
-- Male để thay thế cho 0, Female thay thế cho 1 và Unknow thay thế cho null.
		DROP VIEW IF EXISTS StudentInfo;
		CREATE VIEW 		StudentInfo 
		AS
		SELECT		st.RN, st.Age, st.`Name`,
					CASE st.Gender 	WHEN 0 THEN 'Male'
									WHEN 1 THEN 'Female'
									ELSE 'Unknown'
									END AS Gender,
					s.sID, ss.Mark, ss.`Date`
        FROM		Student st, `Subject` s, StudentSubject ss
        WHERE		(st.RN=ss.RN) AND (ss.sID=s.sID) ;
	Select * from StudentInfo;

-- d) Tạo trigger cho table Subject:
-- d.a. Trigger CasUpdate: khi thay đổi data của cột sID, thì giá trị của cột sID của table StudentSubject cũng thay đổi theo
DROP TRIGGER IF EXISTS CasUpdate;
DELIMITER $$

CREATE TRIGGER CasUpdate
AFTER UPDATE ON `Subject`
FOR EACH ROW
BEGIN 
			UPDATE	StudentSubject SET sID = ss.sID
			WHERE   sID = ss.sID ;
            
END $$
DELIMITER ;

-- d.b: Trigger casDel: Khi xóa 1 student, các dữ liệu của table StudentSubject cũng sẽ bị xóa theo
DROP TRIGGER IF EXISTS casDel;
DELIMITER $$
CREATE TRIGGER casDel 
AFTER UPDATE ON Student
FOR EACH ROW 	
BEGIN
BEGIN
	SELECT 'some text' as '';
	DELETE FROM 	StudentSubject ss
	WHERE 			s.RN= ss.RN;
END$$
DELIMITER ;
		DELETE 	FROM Student WHERE RN=2;
        SELECT * FROM Student;
        SELECT * FROM StudentSubject;
