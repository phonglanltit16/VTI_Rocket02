package Assignment8;

public class Queen extends Bee{

	public Queen(){
		super();

	}
@Override
	public void CheckHeadthStatus(){
		super.CheckHealthStatus();
		if(floatingPointHealth < 20){
			System.out.println("Die");

		}
	}
}
