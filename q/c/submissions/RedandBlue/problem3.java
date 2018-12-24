import java.util.*;
class problem3
{
public static void main(String[]args)
{
Scanner sc=new Scanner(System.in);
int year=sc.nextInt();
int days=sc.nextInt();
int ear[]=new int[50];
int dd=days;
int yyyy=year;
int freq=1;
if(year%4==0)
{
ear[0]=12;
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
while(days>29)
{
days=days-ear[freq];
freq++;
}
if(freq>12)
{
freq=freq-12;
yyyy=yyyy+1;
}
}
else
{
ear[0]=12;
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
freq=1;
while(days>28)
{
days=days-ear[freq];
freq++;
}
if(freq>12)
{
freq=freq-12;
yyyy=yyyy+1;
}
}
if(days<10 && freq<10)
System.out.println("0"+days+"/"+"0"+freq+"/"+yyyy);
else if(days<10 && freq>9)
System.out.println("0"+days+"/"+freq+"/"+yyyy);
else if(days>9 && freq<10)
System.out.println(days+"/"+"0"+freq+"/"+yyyy);
else System.out.println(days+"/"+freq+"/"+yyyy);

}
}
