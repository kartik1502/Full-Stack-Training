package com.mavenproject.teacher;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class TeacherAccess {
	
	private Connection con = null;
	
	public void saveTeacher(TeacherData teacherData){
		try{
			con = TeacherConnection.getConnection("Teacher");
			PreparedStatement ps = con.prepareStatement("insert into teacher values(?,?,?)");
			ps.setInt(1, teacherData.getId());
			ps.setString(2, teacherData.getName());
			ps.setString(3, teacherData.getSubName());
			ps.execute();
		}
		catch(SQLException e){
			e.printStackTrace();
		}
	}
	
	public void updateTeacher(TeacherData teacherData){
		try{
			con = TeacherConnection.getConnection("Teacher");
			PreparedStatement ps = con.prepareStatement("update teacher set name = ?,subName = ? where id = ?");
			ps.setString(1, teacherData.getName());
			ps.setString(2, teacherData.getSubName());
			ps.setInt(3, teacherData.getId());
			ps.execute();
		}
		catch(SQLException e){
			e.printStackTrace();
		}
	}
	
	public void deleteTeacher(TeacherData teacherData){
		try{
			con = TeacherConnection.getConnection("Teacher");
			PreparedStatement ps = con.prepareStatement("delete from teacher where id = ?");
			ps.setInt(1, teacherData.getId());
			ps.execute();
		}
		catch(SQLException e){
			e.printStackTrace();
		}
	}
	
	public List<TeacherData> getTeacherDetails(){
		List<TeacherData> td = new ArrayList<>();
		try{
			Connection con = TeacherConnection.getConnection("Teacher");
			PreparedStatement ps = con.prepareStatement("select * from teacher");
			ResultSet rs = ps.executeQuery();
			while(rs.next()){
				TeacherData teacherData = new TeacherData();
				teacherData.setId(rs.getInt("id"));
				teacherData.setName(rs.getString("name"));
				teacherData.setSubName(rs.getString("subName"));
				td.add(teacherData);
			}
		}
		catch(SQLException e){
			e.printStackTrace();
		}
		return td;
	}

}
