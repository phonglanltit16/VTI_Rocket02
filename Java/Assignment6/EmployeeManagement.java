package Assignment6;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class EmployeeManagement {

		private int allowance;

		public int getAllowance() {
			return allowance;
		}

		public void setAllowance(int allowance) {
			this.allowance = allowance;
		}

		private void MyEnumAllowance(int allowance) {
			this.allowance = allowance;
		}		
	
	
	
	static List<Professor> listProfessor = new ArrayList<Professor>();
	static List<Staff> listStaff = new ArrayList<Staff>();

	static float salary;
	@SuppressWarnings("resource")
	public static void chooseAcademiDegree() {
		System.out.println("1. Bachelor");
		System.out.println("2. Master");
		System.out.println("3. Doctor");
		System.out.println("Mời bạn chọn:");
		int i = new Scanner(System.in).nextInt();
		switch (i) {
		case 1:
			Professor.academicDegree = MyEnumAcademicDegree.BACHELOR;
			System.out.println("Cấp bậc:" + Professor.academicDegree);
			break;
		case 2:
			Professor.academicDegree = MyEnumAcademicDegree.MASTER;
			System.out.println("Cấp bậc:" + Professor.academicDegree);
		case 3:
			Professor.academicDegree = MyEnumAcademicDegree.DOCTOR;
			System.out.println("Cấp bậc:" + Professor.academicDegree);
		default:
			break;
		}
	}

	@SuppressWarnings("resource")
	public static void chooseAllowance() {

		System.out.println("Bạn là:");
		System.out.println("1. Bachelor");
		System.out.println("2. Master");
		System.out.println("3. Doctor");
		System.out.println("4. Department Head");
		System.out.println("5. Vice Head");
		System.out.println("6. Staff");
		int i = new Scanner(System.in).nextInt();
		switch (i) {
		case 1:
			Professor.allowance = MyEnumAllowance.BACHELOR.getAllowance();
			System.out.println(Professor.allowance);
			break;
		case 2:
			Professor.allowance = MyEnumAllowance.MASTER.getAllowance();
			System.out.println(Professor.allowance);

			break;
		case 3:
			Professor.allowance = MyEnumAllowance.DOCTOR.getAllowance();
			System.out.println(Professor.allowance);

			break;
		case 4:
			Staff.allowance = MyEnumAllowance.DEPARTMENT_HEAD.getAllowance();
			System.out.println(Staff.allowance);

			break;
		case 5:
			Staff.allowance = MyEnumAllowance.VICE_HEAD.getAllowance();
			System.out.println(Staff.allowance);

			break;
		case 6:
			Staff.allowance = MyEnumAllowance.STAFF.getAllowance();
			System.out.println(Staff.allowance);

			break;

		default:
			break;
		}
	}

	@SuppressWarnings("resource")
	public static void choosePosition() {
		System.out.println("Bạn là:");
		System.out.println("1. Department Head");
		System.out.println("2. Vice Head");
		System.out.println("3. Staff");
		int i = new Scanner(System.in).nextInt();
		switch (i) {
		case 1:
			Staff.position = MyEnumPosition.DEPARTMENT_HEAD;
			System.out.println(Staff.position);
			break;
		case 2:
			Staff.position = MyEnumPosition.VICE_HEAD;
			System.out.println(Staff.position);
			break;
		case 3:
			Staff.position = MyEnumPosition.STAFF;
			System.out.println(Staff.position);
			break;

		default:
			break;
		}
	}

	@SuppressWarnings("resource")
	public static void inputProfessor() {
		Professor professor = new Professor(null, 0, 0, null, null, 0, 0);
		System.out.println("Họ tên:");
		professor.fullName = new Scanner(System.in).nextLine();
		System.out.println("Năng lực:");
		professor.setFaculty(new Scanner(System.in).nextLine());
		System.out.println("Bằng cấp:");
		chooseAcademiDegree();
		System.out.println("Tiền phụ cấp:");
		chooseAllowance();
		System.out.println("Thời gian dạy hàng tháng, đơn vị là giờ:");
		professor.setMonthlyTeachingTime(new Scanner(System.in).nextFloat());
		System.out.println("Hệ số lương: ");
		professor.salaryMultiplier = new Scanner(System.in).nextFloat();
		listProfessor.add(professor);
	}

	@SuppressWarnings({ "resource", "static-access" })
	public static void inputStaff() {
		Staff staff = new Staff(null, 0, null, 0, 0, null, 0);
		System.out.println("Họ tên:");
		staff.fullName = new Scanner(System.in).nextLine();
		System.out.println("Phòng ban:");
		staff.setDepartment(new Scanner(System.in).nextLine());
		System.out.println("Thời gian làm việc, đơn vị là ngày:");
		staff.setWorkingTime(new Scanner(System.in).nextFloat());
		System.out.println("Hệ số lương: ");
		staff.salaryMultiplier = new Scanner(System.in).nextFloat();
		System.out.println("Tiền phụ cấp:");
		chooseAllowance();
		System.out.println("Vị trí trong trường:");
		choosePosition();
	
		listStaff.add(staff);
	}

	@SuppressWarnings("resource")
	public static void input() {
		System.out.println("Nhập vào thông tin nhân viên");
		System.out.println("1. Giáo sư");
		System.out.println("2. Cán bộ");
		System.out.println("Mời bạn chọn hồ sơ:");
		int i = new Scanner(System.in).nextInt();
		switch (i) {
		case 1:
			inputProfessor();
			break;
		case 2:
			inputStaff();
		default:
			break;
		}
	}

	@SuppressWarnings("resource")
	public static void output() {

		System.out.println("1. Danh sách giáo sư:");
		System.out.println("2. Dannh sách cán bộ:");
		System.out.println("3. Danh sách tất cả nhân viên: ");
	
		int i = new Scanner(System.in).nextInt();
		switch (i) {
		case 1:
			
			for (Professor pr : listProfessor) {
				Professor.getSalary();
				System.out.println(pr);
			}
			break;
		case 2:
			for (Staff st : listStaff) {
				Staff.getSalary();
				System.out.println(st);
			}
			break;
		case 3:
			for (Professor pr : listProfessor) {
				Professor.getSalary();
				System.out.println(pr);
			}
			for (Staff st : listStaff) {
				Staff.getSalary();
				System.out.println(st);
			}
		default:
			break;
		}

	}

	@SuppressWarnings("resource")
	public static void menu() {
		System.out.println("1. Nhập thông tin");
		System.out.println("2. In thông tin");
		int i = new Scanner(System.in).nextInt();
		switch (i) {
		case 1:
			input();
			break;
		case 2:
			output();
			break;
		default:
			break;
		}

	}

	public static void main(String[] args) {

		
		while (true) {
			menu();
		}
		
	}
}

	