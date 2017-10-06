#!/usr/bin/php

<?
function my_add($p1, $p2)
{
	return ($p1 + $p2);
}
	print("Hello\n");

$my_var = 42;
$my_str = "World";
$my_tab = array("zero", "un", "key2");
$my_hash = array("key1" => "val1", "key2" => "val2");

echo "$my_var\n$my_str";

$result = "21" + "21";
echo "$result\n";

echo $my_tab[1];
echo $my_hash["key2"]."\n";

echo "$my_tab\n\n";
print_r($my_tab);

//echo my_add("36","6");

if ($my_tab[1] == "un")
	echo "OK";
else
	echo "NOT OKAY";
?>
