x = int(input())
xarr = list(map(int, str(x)))
for i in range(len(xarr),0,-2):
    print(xarr)
    print(sum(xarr))
    xarr = xarr[:len(xarr)-2]