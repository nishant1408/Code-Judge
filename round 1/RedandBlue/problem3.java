import java.util.*;
class problem3
{
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
int i, j;
int r=sc.nextInt();
for(i=1; i<=r; i++)
{
for(j=1; j<=i; j++)
{
System.out.print(j);
}
for(j=i-1; j>=1; j--)
{
System.out.print(j);
}
System.out.println();
}
}
}
