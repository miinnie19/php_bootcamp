<?PHP
	function error()
	{
		echo "ERROR\n";
		exit;
	}

	if ($_POST['submit'] !== "OK")
		error();
	if (!$_POST["login"] || !$_POST["passwd"])
		error();

	$private = "../private/";
	$private_file = $private . "passwd";
	if (file_exists($private_file))
		$authentication = unserialize(file_get_contents($private_file));

	$largest_key = 0;
	foreach ($authentication as $key => $element)
	{
		if ($element["login"] === $_POST["login"])
			error();
		if ($key > $largest_key)
			$largest_key = $key;
	}

	$authentication[$largest_key + 1]["login"] = $_POST["login"];
	$authentication[$largest_key + 1]["passwd"] = hash("whirlpool", $_POST["passwd"]);
	@mkdir($private);
	file_put_contents($private_file, serialize($authentication));
	echo "OK\n";
?>