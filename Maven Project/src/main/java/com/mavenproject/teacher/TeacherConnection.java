package com.mavenproject.teacher;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class TeacherConnection {
	private static Connection con = null;
	public static Connection getConnection(String database){
		String dbURL = "jdbc:mysql://localhost:3306/";
		String userName = "root";
		String password = "root";
		return getConnection(dbURL,database,userName,password);
	}
	
	private static Connection getConnection(String dbURL,String database,String userName, String password){
		try{
			con = DriverManager.getConnection(dbURL+database,userName,password);
		}
		catch(SQLException e){
			e.printStackTrace();
		}
		return con;
	}
	
}
