<?php
Class NightsWatch implements IFighter
{
	private $array;
	public function recruit($fighters)
	{
		if ($fighters instanceof IFighter)
		{
			$this->array[] = $fighters;
		}
	}
	public function fight()
	{
        foreach ($this->array as $key => $value)
        {
			$value->fight();
		}
	}
}

?>