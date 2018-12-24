import java.util.*;
public class problem1
{
public static void main(String args[])
{
Scanner in=new Scanner(System.in);
int n,i;
System.out.println("Enter a Number:");
n=in.nextInt();
for(i=0;i<n;i++)
{
if(i%2==0)
{
System.out.println("Yes it is a Prime Number");
}
else
{
System.out.println("No it is not a Prime Number");
}
}
}
}
