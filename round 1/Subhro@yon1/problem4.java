import java.io.*;
public class problem4
{
public static void main(String[]args)throws IOException
{
BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
int num;
int sum=0,sum1=0,d,d1;
num = Integer.parseInt(br.readLine());
d=num%10;
sum=sum+d;
num=num/10;
d1=sum%10;
sum1=sum1+d1;
sum=sum/10;
if(sum1==1)
System.out.println("yes");
else
System.out.println("no");
}
}

