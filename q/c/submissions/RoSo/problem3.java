import java.util.*;
class problem3
{
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
int y=sc.nextInt();
int d=sc.nextInt();
int Date=0, i=0, rem=0;
if(y>=1&&y<=9999&&d>=1&&d<=2000)
{
if(d>366)
{
d=d-366+1;
y=y+1;
}
if (y%400==0||y%4==0)
{
int ar1[]={31,29,31,30,31,30,31,31,30,31,30,31};
while(d>0)
{
Date=d-ar1[i];
d=d-ar1[i];
rem=ar1[i];
i++;
}
}
else
{
if(d>365)
{
d=d-365+1;
y=y+1;
}
int ar2[]={31,28,31,30,31,30,31,31,30,31,30,31};
while(d>0)
{
Date=d-ar2[i];
d=d-ar2[i];
rem=ar2[i];
i++;
}
}
Date=Date+rem;
String fd,fi;
if (Date<10)
fd="0"+Integer.toString(Date);
else
fd=Integer.toString(Date);
if(i<10)
fi="0"+Integer.toString(i);
else
fi=Integer.toString(i);
System.out.println(fd+"/"+fi+"/"+y);
}
}
}


