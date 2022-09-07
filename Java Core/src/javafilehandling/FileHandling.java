package javafilehandling;

import java.io.BufferedInputStream;
import java.io.BufferedOutputStream;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.nio.file.FileAlreadyExistsException;

public class FileHandling {
	
	public void createFile(String fileName) throws IOException{
		try{
			FileOutputStream fout = new FileOutputStream(fileName);
			fout.close();
		}
		catch(FileAlreadyExistsException e){
			System.out.println("File already exists: "+e.getMessage());
			e.printStackTrace();
		}
	}
	public void writeCharater(String fileName, char c){
		try{
			FileOutputStream fout = new FileOutputStream(fileName);
			fout.write(c);
			fout.close();
		}
		catch(Exception e){
			e.printStackTrace();
		}
	}
	public void writeString(String fileName, String sentence){
		try{
			FileOutputStream fout = new FileOutputStream(fileName);
			byte write[] = sentence.getBytes();
			fout.write(write);
			fout.close();
		}
		catch(Exception e){
			e.printStackTrace();
		}
	}
	public void readCharacter(String fileName){
		try{
			FileInputStream fin = new FileInputStream(fileName);
			int i = fin.read();
			System.out.println((char)i);
			fin.close();
		}
		catch(Exception e){
			e.printStackTrace();
		}
	}
	public void readString(String fileName){
		try{
			FileInputStream fin = new FileInputStream(fileName);
			int i;
			while((i = fin.read())!= -1){
				System.out.print((char)i);
			}
			System.out.println();
			fin.close();
		}
		catch(Exception e){
			e.printStackTrace();
		}
	}
	public void bufferedWriteCharacter(String fileName,char c){
		try{
			FileOutputStream fout = new FileOutputStream(fileName,true);
			BufferedOutputStream bout = new BufferedOutputStream(fout);
			bout.write(c);
			bout.flush();
			bout.close();
		}
		catch(Exception e){
			e.printStackTrace();
		}
	}
	public void bufferedWriteString(String fileName,String c){
		try{
			FileOutputStream fout = new FileOutputStream(fileName,true);
			BufferedOutputStream bout = new BufferedOutputStream(fout);
			byte[] write = c.getBytes();
			bout.write(write);
			bout.flush();
			bout.close();
		}
		catch(Exception e){
			e.printStackTrace();
		}
	}
	public void bufferedReadCharacter(String fileName){
		try{
			FileInputStream fin = new FileInputStream(fileName);
			BufferedInputStream bin = new BufferedInputStream(fin);
			char i = (char)bin.read();
			System.out.println(i);
			bin.close();
		}
		catch(Exception e){
			e.printStackTrace();
		}
	}
	public void bufferedReadString(String fileName){
		try{
			FileInputStream fin = new FileInputStream(fileName);
			BufferedInputStream bin = new BufferedInputStream(fin);
			byte[] res = new byte[bin.available()];
			bin.read(res);
			String result = new String(res);
			System.out.println(result);
			bin.close();
		}
		catch(Exception e){
			e.printStackTrace();
		}
	}
}
