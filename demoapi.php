<?php
/*Declare your variables*/
  $items = array();
/*populate your array with a list of dummy strings */
   for($i = 0;  $i < 12; $i++){
   $items[$i] = "this is message testing $i";
  }
  
  /*set the header type for output*/
  
  header('Content-Type: application/json');
  
  /*create variable to hold your json data*/
  
     $jsonOutput = json_encode($items);
  
  /* output the json data */ 
       
       echo $jsonOutput;
   
