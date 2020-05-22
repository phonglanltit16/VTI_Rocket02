/**
 * 
 */
package com.rocket.Assigment9.backend.businessLayer;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.sql.SQLException;

/**
 * This class is . 
 * 
 * @Description: .
 * @author: PhongLan
 * @create_date: Apr 12, 2020
 * @version: 1.0
 * @modifer: PhongLan
 * @modifer_date: Apr 12, 2020
 */
public interface IFresherService {
	void createFresher(String accout, String firsName, String lastName, String email)throws FileNotFoundException, ClassNotFoundException, IOException, SQLException ; 
}
