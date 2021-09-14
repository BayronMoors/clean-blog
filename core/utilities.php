<?php

/**
 * 
 *  ./core/utilities.php
 * 
 */


function numberLimit(int $id = 9) :int
{
   return $id;
}

function datify($date, $format = FORMAT_DATE){
   $date = new DateTime($date);
   echo $date->format($format);
}
