#!/usr/bin/php
<?php
function ft_split($str)
{
	$ret = trim(preg_replace("[\s+]", ' ', $str));
	$ret_str = explode(" ", $ret);
	return($ret_str);
}
$i = 1;
$split_str = ft_split($argv[1]);
$max_value = count($split_str);

while ($i <= $max_value) 
{
	echo $split_str[$i];
	if($i != $max_value)
		echo " ";
	$i++;
}
echo $split_str[0];
echo "\n";
?>