package FinalExamJava;

public class Manager extends User {
	private int expInYear;
	
	public Manager (char firstName,char lastName,int  phone,String email, int expInYear ){
		super(firstName, lastName,phone, email);
		this.expInYear= expInYear;
	}

	public int getExpInYear() {
		return expInYear;
	} 

	public boolean setExpInYear(int expInYear) {
		if( expInYear<= 20 ){
			this.expInYear = expInYear;
			return true;
		}else {
			System.err.println("Nhập lại địa chỉ số năm đã quản lý : ");
			return false;
		}
	}
	@Override
	public String toString() {
		super.toString();
		return "Manager [expInYear=" + expInYear + "]";
	}
}

