package Assignment4;

public class Car {
	protected int speed;
	protected double regularPrice;
	protected String color;
	protected double getSalePrice;

	protected Car(int speed, double regularPrice, String color, double getSalePrice) {
		this.speed = speed;
		this.regularPrice = regularPrice;
		this.color = color;
		this.getSalePrice = getSalePrice;
	}

	protected int getSpeed() {
		return speed;
	}

	protected void setSpeed(int speed) {
		this.speed = speed;
	}

	protected double getRegularPrice() {
		return regularPrice;
	}

	protected void setRegularPrice(double regularPrice) {
		this.regularPrice = regularPrice;
	}

	protected String getColor() {
		return color;

	}

	protected void setColor(String color) {
		this.color = color;
	}

	protected double getGetSalePrice() {
		return getSalePrice;
	}

	protected void setGetSalePrice(double getSalePrice) {
		this.getSalePrice = getSalePrice;
	}
}
