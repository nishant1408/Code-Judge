import java.util.*;
class problem2
{

 public static void main(String args[])
 {
int i,c=0,j,d=0;
 Scanner sc=new Scanner(System.in);
  String st=sc.nextLine();
  int m=st.length();
  for(i=0;i<m;i++)
   {
     char ch=st.charAt(i);
     int num=(int)ch;
     for(j=1;j<=num;j++)
   {
  if(num%j==0)
  c=c+1;
 }
if (c==2)
     d=d+1;
}
 System.out.println(d);
}
}