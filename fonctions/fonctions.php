<?php


function board($nombre_pair)
{

$tableau = [];

for($i=1;$i < $nombre_pair*2;$i++)
{
    // $tableau = new Card($i.'img'.$i % 3.,'i.jpg','card_dos.jpg',false);
}
shuffle($tableau);

return $tableau;
}






?>