package Assignment8;


public class Bee {
	protected int floatingPointHealth = 100 ;

	
	 private int getFloatingPointHealth() {
		return floatingPointHealth;
	}

	private void setFloatingPointHealth(int floatingPointHealth) {
		this.floatingPointHealth = floatingPointHealth;
	}

	public void  Damage(int dam) {
		 if (0<= dam && dam<= 100){
			 floatingPointHealth= 100-dam;
		 }
		 else{
			 System.out.println("Nhap lai gia tri Damage: ");
		 }
	 }

public void CheckHealthStatus(){
	System.out.println("Health status = " + floatingPointHealth);
}


	
}
	