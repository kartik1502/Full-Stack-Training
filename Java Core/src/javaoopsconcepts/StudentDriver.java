package javaoopsconcepts;

public class StudentDriver {

	static {
		System.out.println("jam");
	}
	static {
		int a = 10;
		System.out.println(Student.a);
		System.out.println("java"+10);
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.out.println("hi hello");
		Student s1 = new Student();
		s1.work("fun", 21);
	}

}
