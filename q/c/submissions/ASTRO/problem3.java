import java.util.*;
class problem3{
public static void main(String args[]){
int y=0;
int y1=0;
int f=0;
int a[]={31,29,31,30,31,30,31,31,30,31,30,31};
int a1[]={31,28,31,30,31,30,31,31,30,31,30,31};
Scanner sc=new Scanner(System.in);
int n=sc.nextInt();
int n1=sc.nextInt();
if((n%4)==0){
for(int i=0;i<12;i++){
y=y+a[i];
if(y>n1){
y1=i;
break;
}
}
}
if((n%4!=0)){
for(int i=0;i<12;i++){
y=y+a1[i];
if(y>n1){
y1=i;
break;
}
}
}
if((n%4)==0){
for(int x=0;x<=(y1-1);x++){
f=f+a[x];
}
}
if((n%4)!=0){
for(int x=0;x<=(y1-1);x++){
f=f+a1[x];
}
}
if((n%4==0)&&(n1>366))
System.out.println(("0"+(n1-366))+"/"+"0"+(1)+"/"+(n+1));
else if((n%4!=0)&&(n1>365))
System.out.println(("0"+(n1-365))+"/"+"0"+(y1+1)+"/"+(n+1));
else
System.out.println(("0"+(n1-f))+"/"+"0"+(y1+1)+"/"+n);
}}