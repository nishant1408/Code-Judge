import java.util.*;
class problemtest
{
int i,c,d;
 public int prime(int n)
{
for(i=1;i<=n;i++)
{
  if(n%i==0)
  c=c+1;
 }
if (c==2)
return 1;
else
return 2;
}
 public void main(String args[])
 {
 Scanner sc=new Scanner(System.in);
  System.out.println("enter a sentence");
  String st=sc.nextLine();
  int m=st.length();
  for(i=0;i<m;i++)
   {
     char c=st.charAt(i);
     int num=(int)c;
     if(prime(num)==1)
     d=d+1;
}
 System.out.println(d);
}
}