package FinalExamJava;

public class User {

	protected char firstName;
	protected char lastName;
	protected int phone;
	protected String email;
	
	public User(){
	}
	public User(char firstName,char lastName,int phone,String email  ){
		this.firstName = firstName;
		this.lastName = lastName;
		this.phone = phone;
		this.email = email;
		
	}
	
	
	public char getFirstName() {
		return firstName;
	}
	public void setFirstName(char firstName) {
		this.firstName = firstName;
	}
	public char getLastName() {
		return lastName;
	}
	public void setLastName(char lastName) {
		this.lastName = lastName;
	}
	public int getPhone() {
		return phone;
	}
	public boolean setPhone(int phone) {
		    String phonenum = phone + "";
			if(phonenum != null && 9<= phonenum.length() && phonenum.length()<= 12 ){
				this.phone = phone;
				System.err.println("Số điện thoại hợp lệ : ");
				return true;
			}else {
				System.err.println("Nhập lại số điện thoại: ");
				return false;
			}
	}
			
	public String getEmail() {
		return email;
	}
	public boolean setEmail(String email) {
			if(email != null && email.contains("@") && !email.contains("")){
				this.email = email;
				System.err.println("Địa chỉ Email hợp lệ: ");
				return true;
			}else {
				System.err.println("Nhập lại địa chỉ Email: ");
				return false;
		}
	}
	@Override
	public String toString() {
		return "User [firtName=" + firstName + ", lastName=" + lastName + ", phone=" + phone + ", email=" + email + "]";
	}
	
}
