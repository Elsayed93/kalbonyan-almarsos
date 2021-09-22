# check if the list is sorted
items1 = [1, 2, 3, 4]
items2 = [1, 5, 4, 2]


def is_sorted(items):
    for i in range(0, len(items)-1):
        if items[i] > items[i+1]:
            return False
    return True


print(is_sorted(items1))
print(is_sorted(items2))
