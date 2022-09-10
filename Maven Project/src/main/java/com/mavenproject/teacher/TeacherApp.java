package com.mavenproject.teacher;

import java.util.Scanner;

public class TeacherApp {
	
public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		boolean execute = true;
		TeacherAccess t = new TeacherAccess();
		while(execute){
			System.out.println("1.Add Teacher Details\n2.View Teacher Details\n3.Update Teacher Details\n4.Delete Teacher Details\n5.Terminate\nEnter your choice");
			int choice = sc.nextInt();
			switch(choice){
				case 1:
					System.out.println("Enter the Teacher Id: ");
					int Id = sc.nextInt();
					System.out.println("Enter the Teacher Name: ");
					String Name = sc.next();
					System.out.println("Enter the Subject Name: ");
					String subName = sc.next();
					t.saveTeacher(new TeacherData(Id, Name, subName));
					break;
				case 2:
					System.out.println(t.getTeacherDetails());
					break;
				case 3:
					System.out.println("Enter the Teacher Id: ");
					Id = sc.nextInt();
					System.out.println("Enter the Teacher Name: ");
					Name = sc.next();
					System.out.println("Enter the Subject Name: ");
					subName = sc.next();
					t.updateTeacher(new TeacherData(Id,Name,subName));
					break;
				case 4:
					System.out.println("Enter the Teacher Id whose details has to be deleted: ");
					Id = sc.nextInt();
					t.deleteTeacher(new TeacherData(Id));
					break;
				case 5:execute = false;
					break;
				default:System.out.println("Invalid Choice");
			}
		}
		sc.close();
	}
}
