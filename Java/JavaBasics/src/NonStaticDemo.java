
public class NonStaticDemo {
int num;
NonStaticDemo(){
	System.out.println("Inside constructure");
}
{
	System.out.println("inside the non static block");
}
public static void main(String[] args) {
	System.out.println(" Inside the main method");
	new NonStaticDemo();
}

}

