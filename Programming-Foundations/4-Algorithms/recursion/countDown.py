def countDown(x):
    if x == 0:
        print('Done.')
        return
    else:
        print(x, '...')
        countDown(x-1)
        print('foo', x)
        print('bar', x)


countDown(4)
