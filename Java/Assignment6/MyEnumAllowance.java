package Assignment6;

public enum MyEnumAllowance {
	BACHELOR(300),MASTER(500),DOCTOR(1000),DEPARTMENT_HEAD(2000),VICE_HEAD(1000),STAFF(500);
	private int allowance;

	public int getAllowance() {
		return allowance;
	}

	public void setAllowance(int allowance) {
		this.allowance = allowance;
	}

	private MyEnumAllowance(int allowance) {
		this.allowance = allowance;
	}

	
}
