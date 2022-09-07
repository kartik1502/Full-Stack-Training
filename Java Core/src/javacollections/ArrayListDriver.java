package javacollections;

import java.util.ArrayList;

public class ArrayListDriver {
	@SuppressWarnings("unchecked")
	public static void main(String[] args) {
		@SuppressWarnings("rawtypes")
		ArrayList al = new ArrayList<>();
		al.add(1);
		al.add(2);
		al.add(3);
		al.add(4);
		al.add(5);
		al.add(true);
		al.add("kartik");
		System.out.println(al);
		al.addAll(al);
		System.out.println(al);
	}
}
