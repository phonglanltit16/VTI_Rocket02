package TS_buoi2;

import java.text.DateFormat;
import java.util.Date;
import java.util.Locale;
import java.util.Scanner;

import TS_buoi1.Group;

public class FlowControl {

	public static void main(String[] args) {
		// Create department
		Department department1 = new Department();
		department1.id1 = 1;
		department1.departmentName = "Sale";

		Department department2 = new Department();
		department2.id1 = 2;
		department2.departmentName = "Marketing";

		// Create position
		Position position1 = new Position();
		position1.id2 = 1;
		position1.positionName = PositionName.DEV;

		Position position2 = new Position();
		position2.id2 = 3;
		position2.positionName = PositionName.SCRUM_MASTER;

		// Create account
		Account account1 = new Account();
		account1.id3 = 1;
		account1.email = "lan123@gmail.com";
		account1.userName = "phonglan123";
		account1.fullName = "Lê Thị Phong Lan";
		account1.idDepartment = department2;
		account1.idPosition = position2;
		account1.createAccoutDate = new Date("2020/04/20");

		Account account2 = new Account();
		account2.id3 = 2;
		account2.email = "phong@gmail.com";
		account2.userName = "minhphong456";
		account2.fullName = "Lê Minh Phong";
		account2.idDepartment = department2;
		account2.idPosition = position1;
		account2.createAccoutDate = new Date("2020/04/21");
		
		// Create group
				Group group1= new Group();
				group1.id4=1;
				group1.groupName="Java";
				group1.id_creator="CR_GR01";
				group1.createGroupDate=new Date("2020/01/01");
				
				Group group2= new Group();
				group2.id4=2;
				group2.groupName="Python";
				group2.id_creator="CR11";
				group2.createGroupDate=new Date("2020/01/20");
		// Q1:
		if (account2.idDepartment == null) {
			System.out.println("Nhân viên này chưa có phòng ban");
		} else {
			System.out.println("Phòng ban của nhân viên này là " + account2.idDepartment.departmentName);
		}
		// Q2:
		if (account2.groups == null) {
			System.out.println("Nhân viên này chưa có phòng ban");
		} else if (account2.groups.length == 1 || account2.groups.length == 2) {
			System.out.println("Nhân viên này thuộc phòng ban");			
		} else if (account2.groups.length == 3) {
			System.out.println("Nhân viên này là người quan trọng, tham gia nhiều phòng ban");
		} else if (account2.groups.length >= 4) {
			System.out.println("Nhân viên này là người quan trọng, tham gia nhiều phòng ban");
		} else {
			System.out.println("không có gì");
		}
		// Q3:
		System.out.println((account2.idDepartment == null ? "Nhân viên này chưa có phòng ban"
				: "Nhân viên này thuộc phòng ban :" + account2.idDepartment.departmentName));

		// Q4:
		// System.out.println((account2.positionName == "Dev"? "Đây là Dev":
		// "Người này không phải là Developer" ));

		// format date
		System.out.println(account2.createAccoutDate);
		Locale.locale = new Locale("vn","VN");
		DateFormat dateformat =Date.getDateInstance(DateFormat.DEFAULT,locale);

		String date = dateformat.format(account2.createAccoutDate);
		System.out.println(date);

		// Question 1:

		int a = 5;
		System.out.printf("số a là :" + a+ "%n");
		// Question 2:
		System.out.printf(Locale.US, "%,d %n", 100000000);
		// Question 3:
		System.out.printf("'%.4f'%n",5.567098);	
	}
	//

	public static int hienThiSo(){
		int num = 0;
		while (num <= 10){
			System.out.println(num);
			num+=1;
		}
		return num;
	}
	
	
}
