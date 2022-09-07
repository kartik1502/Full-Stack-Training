package javafilehandling;

import java.io.IOException;

public class FileHandlingDriver {

	public static void main(String[] args) throws IOException {
		
		FileHandling fh = new FileHandling();
		fh.createFile("D://file.txt");
		fh.writeCharater("D://file.txt", 'k');
		fh.writeString("D://file.txt","Am the boss");
		fh.readCharacter("D://file.txt");
		fh.readString("D://file.txt");
		fh.bufferedWriteCharacter("D://file.txt", 's');
		fh.bufferedWriteString("D://file.txt", "Karthik");
		fh.bufferedReadCharacter("D://file.txt");
		fh.bufferedReadString("D://file.txt");
	}
}
