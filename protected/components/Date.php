<?php

class Date extends CComponent{

    public function init()
    {
        
    }


    public function dateCreate()
    {
        $dateCreate = (int) '2013';

        if($dateCreate != date('Y')) 
        {  
            return $dateCreate.' - '.date('Y');
        }
        else
        {
            return date('Y');
        }
    }

    public function datePost($time)
    {
        $date = explode(" ", $time);
        $date = explode("-", $date['0']);

        switch ($date['1'])
        {
            case 1:     $m = 'Января';      break;
            case 2:     $m = 'Февраля';     break;
            case 3:     $m = 'Марта';       break;
            case 4:     $m = 'Апреля';      break;
            case 5:     $m = 'Мая';         break;
            case 6:     $m = 'Июня';        break;
            case 7:     $m = 'Июля';        break;
            case 8:     $m = 'Августа';     break;
            case 9:     $m = 'Сентября';    break;
            case 10:    $m = 'Октября';     break;
            case 11:    $m = 'Ноября';      break;
            case 12:    $m = 'Декабря';     break;
        }

        return $date = $date['2'].' '.$m.' '.$date['0'];
    }
}