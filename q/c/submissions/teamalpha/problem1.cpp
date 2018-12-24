#include<iostream>

using namespace std;

int main()
     { long long int n, count=0; 
       cin>>n;

       for(long long int i=2;i<n/2;i++)
          {
            if(n%i==0)
               count++;
           }

       if(count==0)
          cout<<"Yes";
       else
          cout<<"No";

       return 0;
     }   
              
        
        

