<?php
class Binarysearch{
    public function binarysearch($arr,$l,$r,$item)
    {
        
        if($r>=$l){
         $mid=ceil($l + ($r - $l) / 2);
         if($arr[$mid]==$item){
             return floor($mid);
         }
         if($arr[$mid]>$item)
             return $this->binarysearch($arr,$l,$mid - 1,$item);
             return $this->binarysearch($arr,$mid + 1,$r,$item);
        }
        return -1;
    }
    public static function printname($name){
        echo 'name';
    }
}
$myobj= new Binarysearch();
$arr=[2,3,4,10,40,52,60,70];
$n=count($arr);
$x=52;
echo $myobj->binarysearch($arr,0,$n,$x);


class test {
    public function hh()
    {
        Binarysearch::printname();
    }
}
?>