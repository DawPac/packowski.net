<?php
   function freespeach(){
   $output = array('');
   $j = 0;
   $colors = array("#09f911", "#029d74", "#e35bd8", "#4156c5", "#635688");
   for($line = 0; $line < 7; $line += 1){
      for($column = 0; $column < 5; $column += 1){
         if($line != 6 or $column != 4){
            $output[$j] .= '<span style="background-color:'.$colors[$column].'">     </span>';
         }
         else{
            $output[$j] .= '<span style="background-color:'.$colors[$column].'"> +C0 </span>';
         }
      }
      $j += 1;
      array_push($output, '');
      }
      return $output;
   }
?>
