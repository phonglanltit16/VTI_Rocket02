package Assignment6;

public class Professor extends Employee {
	
	
	 static String faculty;
	 static MyEnumAcademicDegree academicDegree;
	 static int allowance;
	 static float monthlyTeachingTime;
	 
	 
		public Professor(String fullName, float salaryMultiplier, float salary, String faculty, MyEnumAcademicDegree academicDegree, int allowance, float monthlyTeachingTime) {
			super();
			this.faculty = faculty;
			this.academicDegree = academicDegree;
			this.allowance = allowance;
			this.monthlyTeachingTime = monthlyTeachingTime;
			}
		 
	public String getFaculty() {
		return faculty;
	}
	
	public void setFaculty(String faculty) {
		this.faculty = faculty;
	}
	public MyEnumAcademicDegree getAcademicDegree() {
		return academicDegree;
	}
	
	public void setAcademicDegree(MyEnumAcademicDegree academicDegree) {
		this.academicDegree = academicDegree;
	}
	public int getAllowance() {
		return allowance;
	}

	public void setAllowance(int allowance) {
		this.allowance = allowance;
	}
	public float getMonthlyTeachingTime() {
		return monthlyTeachingTime;
	}
	public void setMonthlyTeachingTime(float monthlyTeachingTime) {
		this.monthlyTeachingTime = monthlyTeachingTime;
	}
	
	public static float getSalary() {
		salary = salaryMultiplier*730 + allowance + monthlyTeachingTime*45;
		return salary;	
	};
	

	@Override
	public String toString() {
		return "Fullname: " + fullName +"|"+ "Faculty: " + faculty +"|"+ 
	"Academic Degree: "+academicDegree +"|"+ "Allowance:"+allowance+ " |"+"Monthly Teaching Time: " + monthlyTeachingTime + 
	" |"+ "Salary Multiplier: " + salaryMultiplier + "| "+"Salary: " + getSalary();
	}
	

	

}