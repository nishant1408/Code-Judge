import java.util.*;
class problem1
{
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
int p=0;
int i;
int n=sc.nextInt();
for(i=2; i<n/2; i++)
{
if(n%i==0)
p=1;
}
if(p==0)
System.out.println("Yes");
else
System.out.println("No");
}
}




