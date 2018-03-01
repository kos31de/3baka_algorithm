<?php

for($i=1;$i<=1000;$i++){

    if($i%3 == 0 || strstr($i, '3') ) {
       echo $i."dumb";
     }elseif($i%3 == 0){
       echo "idiot"
     }elseif (strstr($i, '3')) {
       echo "stupid"
     }
     else{
       echo $i."<br/>";
     }
       echo "\n";
}
?>
