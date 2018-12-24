import java.util.*;
class problem3
{
public static void main(String[]args)
{
int n,a=1,i,j;
Scanner sc=new Scanner(System.in);
n=sc.nextInt();
for(i=1;i<=n;i++)
{
for(j=1;j<=a;j++)
System.out.print(j);
j=j-2;
while(j>0)
{
System.out.print(j);
j--;
}
a++;
System.out.println("");
}
}
}