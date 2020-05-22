import java.util.Random;

public class Assignment2 {
	
	public static void main(String[] args) 
	{
				// TODO Auto-generated method stub
			// Question 1:
			String[] ho ={"Le","Nguyen", "Tran", "Dang", "Duong", "Pham", "Bui"};
			String[] tenDem ={"Duc","Thi","Thanh","Van","Hoang","Cat","Trong"};
			String[] ten = {"Phi","Trang","Cong","Quy","Giang","Duong","Tri"};
			
			String[] HovaTen = new String[10];
			
			Random rd = new Random();
		
			for(int i=0; i<10; i++)
				{
					int numberHo = rd.nextInt(7);
					int numberTenDem = rd.nextInt(7);
					int numberTen = rd.nextInt(7);
					HovaTen[i] = ho[numberHo]+" " + tenDem[numberTenDem] +" "+ ten[numberTen];
				}
			
			// Question 2:
			int id = 0000001;
			
			String[] ID = new String[10];
			for(int i=0; i<10; i++)
				{
					ID[i] = "SV" + id ;
					id ++;
				}
			//Question 3:
			String[] birthDate = new String[10];
			
			for(int i=0; i<10; i++)
				{
					int birthDay = 1 + rd.nextInt(31);
					int birthMonth = 2 + rd.nextInt(11);
					birthDate[i] = birthDay +"/" + birthMonth+"/" + "1991";
				}
			
			// Question 4:
			System.out.println("________________________________________________");
			System.out.println("Full name	 |	ID	|	Date");
			System.out.println("________________________________________________");
			for(int i=0; i<10; i++)
				{
					System.out.println(HovaTen[i] + "|" + ID[i] +"|"+  birthDate[i] );
				}
			System.out.println("________________________________________________");
			}
	
	
}
