# import built-in deque object to deal with as a queue, beacause dealing with a list is not effiecient
from collections import deque

myQueue = deque()

# append
myQueue.append(1)
myQueue.append(2)
myQueue.append(3)
myQueue.append(4)

print(myQueue)

# pop from the front of the queue
x = myQueue.popleft()
print(x)
print(myQueue)
