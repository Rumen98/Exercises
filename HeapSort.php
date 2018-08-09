<?php
  class Node
  {
  private $_i; 
  
  public function __construct($key)
  {
  $this->_i = $key;
  }
  
  public function getKey()
  {
  return $this->_i;
  }
  }
  
  class Heap
  {
  private $heap_Array;
  private $_current_Size;
  
  public function __construct()
  {
  $heap_Array = array();
  $this->_current_Size = 0;
  }
  
  
 public function remove()
  {
  $root = $this->heap_Array[0];
  
  $this->heap_Array[0] = $this->heap_Array[--$this->_current_Size];
  $this->bubbleDown(0); 
  return $root; 
  }
  
 
  public function bubbleDown($index)
  {
  $larger_Child = null;
  $top = $this->heap_Array[$index]; // save root
  while ($index < (int)($this->_current_Size/2)) { // not on bottom row
  $leftChild = 2 * $index + 1;
  $rightChild = $leftChild + 1;
  
  
  if ($rightChild < $this->_current_Size 
  && $this->heap_Array[$leftChild] < $this->heap_Array[$rightChild]) // right child exists?
  {
  $larger_Child = $rightChild;
  } else {
  $larger_Child = $leftChild;
  }
  
  if ($top->getKey() >= $this->heap_Array[$larger_Child]->getKey()) {
  break;
  }
    $this->heap_Array[$index] = $this->heap_Array[$larger_Child]; 
  $index = $larger_Child; 
  }
  
  $this->heap_Array[$index] = $top; 
  }
  
  public function insertAt($index, Node $newNode)
  {
  $this->heap_Array[$index] = $newNode;
  }
  
  public function incrementSize()
  {
  $this->_current_Size++;
  }
  
  public function getSize()
  {
  return $this->_current_Size;
  }
  
  public function asArray()
  {
  $arr = array();
  for ($j = 0; $j < sizeof($this->heap_Array); $j++) {
  $arr[] = $this->heap_Array[$j]->getKey();
  }
  
  return $arr;
  }
  }
  
  function heapsort(Heap $Heap)
  { 
  $size = $Heap->getSize();

  for ($j = (int)($size/2) - 1; $j >= 0; $j--) 
  {
  $Heap->bubbleDown($j);
  }
  
  for ($j = $size-1; $j >= 0; $j--) { 
  $BiggestNode = $Heap->remove();
 
  $Heap->insertAt($j, $BiggestNode);
  }
  
  return $Heap->asArray(); 
  }
  
  $arr = array(3, 0, 2, 5, -1, 4, 1,33,55,13,46,87,42,10,34,43,56,3 , 6, 2, 56, 32, 5, 89, 32);
  echo "Original Array : ";
  echo "<br>";
  echo implode(', ',$arr ); 
  echo "<br>";
  $Heap = new Heap();
  foreach ($arr as $key => $val) {
  $Node = new Node($val);
  $Heap->insertAt($key, $Node);
  $Heap->incrementSize();
  }
  $result = heapsort($Heap);
  echo "\nSorted Array : ";
  echo "<br>";
  echo implode(', ',$result)."\n";
  ?>