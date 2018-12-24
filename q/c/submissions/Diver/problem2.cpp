#include<bits/stdc++.h>
#include<conio.h>

using namespace std;
int  main()
{
string s1;
string s2;
string s3;
string s4;
string ch =".";
int f =0;
int c=0;
int q =0;
getline(cin,s1);
int l =s1.size();

for(int i=0; i<l;i++)
{ 

if(s1[i]!=' ')
{ s2 = s2 + s1[i];
}
if(s1[i]==' ')
{ 
s3 =s3 +s1[0]+ch;


f=i;
}
if(i==l-1)
{
for (int j =f;j<l;j++)
{ s4 = s4 + s1[j];
}

}
}
cout<<(string)s3;
cout<<s4;
getch();
return 0;}