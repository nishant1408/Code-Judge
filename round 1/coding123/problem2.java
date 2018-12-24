import java.util.*;
class problem2
{
int i;
  public int prime(int m)
{
int c=0;
  for(i=1;i<=m;i++)
  {
    if(m%i==0)
      c=c+1;
}
if(c==2)
return 1;
else
return 0;
}
  public void main()
  { 
char c;
int d=0,num;
Scanner sc=new Scanner(System.in);
   System.out.println("enter  string");
   String st=sc.nextLine();
   int n=st.length();
   for(i=0;i<n;i++)
   { 
     c=st.charAt(i);
     num=(int)c;
     if (prime(num)==1)
     d=d+1;
    }
   System.out.println(d);
}
}
     