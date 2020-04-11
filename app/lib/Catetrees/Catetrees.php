<?php


class Catetrees
{

    public static function trees($cateRes,$pid=0,$level=0){
        static $arr=array();
        foreach ($cateRes as $item){
            if($item->pid==$pid){
                $item->level=$level;
                $arr[] = $item;
                self::trees($cateRes,$item->id,$level+1);
            }
        }
        return $arr;
    }

}
?>
