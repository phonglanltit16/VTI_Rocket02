package Assignment4;

public class MyOwnAutoShop {

	public static void main(String[] args) {
		double sale = 0;
		Sedan sedan = new Sedan(0, 2500, "blue", 0, 25);
		sale = sedan.getSalePrice();
		System.out.println("Giá sale của sedan: " + sale);

		Ford ford1, ford2;
		ford1 = new Ford(300, 2000, "red", 0, 2020, 180);
		ford2 = new Ford(150, 1500, "black", 0, 2019, 200);
		System.out.println("Giá sale của ford1: " + ford1.getGetSalePrice() + "\n" + "Giá sale của ford2: " + ford2.getGetSalePrice());

		Car car = new Car(150,2500,"white",300);
		sale = car.getGetSalePrice();
		System.out.println("Giá sale của car: " + sale);
	}

}
