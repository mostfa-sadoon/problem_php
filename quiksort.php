<?php
class Quiksort{

    public static function sort($arr){
        $n=count($arr);
        if($n<= 1){
            return $arr;
        }
        else{
            $pivot = $arr[0];
            $left = array();
            $right = array();
            for($i = 1; $i < count($arr); $i++)
            {
                if($arr[$i] < $pivot){
                    $left[] = $arr[$i];
                }
                else{
                    $right[] = $arr[$i];
                }
            }            
            return array_merge(self::sort($left), array($pivot),self::sort($right));
        }
    
    }
} 
class main{
   public $arr=[];
   public $name;
   public function __construct($arr,$name){
     $this->arr=$arr;
     $this->name=$name;
   }
   public function sort(){
     return  Quiksort::sort($this->arr);
   }
}
$arr=[3,5,2,8,4];
$obj=new main($arr,'mostfa');
print_r($obj->sort());

?>