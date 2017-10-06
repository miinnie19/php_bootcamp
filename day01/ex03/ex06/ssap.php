#!/usr/bin/php
<?php
function ft_split($str)
{
	$ret = trim(preg_replace("[\s+]", ' ', $str));
	$ret_str = explode(" ", $ret);
	return($ret_str);
}

$merge = array();
if ($argc >= 2)
{
	$i = 1;
	while ($i < $argc)
	{
		$splitted = ft_split($argv[$i]);
		$merge = array_merge($merge, $splitted);
		$i++;
	}
}
asort($merge);
foreach ($merge as $new)
{
	echo $new."\n";
}
?>