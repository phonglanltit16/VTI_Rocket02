package FinalExamJava;

public class Employee extends User{
	 static MyEnumProjectName projectName;
	 static String proSkill;
	 
	 @SuppressWarnings("static-access")
	 public Employee (char firstName,char lastName,int phone,String email, String proSkill, MyEnumProjectName projectName ){
			super(firstName, lastName, phone, email);
			this.projectName = projectName;
			this.proSkill = proSkill; 
}
	 
}
 