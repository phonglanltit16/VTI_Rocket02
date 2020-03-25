package FinalExamJava;

	import java.util.ArrayList;
	import java.util.Scanner;
	import FinalExamJava.User;

	public class Main {
		static ArrayList<User> us = new ArrayList<User>();
		public static void main(String[] args) {
			try {
				Scanner sc = new Scanner(System.in);
				Main obj = new Main();
				while (true) {
					System.out.println("----------MENU---------");
					System.out.println("1.	Register");
					System.out.println("2.	Login");
					System.out.println("3.	Exit.");
					System.out.println("Please choose: ");
		
					int choose = sc.nextInt();
					switch (choose) {
					case 1:
						obj.register();
						break;
					case 2:
						obj.login();
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
		private void login() {
			
			
		}
		
		
		
		
		private void register() {
			try {
					Scanner sc = new Scanner(System.in);
					System.out.println("Please enter User");
					String email = sc.nextLine();
					
					System.out.println("Phone");
					int phone = sc.nextInt();;
										
					
					System.out.println("ExpInYear: ");
					int expInYear = sc.nextInt();
					
					System.out.println("Project Name: ");
					String pr = sc.nextLine();
					
				
			} catch (Exception e) {
				System.out.println("Nhap sai roi ");
			}
			
		}

	}
