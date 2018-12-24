import java.util.*;
class problem2
{
public static void main()
{
int i, s,ctr=0;
Scanner sc=new Scanner(System.in);
String x=sc.nextString();
s=int(x);
for(i=2; i<=(s/2); i++)
{
if(s%i==0)
p=1;
}
if(p==0)
ctr++;
}
System.out.print(ctr);
}
}