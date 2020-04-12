/**
 * 
 */
package com.rocket.FinalExam.backend.dataLayer;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.rocket.FinalExam.entity.User;

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
public class UserDAO implements IUserDAO {

	private static final String DBConnect = null;

	/* (non-Javadoc)
	 * @see com.rocket.FinalExam.backend.dataLayer.IUserDAO#login(java.lang.String, java.lang.String)
	 */
	public boolean login(String userName, String password) {
			Connection con;
			PreparedStatement pstmt = null;
			ResultSet rs = null;
			con = DBConnect.openConnection();
			int dem = 0;
			try {
				pstmt = con.prepareStatement("select 1 from User where email=? and password=?");
				pstmt.setString(1, userName);
				pstmt.setString(2, password);
				rs = pstmt.executeQuery();
				while (rs.next()) {
					dem++;
				}
				if (dem == 1) {
					return true;
				}else {
					return false;
				}			
			} catch (SQLException e) {
				e.printStackTrace();
			}finally {
				DBConnect.closeAll(con, pstmt, rs);
			}
		return false;
	}

	/* (non-Javadoc)
	 * @see com.rocket.FinalExam.backend.dataLayer.IUserDAO#insertUser(com.rocket.FinalExam.entity.User)
	 */
	public boolean insertUser(User user) {
		Connection con;
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		con = DBConnect.openConnection();
		try {
			pstmt = con.prepareStatement(
					"insert into User (firstName,lastName,phone,email,password) values (?,?,?,?,?)");
			
			pstmt.setString(1, user.getFirstName());
			pstmt.setString(2, user.getLastName());
			pstmt.setString(3, user.getPhone());
			pstmt.setString(4, user.getEmail());
			pstmt.setString(5, user.getPassword());
			pstmt.executeUpdate();
			return true;
		} catch (SQLException e) {
			e.printStackTrace();
		} finally {
			DBConnect.closeAll(con, pstmt, rs);
		}
		return false;
	
	}

	/* (non-Javadoc)
	 * @see com.rocket.FinalExam.backend.dataLayer.IUserDAO#getUserById(int)
	 */
	public boolean getUserById(int id) {
		Connection con;
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		con = DBConnect.openConnection();
		User u = new User();
		boolean bl = false;
		try {
			pstmt = con.prepareStatement("select * from User where email=?");
			String email;
			pstmt.setString(1, email);
			
			rs = pstmt.executeQuery();
			while (rs.next()) {
				bl=true;
				u.setUId(rs.getInt("uId"));
				u.setFirstName(rs.getString("firstName"));
				u.setLastName(rs.getString("lastName"));
				u.setPhone(rs.getString("phone"));
				u.setEmail(rs.getString("email"));
				u.setPassWord("");
			}
			if(bl) {
				return u;	
			}else {
				return (User) null;
			}
				
		} catch (SQLException e) {
			e.printStackTrace();
		}finally {
			DBConnect.closeAll(con, pstmt, rs);
		}
		
		return false;
	}

	/* (non-Javadoc)
	 * @see com.rocket.FinalExam.backend.dataLayer.IUserDAO#getUserByEmail(java.lang.String)
	 */
	public User getUserByEmail(String email) {
		// TODO Auto-generated method stub
		return null;
	}

	
}
