import java.util.*;
class problem4
{
public static void main()
{
Scanner sc=new Scanner(System.in);
int s=0, sum=0;
while(n>0)
{
p=n%10;
s=s+p;
n=n/10;
}
if(s==1)
println("yes")
elseif(s>9)
{
x=s%10;
sum=sum+s;
if(sum==1)
println("yes");
else
println("no");
}
}
}
