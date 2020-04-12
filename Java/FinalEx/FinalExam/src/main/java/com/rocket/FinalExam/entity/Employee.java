/**
 * 
 */
package com.rocket.FinalExam.entity;

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
public class Employee extends User{
	
	private String projectName;
	private String proSkill;
	
	public String getProjectName() {
		return projectName;
	}
	
	public void setProjectName(String projectName) {
		this.projectName = projectName;
	}
	
	public String getProSkill() {
		return proSkill;
	}
	
	public void setProSkill(String proSkill) {
		this.proSkill = proSkill;
	}

	/**
	 * @return
	 */
	public Object getUser() {
		// TODO Auto-generated method stub
		return null;
	}
	
	
}