<?php
function traianglearea($width_bottom,$height)
{
    return $width_bottom*$height/2;
}
function squarearea($width_bottom,$height)
{
    return $width_bottom*$height;
}
 function trapezoidarea($width_top,$width_bottom,$height) 
 {
    return ($width_top+$width_bottom)* $height/2;
 }
    

 
 echo "三角形の面積は" . traianglearea(5,4) ."です。";
 echo "四角形の面積は" .squarearea(6,7) . "です。";
 echo "台形の面積は" .trapezoidarea(8,2,5) . "です。";
