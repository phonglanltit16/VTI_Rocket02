package TS_Buoi6;

public class Ex1 {
	public static void main(String[] args) {
		try{ 
			float result = divide(7,0);
			System.out.println(result);
		}catch( ArithmeticException e){
			System.out.println("Cannot divide 0");
		}finally{
			System.out.println("Divide completed");
		}
	}

	public static float divide(int a, int b) {
		return a / b;
	}
}
