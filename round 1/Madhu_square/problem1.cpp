#include<stdio>
using namespace std
 void main()
   { 
      int flag=0,i;
      float n,m=0;
    
      cin>>n;
      m=n/2;
      for(i=2;i<=m;i++)
      { if(m%i==0)
        {cout<<"no";
        flag=1;
         }
        else if(flag==0)
        cout<<"yes";
}}
