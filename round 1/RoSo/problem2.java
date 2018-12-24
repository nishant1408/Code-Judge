import java.util.*;
class problem2
{
boolean isprime(int n)
{
int c=1;
for(int i=2;i<=n;i++)
{
if(n%i==0)
{
c=c+1;
}
}
if(c==2)
return (true);
else
return (false);
}

public static void main(String args[])
{
problem2 ob=new problem2();
Scanner sc=new Scanner(System.in);
int l, count=0;
String n=sc.nextLine();
l=n.length();
for (int i=0; i<l; i++)
{
char c=n.charAt(i);
int j=(int)c;
if(ob.isprime(j)==true)
count++;
}
System.out.println(count);
}
}