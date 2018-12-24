import java.util.*;
class problem2{
public static void main(String args[]){
Scanner sc=new Scanner(System.in);
String a=sc.next();
int b=a.length();
int coun=0;
for(int i=0;i<b;i++){
char ch=a.charAt(i);
int h=(int)ch;
int k=(int)(Math.sqrt(h));
int flag=0;
for(int j=2;j<=k;j++){
if(h%j==0)
flag=100;
}
if(flag!=100)
++coun;
}
System.out.println(coun);
}
}
