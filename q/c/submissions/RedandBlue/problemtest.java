import java.util.*;
class problemtest
{
public static void main(String []args)
{
int i, len;
String str="";
Scanner sc=new Scanner(System.in);
str=sc.nextLine();
len=str.length();
for(i=0; i<len; i++)
{
if(str.charAt(i)==' ')
System.out.print(str.charAt(0)+". "+str.substring(i+1,len));
}

}
}

