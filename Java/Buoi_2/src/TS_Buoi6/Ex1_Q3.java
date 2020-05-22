package TS_Buoi6;

public class Ex1_Q3 {

	public static void main(String[] args) {
		try{
		int []numbers = {1 ,2 ,3 };
		System.out.println(numbers[10]);
		}catch(ArrayIndexOutOfBoundsException e){
			System.out.println(e.getMessage());
		}
	}

}
