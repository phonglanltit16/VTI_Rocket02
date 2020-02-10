-- Question 1: Viết 1 query lấy thông tin "Name" từ bảng Production.Product có name của ProductSubcategory là 'Saddles'.
SELECT		p.Name, p.ProductID, p.ProductSubcategoryID
FROM		Product p
WHERE 		p.Name IN 
						( SELECT	ps.Name
						FROM		ProductSubcategory ps
						WHERE		ps.Name='Saddles');
 --         
SELECT		p.Name, p.ProductID, p.ProductSubcategoryID 
FROM 		Product p
INNER JOIN  ProductSubcategory ps ON p.ProductSubcategoryID= ps.ProductSubcategoryID
WHERE 		ps.Name='Saddles';			
		select * from ProductSubcategory; 
        select * from Product;
       
-- Q2
SELECT		p.Name, p.ProductID, p.ProductSubcategoryID 
FROM 		Product p
INNER JOIN  ProductSubcategory ps ON p.ProductSubcategoryID= ps.ProductSubcategoryID
WHERE 		ps.Name like 'Bo%'; 	

-- Q3
SELECT   	P.ProductID, P.Name, P.ListPrice
FROM 		Product p
WHERE 		ProductSubcategoryID= '3' AND   ListPrice = ( SELECT MIN(ListPrice) FROM Product p WHERE 	ProductSubcategoryID= '3');
    
-- Ex2 
-- Q1
select * from countryregion;
select * from stateprovince;
SELECT		c.Name AS Country, s.Name AS Province
FROM 		countryregion c 
JOIN		stateprovince s ON c.CountryRegionCode= s.CountryRegionCode;

-- Q2
SELECT		c.Name AS Country, s.Name AS Province
FROM 		countryregion c 
JOIN		stateprovince s ON c.CountryRegionCode= s.CountryRegionCode
HAVING		country IN ('Germany','Canada');

-- Q3: SalesOrderID, OrderDate and SalesPersonID. Từ bảng SalesPerson, chúng ta lấy cột 
-- BusinessEntityID (là định danh của người sales), Bonus and the SalesYTD (là đã sale
-- được bao nhiêu người trong năm nay)
select * from salesperson;
select * from salesorderheader;
SELECT		so.SalesOrderID, so.OrderDate, so.SalesPersonID, sp.Bonus, sp.SalesYTD
FROM		salesorderheader so
JOIN		salesperson sp ON so.SalesPersonID= sp.SalesPersonID;

-- Q4

select * from employee;
SELECT		so.SalesOrderID, so.OrderDate, so.SalesPersonID, sp.Bonus, sp.SalesYTD, e.Title AS  Jobtitle  
FROM		salesorderheader so 
JOIN		salesperson sp ON so.SalesPersonID= sp.SalesPersonID
JOIN		employee e ON (s.SalesPersonID =  e.EmployeeID);
