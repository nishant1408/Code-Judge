import java.util.*;
class problem4
{
int sumofdigits(int n)
{
int s=0,a;
while(n!=0)
{
a=n%10;
s=s+a;
n=n/10;
}
return s;
}
public static void main(String args[])
{
problem4 ob=new problem4();
Scanner sc=new Scanner(System.in);
int m;
m=sc.nextInt();
int sum=ob.sumofdigits(m);
while (sum>9)
{
sum=ob.sumofdigits(sum);
}
if(sum==1)
System.out.println("yes");
else
System.out.println("no");
}
}