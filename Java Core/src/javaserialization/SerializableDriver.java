package javaserialization;

import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;

public class SerializableDriver {
	public static void main(String[] args) {
		Student s = new Student(1,"Karthik",22);
		try{
			System.out.println("Serializing Object......................");
			FileOutputStream fout = new FileOutputStream("D://student.txt");
			ObjectOutputStream out = new ObjectOutputStream(fout);
			out.writeObject(s);
			out.flush();
			out.close();
			fout.close();
		}
		catch(IOException e){
			e.printStackTrace();
		}
		System.out.println("Deserializing Object..................");
		try{
			FileInputStream fin = new FileInputStream("D://student.txt");
			ObjectInputStream in  = new ObjectInputStream(fin);
			Student student = (Student) in.readObject();
			System.out.println(student);
			in.close();
			fin.close();
		}
		catch(IOException e){
			e.printStackTrace();
		}
		catch(ClassCastException c){
			c.printStackTrace();
		} 
		catch (ClassNotFoundException e) {
			e.printStackTrace();
		}
	}
}
