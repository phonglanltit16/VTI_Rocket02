package Assignment4;

public class Ford extends Car {
	private int year;
	private int manufacturerDiscount;

	public Ford(int speed, double regularPrice, String color, double getSalePrice, int year, int manufacturerDiscount) {
		super(speed, regularPrice, color, getSalePrice);
		this.year = year;
		this.manufacturerDiscount = manufacturerDiscount;
	}


	protected int getYear() {
		return year;
	}

	protected void setYear(int year) {
		this.year = year;
	}

	protected int getManufacturerDiscount() {
		return manufacturerDiscount;
	}

	protected void setManufacturerDiscount(int manufacturerDiscount) {
		this.manufacturerDiscount = manufacturerDiscount;
	}

	protected double getSalePrice() {

		getSalePrice = regularPrice - manufacturerDiscount;
		return getSalePrice;
	}

}
