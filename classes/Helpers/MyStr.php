<?php



class MyStr
{
   static function limit($str)
   {
    if(strlen($str) >20 )
    {
        ///$string start  , lenght 
        $str = substr($str , 0 , 50)."...";
    }
    return $str;
   }
   
}