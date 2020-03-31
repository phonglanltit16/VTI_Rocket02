package Ex2;

abstract class Employee {
	
	private String name, address; 
	
	protected int basicSalary; 
	 
	public String getName()
	{ 
		return name; 
	} 
	 
	public String getAddress()
	{ 
		return address; 
	} 
	
	public int getBasicSalary()
	{ 
		return basicSalary; 
	} 
	 
	public void setAddress(String add)
	{ 
		address = add; 
	} 
	 
	public void setName(String nm)
	{ 
		name = nm; 
	} 
	 
	public void setBasicSalary(int sal)
	{ 
		basicSalary = sal; 
	} 
	 
	public abstract int getMonthlySalary(); 

}


class NormalEmployee extends Employee {

	@Override
	public int getMonthlySalary() {
		return basicSalary;
	}
	
}


class BonusEmployee extends Employee {

	private int bonusSalary;

	public int getBonusSalary() {
		return bonusSalary;
	}

	public void setBonusSalary(int bonusSalary) {
		this.bonusSalary = bonusSalary;
	}

	@Override
	public int getMonthlySalary() {
		return basicSalary + bonusSalary;
	}


	
}