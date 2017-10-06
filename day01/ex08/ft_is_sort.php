<?php
function  ft_is_sort($array)
{
	$sort = $array;
	sort($sort);

	$status = true;
	foreach ($sort as $key => $value) 
	{
		if ($value != $array[$key]) 
			return false;
	}
	return true;
}
?>