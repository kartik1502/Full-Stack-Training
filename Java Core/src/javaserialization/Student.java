package javaserialization;

import java.io.Serializable;

public class Student implements Serializable {
	
	private static final long serialVersionUID = 1L;
	
	int studId;
	String name;
	long phoneNo;
	
	public Student() {}

	public Student(int studId, String name, long phoneNo) {super();
		this.studId = studId;
		this.name = name;
		this.phoneNo = phoneNo;
	}

	@Override
	public String toString() {
		return "Student Id: " + studId + "\nStudent Name: " + name + "\nStudent Phone No: " + phoneNo;
	}
	
}
