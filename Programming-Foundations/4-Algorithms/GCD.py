# first approach using while loop

a = 8
b = 20

# if b > a:
#     c = b
#     b = a
#     a = c

# r = a % b

# while r != 0:
#     a = b
#     b = r

#     r = a % b


# print(b)


# ##########################  # second approach using function and recursion
def gcd(a, b):

    r = a % b

    if r == 0:
        # print("b =",b)
        return b
        # print(b)

    else:
        a = b
        b = r

        return gcd(a, b)


print(gcd(60, 96))
print(gcd(20, 8))
