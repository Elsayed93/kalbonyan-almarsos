# power function
def power(num, pwr):
    if pwr == 0:
        return 1

    else:
        return num * power(num, pwr-1)


# factorial
def factorial(num):
    if num == 0:
        return 1
    elif num < 0:
        return "Invalid Inputs"
    else:
        return num * factorial(num-1)


print("2 power 3 = ", power(2, 3))
print("1 power 5 = ", power(1, 5))
print("2 power 0 = ", power(2, 0))

print("5!= ", factorial(5))
print("0!= ", factorial(0))
print("-1!= ", factorial(-1))
