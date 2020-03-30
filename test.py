while True:
    try:
        x, y = map(int, input().split())
    except EOFError:
        break

    if x > y:
        x = x - y
        print(x)
    else:
        y = y - x
        print(y)