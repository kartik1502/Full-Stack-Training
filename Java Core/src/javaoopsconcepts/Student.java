package javaoopsconcepts;

public class Student {
	static int a = 100;
	static {
		System.out.println("Journey begins");
		a = 300;
	}
	String studentName = "dinga";
	int studentAge = 23;
	String StudId = "19CS043";
	public void display() {
		System.out.println(studentName);
		System.out.println(this.studentAge);
		System.out.println(StudId);
	}
	static {
		System.out.println("just a time pass");
	}
	public void work(String studentNam,int age) {
		System.out.println(studentName+" sleeping");
		System.out.println(this.studentName);
		System.out.println(studentAge);
		System.out.println(this.studentAge);
	}
}
