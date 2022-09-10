package com.mavenproject.teacher;

public class TeacherData {
	
	private int id;
	private String name;
	private String subName;
	
	public TeacherData(int id, String name, String subName) {
		super();
		this.id = id;
		this.name = name;
		this.subName = subName;
	}
	public TeacherData(int id) {
		super();
		this.id = id;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getSubName() {
		return subName;
	}
	public void setSubName(String subName) {
		this.subName = subName;
	}
	public int getId() {
		return id;
	}
	@Override
	public String toString() {
		return "Teacher Id: " + getId() + "\nTeacher Name: " + getName() + "\nTeacher Subject Name: " + getSubName()+"\n\n";
	}
	public TeacherData() {
		super();
	}
	public void setId(int id) {
		this.id = id;
	}
	
	

}
