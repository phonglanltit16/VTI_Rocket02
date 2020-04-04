package Assignment8;
import java.util.ArrayList;
import java.util.Random;
import java.util.Scanner;
import java.util.Collections;

public class Main {
	ArrayList<Object> Bees = new ArrayList<>();
	private static Scanner sc;

	public static void main(String[] args) {
		try {
			sc = new Scanner(System.in);
			Main obj = new Main();
			while (true) {
				System.out.println("----------MENU---------");
				System.out.println("1.	Create Bee List ");
				System.out.println("2.	Attack Bee ");
				System.out.println("3.	Bee Status");
				System.out.println("Please choose: ");
	
				int choose = sc.nextInt();
				switch (choose) {
				case 1:
					obj.createBeeList();
					break;
				case 2:
					obj.attackBee();
					obj.showStatus();
					break;
				case 3:
					System.exit(0);
				default:
					System.out.println("PLEASE CHOOSE FROM 1 --> 3!");
					break;
				}
	
			}
		} catch (Exception e) {
			System.out.println("CHương trình lỗi");
		}
	}
	
		private void createBeeList() {

			Bees = new ArrayList<>();
			int rnd = new Random().nextInt(11);
			int rnd1 = new Random().nextInt(11 - rnd);
			int rnd2 = 10 - (rnd1 + rnd);
			
		
			for (int i = 0; i < rnd; i++) {
				Worker beeW = new Worker();
				Bees.add(beeW);
			}
			for (int i = 0; i < rnd1; i++) {
				Drone beeD = new Drone();
				Bees.add(beeD);
			}
			for (int i = 0; i < rnd2; i++) {
				Queen beeQ = new Queen();
				Bees.add(beeQ);
			}

			System.out.println("CREATE SUCCESSFULLY!");

		}
		
		
		private void attackBee() {
			
			
			
		
		}
		private void showStatus() {
			
		}
}
