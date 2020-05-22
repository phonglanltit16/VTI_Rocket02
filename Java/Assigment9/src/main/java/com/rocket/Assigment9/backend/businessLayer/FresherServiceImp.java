/**
 * 
 */
package com.rocket.Assigment9.backend.businessLayer;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.sql.SQLException;

import com.rocket.Assigment9.backend.dataLayer.FresherRepository;

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
public class FresherServiceImp implements IFresherService {
	private FresherRepository reponsitory;
	
	public FresherServiceImp() {
	reponsitory = new FresherRepository();
	}
	/* (non-Javadoc)
	 * @see com.rocket.Assigment9.backend.businessLayer.IFresherService#createFresher(java.lang.String, java.lang.String, java.lang.String, java.lang.String)
	 */
	public void createFresher(String accout, String firsName, String lastName, String email) throws FileNotFoundException, ClassNotFoundException, IOException, SQLException {
		reponsitory.createFresher(accout, firsName, lastName, email);
	}

}
