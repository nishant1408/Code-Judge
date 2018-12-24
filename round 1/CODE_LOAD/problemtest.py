a=int(input("Enter no::"))
k=0
for i in range(2,a//2+1):
if(a%i==0):
k=k+1
if(k<=0):
print("The Number is prime")
else:
print("The Number isn't prime")
