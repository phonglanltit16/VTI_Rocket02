package Assignment4;

public class Truck extends Car {
	private int weight;

	public Truck(int speed, double regularPrice, String color, double salePrice, int weight) {
		super(speed, regularPrice, color, salePrice);
		this.weight = weight;
	}

	protected double getSalePrice() {
		if (weight > 2000) {
			getSalePrice = regularPrice * 0.9;
			return getSalePrice;
		} else
			getSalePrice = regularPrice * 0.8;
		return getSalePrice;

	}
}