import java.io.*;
class problem6{
public static void main(String args[]){
try{String p="";
String y="";
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
String s=br.readLine();
s=s.trim();
s=s+" ";
int l=s.length();
for(int i=0;i<l;i++){
char ch=s.charAt(i);
if (ch!=' ')
p=p+s.charAt(i);
else{
for(int j=p.length()-1;j>=0;j--)
y=y+p.charAt(j);
p="";
y=y+" ";
}
}

System.out.println(y.trim());
}
catch(Exception e){}
}}