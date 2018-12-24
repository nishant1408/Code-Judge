import java.io.*;
class problem3
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
int year,day;
year=Integer.parseInt(br.readLine());
day=Integer.parseInt(br.readLine());
int c=0,i;
if(day>365)
{
year++;
day=day-365;
}
int ar[]={31,28,31,30,31,30,31,31,30,31,30,31};
for(i=0;i<12;i++)
{
if(day>ar[i])
day=day-ar[i];
else
{
c=i;
break;
}
}
c++;
if(day<10)
System.out.print("0"+day+"/");
else
System.out.print(day+"/");
if(c<10)
System.out.print("0"+c+"/");
else
System.out.print(c+"/");
System.out.print(year);
}
}
