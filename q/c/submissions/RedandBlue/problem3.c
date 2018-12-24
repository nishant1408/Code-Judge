import java.util.*;
class problemtest
{
public static void main(String[]args)
{
Scanner sc=new Scanner(System.in);
int year=sc.nextInt();
int days=sc.nextInt();
int ear[]=new int[12];
int dd=days;
int yyyy=year;
int freq=1;
if(year%4==0)
{
ear[1]=31;
ear[2]=29;
ear[3]=31;
ear[4]=30;
ear[5]=31;
ear[6]=30;
ear[7]=31;
ear[8]=31;
ear[9]=30;
ear[10]=31;
ear[11]=30;
ear[12]=31;
while(days>0)
{
days=days-ear[freq];
freq++;
}
System.out.println(days+"/"+freq+"/"+year);
}
else
{
ear[1]=31;
ear[2]=28;
ear[3]=31;
ear[4]=30;
ear[5]=31;
ear[6]=30;
ear[7]=31;
ear[8]=31;
ear[9]=30;
ear[10]=31;
ear[11]=30;
ear[12]=31;

while(days>0)
{
days=days-ear[freq];
freq++;
}
System.out.println(days+"/"+freq+"/"+year);
}
}
}
