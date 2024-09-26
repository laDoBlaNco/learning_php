<?php

/** ------------------------ Exceptions ------------------------- */

/**
 * PHP has an exception model similar to that of other langs. An exception
 * can be thrown, and caught ("catched") within php. code may be surrounded in a 
 * try block, to facilitate the catching of potential exceptions. Each try must have
 * at least one corresponding catch or finally block.
 */

 function inverse($x){
  if(!$x) throw new Exception('Division by zero');
  
  return 1/$x;
 }
 

 try{
  echo inverse(5),'<br>';
  echo inverse(0),'<br>';
 }catch(Exception $e){
  echo 'Caught Exception',$e->getMessage(), ' <br>';
 }finally{
  echo 'First Finally<br>';
 }


 try{
  echo inverse(0);
 }catch(Exception $e){
  echo 'Caught Exception',$e->getMessage(), ' <br>';
 }finally{
  echo 'Second Finally<br>';
 }

 echo 'Hello world<br>';