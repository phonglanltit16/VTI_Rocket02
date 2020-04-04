package Assignment8;

public class Drone extends Bee{
	
	public Drone(){
		super();

	}
	

@Override
	public void CheckHeadthStatus(){
		super.CheckHealthStatus();
		if(floatingPointHealth < 50){
			System.out.println("Die");
			}
	}
}