#!/usr/bin/php
<?php
function ft_split($str)
{
    $ret = trim(preg_replace("[\s+]", " ", $str));
    $ret_str = explode(" ", $ret);
    return ($ret_str);
}
if ($argc == 2)
{
    $split = ft_split($argv[1]);
    $space = implode(" ", $split);
    echo $space."\n";
}
?>