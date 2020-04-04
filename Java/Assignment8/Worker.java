package Assignment8;

public class Worker extends Bee {
	
	public Worker(){
		super();
	}
	@Override
	public void CheckHeadthStatus(){
		super.CheckHealthStatus();
		if(floatingPointHealth < 70){
			System.out.println("No fly and die");

		}
	}
}
