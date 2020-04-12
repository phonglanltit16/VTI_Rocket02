/**
 * 
 */
package com.rocket.FinalExam.backend.dataLayer;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.rocket.FinalExam.entity.Employee;

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
public class EmployeeDao implements IEmployeeDao{

	private static final String DBConnect = null;

	public boolean insertEmployee(Employee empl) {
		Connection con;
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		con = DBConnect.openConnection();
		try {
			pstmt = con.prepareStatement(
					"insert into Employee (uId,projectName,proSkill) values (?,?,?)");
			pstmt.setInt(1, empl.getUser().getId());
			pstmt.setString(2, empl.getProjectName());
			pstmt.setString(3, empl.getProSkill());
			pstmt.executeUpdate();
			return true;
		} catch (SQLException e) {
			e.printStackTrace();
		} finally {
			DBConnect.closeAll(con, pstmt, rs);
		}
		return false;
	}

}
