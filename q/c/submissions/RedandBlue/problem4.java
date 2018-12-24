import java.util.*;
class problem4
{
static int Digsum(int x)
{
int digit,sum=0;
while(x>0)
{
digit=x%10;
sum+=digit;
x/=10;
}
return sum;
}
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
int x=sc.nextInt();

int y=Digsum(x);
while(y>=10)
{
y=Digsum(y);
}
if(y==1)
{
System.out.print("yes");
}
else System.out.print("no");
}


}