/**
 * 
 */
package com.rocket.FinalExam.backend.validate;

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
public class Validate {
	//check validate project Email
	public static boolean isEmail(String input) {
		return false;
		
	}
	//check validate phone
	public static boolean isPhone(String input) {
		// empty
		if (input.equals("")) {
			System.out.println("Phone must not be empty!");
			return false;
		}

		// max length, minlength
		if (!isSatisfyMinLength(input, 12) || !isSatisfyMinLength(input, 9)) {
			System.out.println("Phone number must has 9 to 12 numbers!");
			return false;
		}

		// regular expression
		boolean result = checkRegularExpression(input, "^[0-9]{9,12}$");
		if (!result) {
			System.out.println("Phone number must has 9 to 12 numbers and include 0-9!");
		}
		return result;

	}
	
	//check validate project name
	public static boolean isProjectName(String input) {
		if (input.equals("")) {
			System.out.println("Project name must not be empty!");
			return false;
		}
		if ((!input.equals("(Testing System")) || (!input.equals("(CRM")) || (!input.equals("(TimeSheet")) ){
			return false ;
		}
		return true;
	}
	
	//check validate proSkill
	public static boolean isProSkill(String input) {
		if (input.equals("")) {
			System.out.println("ProSkill must not be empty!");
			return false;
		}
		return true;
	}
	
	//check validate isExpInYear
	public static boolean isExpInYear(final int input) {
		if (input < 0 || input > 10) {
			System.out.println("Exp number has integer number!");
			return false;
		}
		return true;
	}
	/**
	 * @param input
	 * @param string
	 * @return
	 */
	private static boolean checkRegularExpression(String input, String string) {
		// TODO Auto-generated method stub
		return false;
	}
	/**
	 * @param input
	 * @param i
	 * @return
	 */
	private static boolean isSatisfyMinLength(String input, int minLength) {
		if (!(input.equals("") && input.length() >= minLength)) {
			return true;
		}
		return false;
	}
}
