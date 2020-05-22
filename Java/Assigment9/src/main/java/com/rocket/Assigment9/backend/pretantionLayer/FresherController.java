/**
 * 
 */
package com.rocket.Assigment9.backend.pretantionLayer;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.sql.SQLException;

import com.rocket.Assigment9.backend.businessLayer.FresherServiceImp;
import com.rocket.Assigment9.backend.businessLayer.IFresherService;

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
public class FresherController {
	private IFresherService service;

	public FresherController(){
		service= new FresherServiceImp();
	}
	public void createFresher(String accout, String firsName, String lastName, String email) 
			throws FileNotFoundException, ClassNotFoundException, IOException, SQLException {

	}
}
