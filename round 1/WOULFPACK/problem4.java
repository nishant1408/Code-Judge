import java.io.*;
class problem4
{
public static void main(string args[])throws IOException
{
double j,k,l,s,c;
InputStreamReader read=new InputStreamReader(System.in);
BufferedReader br=new InputStreamReader(read);
System.out.println("enter a no");
j=Integer.parseInt(br.readLine());
k=Integer.parseInt(br.readLine());

j=i%10;
k=j-i;
s=k/10;
c=j+s;
if(c=10)
{
System.out.println("Yes");
}
else{
System.out.println("no");
}
}
}