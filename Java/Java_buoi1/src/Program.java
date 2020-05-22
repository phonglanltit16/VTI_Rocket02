
public class Program {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		// create department
		// create position
		// create account
		// create group

		//
		Account account1 = new Account();
		// createTypeQuestion
		TypeQuestion typeQuestion1 = new TypeQuestion();
		typeQuestion1.id6 = 1;
		typeQuestion1.typeName = TypeQuestion.TypeName.ESSAY;

		TypeQuestion typeQuestion2 = new TypeQuestion();
		typeQuestion1.id6 = 2;
		typeQuestion1.typeName = TypeQuestion.TypeName.MULTIPLE_CHOICE;

		// create Question
		Question question1 = new Question();
		question1.id8 = 1;
		question1.contentQuestion = "Bạn có muốn làm bài tập không?";
		question1.typeQuestion = typeQuestion2;

		// create Exam
		// create Answer

	}

}
