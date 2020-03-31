package Ex1;

import java.util.Scanner;

public abstract class SequenceNumber implements Sort {
	
	public int[] arr;
	
	public SequenceNumber(int n)
	{
		this.arr = new int[n];
	}
	public void input() {
		Scanner scanner = new Scanner(System.in);
		
		System.out.print("Nhap cac phan tu cua mang: \n");
        for (int i = 0; i < arr.length; i++) {
            System.out.printf("a[%d] = ", i);
            arr[i] = scanner.nextInt();
        }
}
	public void prints() {
		System.out.print("Cac phan tu cua mang: ");
		 for (int i = 0; i < arr.length; i++) {
	            System.out.print(arr[i] + " ");
	        }
	}
	
}