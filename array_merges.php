function array_merges($array1,$array2)
{
        $sign=0;
        foreach($array2 as $key=>$var)
        {
            if(is_array($var))
            {
                $array1[$key] =array_merges(isset($array1[$key])?$array1[$key]:[],$var);
                $sign=1;
            }
            
        }
        if($sign==0)
        {
            $sign=0;
            return array_merge($array1,$array2);
        }
            
        else
        {
            $sign=0;
            return $array1;
        }
            
}

/***use this function as flow***/
 $a=['parent'=>['father'=>'libin'],'marr'=>['status'=>'已婚','marrname'=>'libin']];
 $b=['parent'=>['mother'=>'lu','father'=>'libin1'],'marr'=>['status'=>'未婚']];
 $c=$this->array_merges($a,$b);
  print_r($c);