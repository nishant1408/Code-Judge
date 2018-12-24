import java.util.*;
class problem1{
public static void main(String args[]){
Scanner sc=new Scanner(System.in);
long a;
a=sc.nextLong();
long k=(long)(Math.sqrt(a));
int flag=0;
for(long i=2;i<=k;i++){
if(a%i==0)
flag=100;
}
if(flag==100)
System.out.println("No");
else
System.out.println("Yes");
}
}