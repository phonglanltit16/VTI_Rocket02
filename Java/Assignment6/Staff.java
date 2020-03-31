package Assignment6;

public class Staff extends Employee {
	
	static String department;
	static float workingTime;
	static int allowance;
	static MyEnumPosition position;

	public String getDepartment() {
		return department;
	}
	@SuppressWarnings("static-access")
	public void setDepartment(String department) {
		this.department = department;
	}
	public float getWorkingTime() {
		return workingTime;
	}
	@SuppressWarnings("static-access")
	public void setWorkingTime(float workingTime) {
		this.workingTime = workingTime;
	}
	public int getAllowance() {
		return allowance;
	}
	@SuppressWarnings("static-access")
	public void setAllowance(int allowance) {
		this.allowance = allowance;
	}
	public MyEnumPosition getPosition() {
		return position;
	}
	@SuppressWarnings("static-access")
	public void setPosition(MyEnumPosition position) {
		this.position = position;
	}
	
	public static float getSalary() {
		salary = salaryMultiplier*730 + allowance + workingTime*30;
		return salary;
	};
	@SuppressWarnings("static-access")
	
	@Override
	public String toString() {
		return "Fullname: " + fullName + "| " + "Department: " + department + "| " + "WorkingTime: " + workingTime
				+ "| " + "Salary Multiplier" + salaryMultiplier + "| " + "Allowance: " + allowance + "| " + "Position: "
				+ position + "| "+"Salary: " + getSalary();
	}
}
