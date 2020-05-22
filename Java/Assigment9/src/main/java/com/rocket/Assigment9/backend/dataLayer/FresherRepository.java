/**
 * 
 */
package com.rocket.Assigment9.backend.dataLayer;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.Properties;

/**
 * This class is fresher reponsitory. 
 * 
 * @Description: .
 * @author: PhongLan
 * @create_date: Apr 11, 2020
 * @version: 1.0
 * @modifer: PhongLan
 * @modifer_date: Apr 11, 2020
 */
public class FresherRepository {
	
	private Connection getDatabaseConnection() throws FileNotFoundException, IOException, ClassNotFoundException, SQLException{
		// get property
				Properties propertiesFile = new Properties();
				propertiesFile.load(new FileInputStream("src/main/resource/database.properties"));

				String url = propertiesFile.getProperty("connectionString");
				String user = propertiesFile.getProperty("username");
				String password = propertiesFile.getProperty("password");
				String driver = propertiesFile.getProperty("driverSQLName");

				Class.forName(driver);
				return DriverManager.getConnection(url, user, password);

	}
	public void createFresher(String accout, String firsName, String lastName, String email) 
			throws FileNotFoundException, ClassNotFoundException, IOException, SQLException{
		//B1: get a database Connection
		Connection connection = getDatabaseConnection();
		
		// B2: write statement
		String sqlStatement = "INSERT INTO Fresher	(accout	,firsName	,lastName	,email )" 
						 +"VALUE				(?		,?			,?			,?)";
		PreparedStatement preparedStatement = connection.prepareStatement(sqlStatement);

		// set parameter
		preparedStatement.setString(1, accout);
		preparedStatement.setString(2, firsName);
		preparedStatement.setString(3, lastName);
		preparedStatement.setString(4, email);

		// execute Query Update
		preparedStatement.executeUpdate();
		

		// close connection
		connection.close();
	}

}
