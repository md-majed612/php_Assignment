<?php
   echo "<h2>Using the break Statement</h2>";
   for($i=1; $i<=5; $i++)
   {
      if($i==3)
         break;
      echo $i, "<BR>";
   }
   
   echo "<h2>Using the continue Statement</h2>";
   for($i=1; $i<=5; $i++)
   {
      if($i==3)
         continue;
      echo $i, "<BR>";
   }
?>