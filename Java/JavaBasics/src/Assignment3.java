import java.util.Random;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.Scanner;

public class Assignment3 {

	public static void main(String[] args) 
	{
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
			// Nhập điểm các môn của 10 học sinh 
			
			int[] RA= {0,1,1,3,4,4,5,6,7,9};
			int[] SD= {0,2,2,4,4,4,6,7,7,10};
			int[] CP= {0,1,2,4,4,4,7,7,7,8};
			int[] CUT={0,2,2,3,4,4,6,6,7,10};
			int[] FMT={0,2,1,3,3,4,5,5,7,10};
			
			float[] AVG = new float[10] ;
			for(int i=0; i<10; i++)
			{
			AVG[i]= (float)(RA[i]+SD[i]+CP[i]+CUT[i]+FMT[i])/5;
			}
			//Sắp xếp giảm dần điểm trung bình
			ArrayList <Student>  List = new ArrayList();

	        for (int i = 0; i <10; i++) 
	        {
	            Student x = new Student();
	            x.setHovaTen=HovaTen[i];
	            x.setRa=RA[i];
	            x.setSD=SD[i] ;
	            x.setCP=CP[i] ;
	            x.setCUT= CUT[i] ;
	            x.setFMT= FMT[i];
	            List.add(x);
	        }
	        	
			    Collections.sort(List, new Comparator<Student>())
			    {
			    	public int compare(Student o1, Student o2) 
			    	{
			    		if (o2.getAVG() - o1.getAVG()==0) 
			    		{
			    			return 0;
			    		}
			    		else if (o2.getAVG() - o1.getAVG()<0) 
			    		{
			    			return -1;
			    		}
			    		else
			    			return 1;
					}
				}
				//In danh sách giảm dần điểm trung bình
				System.out.println("________________________________________________");
				System.out.println("Full name	 |	ID	|	Date|SA|CD|SP|CUT|FMT|AVG|");
				System.out.println("________________________________________________");
				for(int i=0; i<10; i++)
				{
					System.out.println(HovaTen[i] + "|" + ID[i] +"|"+  birthDate[i]+"|"+RA[i]+"|"+SD[i]+"|"+CP[i]+"|"+CUT[i]+"|"+FMT[i]+"|"+AVG[i] );
				}
				System.out.println("________________________________________________"); 
		}
}