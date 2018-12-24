import java.util.Scanner;
public class problem2{

 public static void main(String args[])
{ 
Scanner sc=new Scanner(System.in);
String s=sc.nextLine();

int l,i,j,c=0;
String rev="";

l=s.length();

  j=s.indexOf(" ");
   System.out.println(s.charAt(0)+"."+" "+s.substring(j+1,l));

}
}
