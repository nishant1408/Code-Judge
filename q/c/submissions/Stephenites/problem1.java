import java.util.*;
public class problem1
{
public static void main(String args[])
{
Scanner in=new Scanner (System.in);
int i,n,m,flag;
n=in.nextInt();
m=n/2;
if(n==0||n==1)
{
System.out.println("No");
}
else
{
for(i=2;i<=m;i++)
{
if(n%i==0)
System.out.println("yes");
flag=1;
}
}
}
}
