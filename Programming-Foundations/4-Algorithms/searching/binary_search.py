# search in an ordered collection using Binary Search

# items = [1, 2, 5, 44, 62, 58, 778, 64, 10, 9, 8, 52]
items = [2, 5, 8, 19, 26]


def binarySearch(item, items):
    lower = 0
    upper = len(items) - 1

    while lower <= upper:
        mid = (lower + upper) // 2

        if item == items[mid]:
            return mid
        elif item < items[mid]:
            upper = mid - 1
        else:

            lower = mid + 1

    return None


print(binarySearch(5, items))
# print(binarySearch(2, items))
