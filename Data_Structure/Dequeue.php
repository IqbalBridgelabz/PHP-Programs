<?php 
// Program to implement basic PHP functions for doubly linked list 
// Instantiating an object of class SplDoublyLinkedList 
$dlist = new SplDoublyLinkedList(); 
// Inserting elements at the end of the list 
$dlist->push('geeks'); 
$dlist->push('for'); 
$dlist->push('practice'); 
// Displaying the list 
echo "Original List : "; 
for ($dlist->rewind(); $dlist->valid(); $dlist->next()) { 
	echo $dlist->current()." "; 
} 
// Deleting element from the end of the list 
$dlist->pop(); 
// Adding a new element at specific index 
// Add 'code' at index 2 
$dlist->add(2, "code"); 
// Displaying the updated list 
echo "\n\nUpdated List : "; 
for ($dlist->rewind(); $dlist->valid(); $dlist->next()) { 
	echo $dlist->current()." "; 
} 
// Printing the count of nodes 
echo "\n\nCount = " . $dlist->count() . "\n"; 
// Printing the node at top of the list 
echo "Top = ". $dlist->top() . "\n"; 
// Printing the node at bottom of the list 
echo "Bottom = " . $dlist->bottom() . "\n"; 
?> 
