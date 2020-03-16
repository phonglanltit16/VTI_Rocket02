package Assignment4;

public class Sedan extends Car {
	private int length;

	public Sedan(int speed, double regularPrice, String color, double getSalePrice, int length) {
		super(speed, regularPrice, color, getSalePrice);
		this.length = length;
	}


	protected int getLength() {
		return length;
	}

	protected void setLength(int length) {
		this.length = length;
	}

	protected double getSalePrice() {

		if (length > 20) {
			getSalePrice = 0.95 * regularPrice;
		} else {
			getSalePrice = 0.9 * regularPrice;
		}
		return getSalePrice;
	}
}