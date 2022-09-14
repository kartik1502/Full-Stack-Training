package org.annotation_hibernatedemo.employee.controller;

import java.util.Iterator;
import java.util.List;
import java.util.Scanner;

import org.annotation_hibernatedemo.employee.dao.EmployeeDao;
import org.annotation_hibernatedemo.employee.dto.Employee;

public class EmployeeController {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		EmployeeDao employeeDao = new EmployeeDao();
		boolean execute = true;
		while(execute){
			System.out.println("1.Save the employee.\n2.Get the Employee Details.\n3.Update Employee By Id.\n4.Delete Employee by Id.\n5.Terminate.\nEnter your choice");
			int choice = sc.nextInt();
			switch(choice){
				case 1:{
					Employee employee = new Employee();
					System.out.println("Enter the Employee Name: ");
					employee.setEmpName(sc.next());
					System.out.println("Enter the Employee Email Id: ");
					employee.setEmpEmail(sc.next());
					employeeDao.saveEmployee(employee);
				}
					break;
				case 2:{
					List<Employee> employees = employeeDao.getEmployeeDetails();
					Iterator< Employee> it = employees.iterator();
					while(it.hasNext()){
						Employee employee = it.next();
						System.out.println("Employee Id: "+employee.getEmpId());
						System.out.println("Employee Name: "+employee.getEmpName());
						System.out.println("Employee Email Id: "+employee.getEmpEmail());
					}
				}
					break;
				case 3:{
					System.out.println("Enter the Employee id: ");
					int id = sc.nextInt();
					System.out.println("Enter the Employee Name: ");
					String name = sc.next();
					System.out.println("Enter the Employee Email Id: ");
					String emailId = sc.next();
					employeeDao.updateEmployee(id, name, emailId);
				}
					break;
				case 4:{
					System.out.println("Enter the Employee Id: ");
					int id = sc.nextInt();
					employeeDao.deleteEmployeeById(id);
				}
					break;
				case 5: execute = false;
					break;
				default:System.out.println("Invalid choice\n");
			}
		}
		sc.close();
	}
}
