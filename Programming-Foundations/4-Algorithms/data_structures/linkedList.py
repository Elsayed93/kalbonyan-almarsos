# Node class >>> data and next
class Node(object):
    # set initial state
    def __init__(self, val) -> None:
        self.data = val
        self.next = None

    # getter and setter for val
    def getData(self):
        return self.data

    def setData(self, val):
        self.data = val

    # getter and setter for next
    def getNext(self):
        return self.next

    def setNext(self, node):
        self.next = node



# LinkedList class
#  when create a linked list at the beginning, it will be empty >> so the head will be none 
class LinkedList(object):
    def __init__(self, head = None) -> None:
        self.head = head
        self.count = 0 # to trac the number of nodes

    # insert a node
    def insert(self,data):
        new_node = Node(data)
        new_node.next = self.head
        self.head = new_node 
        self.count += 1

    # find a value
    def find(self, val):
        item = self.head

        while (item != None):
            if(item.getData() == val):
                return item
            else:
                item = item.getNext()

        return None
        
    # delete a value 



    