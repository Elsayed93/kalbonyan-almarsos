def qSort(arr):
    if len(arr) < 2: # one element 
        return arr
    else:
        pivot = arr[0]
        less = []
        greater = []
        for i in range(1, len(arr)):
            if (arr[i] <= pivot):
                less.append(arr[i])
            else:
                greater.append(arr[i])

        return qSort(less) + [pivot] + qSort(greater)


print(qSort([6, 1, 2, 5, 3, 8]))
