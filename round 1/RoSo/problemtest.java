import java.util.*;
class problem3
{
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
int n;
n=sc.nextInt();
for(int k=1; k<=n; k++)
{
for(int i=1; i<=n; i++)
{
System.out.print(i);
}
for (int j=n-1; j>0; j--)
{
System.out.print(j);
}
System.out.println();
}
}
}

