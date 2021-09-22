# find item index in un-ordered collection
items = [1, 2, 5, 44, 62, 58, 778, 64, 2, 10, 9, 8, 52]


def findItemIndex(item, itemsCollections):

    for i in range(0, len(itemsCollections)):
        if item == itemsCollections[i]:
            return i
    return None


print(findItemIndex(2, items))
print(findItemIndex(7788, items))
