#!/usr/bin/php
<?php
function ft_split($str)
{
    $ret = trim(preg_replace("[\s+]", ' ', $str));
    $ret_str = explode(" ", $ret);
    sort($ret_str);
    return($ret_str);
}
$merge = array();
if ($argc >= 2) 
{
    $i = 1;
    while ($i < $argc) 
    {
        $split_str = ft_split($argv[$i]);
        $merge = array_merge($merge, $split_str);
        $i++;   
    }
    $alphas = array();
    $nums = array();
    $specials = array();
    $n = 0;
    while ($merge[$n]) 
    {
        if (ctype_alpha($merge[$n])) 
            array_push($alphas, $merge[$n]);
        elseif (is_numeric($merge[$n])) 
            array_push($nums, $merge[$n]);
        else
            array_push($specials, $merge[$n]);
        $n++;
    }
    asort($alphas, SORT_NATURAL | SORT_FLAG_CASE);
    asort($nums, SORT_STRING);
    asort($specials, SORT_STRING);

    foreach ($alphas as $a) 
        echo $a."\n";
    foreach ($nums as $a) 
        echo $a."\n";
    foreach ($specials as $a) 
        echo $a."\n";
}
else
    return ;
?>