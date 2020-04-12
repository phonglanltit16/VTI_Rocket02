/**
 * 
 */
package com.rocket.FinalExam.backend.dataLayer;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.rocket.FinalExam.entity.Manager;

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
public class ManagerDao implements IManagerDao{

	/* (non-Javadoc)
	 * @see com.rocket.FinalExam.backend.dataLayer.IManagerDao#insertManager(com.rocket.FinalExam.entity.Manager)
	 */
	private static final String DBConnect = null;

	public boolean insertManager(Manager mn) {
		Connection con;
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		con = DBConnect.openConnection();
		try {
			pstmt = con.prepareStatement(
					"insert into Manager (uid,expInYear) values (?,?)");
			pstmt.setInt(1, mn.getUser().getUId());
			pstmt.setInt(2, mn.getExpInYear());
			
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