# n,d=map(int,input().strip().split())

# arr = []

# for i in range(0,n):
#     arr.append(input())

# for i in range(d):
#     tmp = arr.pop(0)
#     arr.append(tmp)

# for i in arr:
#     print(i)


# d,e,g = map(int, input().strip().split())


# print(d)
# print(e)
# print(g)


# st = "i a b a c a"

# print(st.strip(" a"))



# while True:
#     try:
#         a,b,c = map(int,input().strip().split())
#     except EOFError:
#         break
    
#     if a == 0 and b == 0 and c == 0:
#         break
#     if a*a + b*b == c*c or b*b + c*c == a*a or a*a + c*c == b*b:
#         print("right")
#     else:
#         print("wrong")


import math
import os
import random
import re
import sys

# # Complete the matchingStrings function below.
# def matchingStrings(strings, queries):
#     return 0

# if __name__ == '__main__':
#     fptr = open(os.environ['OUTPUT_PATH'], 'w')

#     strings_count = int(input())

#     strings = []

#     for _ in range(strings_count):
#         strings_item = input()
#         strings.append(strings_item)

#     queries_count = int(input())

#     queries = []

#     for _ in range(queries_count):
#         queries_item = input()
#         queries.append(queries_item)

#     res = matchingStrings(strings, queries)

#     fptr.write('\n'.join(map(str, res)))
#     fptr.write('\n')

#     fptr.close()

# sn = int(input())

# sarr = []
# qarr = []
# for i in range(sn):
#     sarr.append(input())

# qn = int(input())

# for i in range(qn):
#     qarr.append(input())


# c = []

# count = 0
# for q in qarr:
#     for s in sarr:
#         if s == q:
#             count += 1
#     c.append(count)
#     count = 0


# print(*c,sep="\n")
# print(qarr)


def ckPrime(n):
    if n <= 1:
        return False
    i = 2
    while i*i <= n:
        if(n%i==0):
            return False
        i+=1
    return True

# print("olkk")
primes = []
for i in range(100):
    if ckPrime(i):
        primes.append(i)

print(primes)